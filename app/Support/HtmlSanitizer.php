<?php

namespace App\Support;

use DOMDocument;
use DOMElement;

class HtmlSanitizer
{
    protected static array $allowedTags = [
        'p', 'br', 'strong', 'b', 'em', 'i', 'u', 'ul', 'ol', 'li',
        'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'blockquote', 'a',
        'span', 'table', 'thead', 'tbody', 'tfoot', 'tr', 'th', 'td', 'img',
    ];

    protected static array $droppedTags = [
        'script', 'style', 'iframe', 'object', 'embed', 'meta', 'link',
        'template', 'noscript', 'form', 'input', 'button', 'textarea', 'select',
    ];

    public static function clean(?string $html): string
    {
        if ($html === null || trim($html) === '') {
            return '';
        }

        $dom = new DOMDocument();
        $previous = libxml_use_internal_errors(true);
        $dom->loadHTML('<meta charset="utf-8">'.$html, LIBXML_HTML_NODEFDTD);
        libxml_clear_errors();
        libxml_use_internal_errors($previous);

        $body = $dom->getElementsByTagName('body')->item(0);

        if (! $body) {
            return $html;
        }

        self::walk($body->childNodes);

        $result = '';
        foreach ($body->childNodes as $node) {
            $result .= $dom->saveHTML($node);
        }

        return $result;
    }

    protected static function walk(object $nodes): void
    {
        foreach (iterator_to_array($nodes) as $node) {
            if (! $node instanceof DOMElement) {
                continue;
            }

            $tag = strtolower($node->nodeName);

            if (in_array($tag, self::$droppedTags, true)) {
                $node->parentNode->removeChild($node);

                continue;
            }

            if (! in_array($tag, self::$allowedTags, true)) {
                self::unwrap($node);

                continue;
            }

            self::filterAttributes($node);
            self::walk($node->childNodes);
        }
    }

    protected static function unwrap(DOMElement $node): void
    {
        $parent = $node->parentNode;

        while ($node->firstChild) {
            $parent->insertBefore($node->firstChild, $node);
        }

        $parent->removeChild($node);
    }

    protected static function filterAttributes(DOMElement $node): void
    {
        $tag = strtolower($node->nodeName);

        if ($tag === 'a') {
            self::keep($node, ['href', 'title', 'target']);

            $href = $node->getAttribute('href');
            if ($href === '' || self::unsafeUrl($href)) {
                $node->removeAttribute('href');
            }

            $target = strtolower($node->getAttribute('target'));
            if ($target !== '' && $target !== '_blank') {
                $node->setAttribute('target', '_blank');
            }

            if ($node->hasAttribute('target')) {
                $node->setAttribute('rel', 'noopener noreferrer');
            }

            return;
        }

        if ($tag === 'img') {
            self::keep($node, ['src', 'alt', 'width', 'height', 'loading']);

            $src = $node->getAttribute('src');
            if ($src === '' || self::unsafeUrl($src, true)) {
                $node->removeAttribute('src');
            }

            return;
        }

        if ($tag === 'th' || $tag === 'td') {
            self::keep($node, ['colspan', 'rowspan', 'headers', 'scope']);

            return;
        }

        self::keep($node, []);
    }

    protected static function keep(DOMElement $node, array $allowed): void
    {
        foreach (iterator_to_array($node->attributes) as $attribute) {
            if (! in_array(strtolower($attribute->nodeName), $allowed, true)) {
                $node->removeAttribute($attribute->nodeName);
            }
        }
    }

    protected static function unsafeUrl(string $url, bool $image = false): bool
    {
        $url = trim($url);

        if ($url === '') {
            return true;
        }

        if ($url[0] === '/') {
            return false;
        }

        if (preg_match('#^https?://#i', $url)) {
            return false;
        }

        if ($image && preg_match('#^data:image/[a-z0-9.+]+;base64,#i', $url)) {
            return false;
        }

        if (preg_match('#^data:#i', $url)) {
            return true;
        }

        $colon = strpos($url, ':');
        if ($colon !== false) {
            $scheme = strtolower(substr($url, 0, $colon));

            return ! in_array($scheme, ['http', 'https', 'mailto', 'tel'], true);
        }

        return strpbrk($url, "<>\"'`") !== false;
    }
}