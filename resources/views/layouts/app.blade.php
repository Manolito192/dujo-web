<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Industria del Mueble DUJO')</title>
    <meta name="description" content="Empresa Industria Cubana del Mueble DUJO. Producción y comercialización de mobiliario con diversidad de estilos y clase, servicios de diseño, decoración y proyectos integrados.">
    @stack('head')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-stone-50 text-stone-800 antialiased">

    <header class="fixed inset-x-0 top-0 z-50 border-b border-white/10 bg-stone-900/95 backdrop-blur">
        <div class="mx-auto flex h-16 max-w-6xl items-center justify-between px-4 sm:px-6">
            <a href="{{ route('home') }}" class="flex items-center gap-3">
                <img src="{{ asset('img/logo/logo_white.svg') }}" alt="DUJO" class="h-9 w-auto">
                <span class="hidden text-sm font-semibold tracking-wide text-stone-100 sm:block">Industria del Mueble</span>
            </a>

            <nav class="hidden items-center gap-6 md:flex">
                <x-nav-link :active="request()->routeIs('home')" route="home">Inicio</x-nav-link>
                <x-nav-link :active="request()->routeIs('about')" route="about">Quiénes Somos</x-nav-link>
                <x-nav-link :active="request()->routeIs('uebs.*')" route="uebs.index">Estructura</x-nav-link>
                <x-nav-link :active="request()->routeIs('organization')" route="organization">Organigrama</x-nav-link>
                <x-nav-link :active="request()->routeIs('catalogs')" route="catalogs">Catálogos</x-nav-link>
                <a href="#contacto" class="text-sm font-medium text-stone-300 transition hover:text-amber-400">Contacto</a>
            </nav>

            <button data-menu-toggle aria-expanded="false" aria-label="Abrir menú" class="rounded-md p-2 text-stone-200 hover:bg-white/10 md:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
                </svg>
            </button>
        </div>

        <div data-menu class="hidden border-t border-white/10 bg-stone-900 md:hidden">
            <nav class="mx-auto flex max-w-6xl flex-col px-4 py-3">
                <x-nav-link :active="request()->routeIs('home')" route="home" mobile>Inicio</x-nav-link>
                <x-nav-link :active="request()->routeIs('about')" route="about" mobile>Quiénes Somos</x-nav-link>
                <x-nav-link :active="request()->routeIs('uebs.*')" route="uebs.index" mobile>Estructura</x-nav-link>
                <x-nav-link :active="request()->routeIs('organization')" route="organization" mobile>Organigrama</x-nav-link>
                <x-nav-link :active="request()->routeIs('catalogs')" route="catalogs" mobile>Catálogos</x-nav-link>
                <a href="#contacto" class="border-t border-white/10 py-3 text-sm font-medium text-stone-300 transition hover:text-amber-400">Contacto</a>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer id="contacto" class="bg-stone-900 pb-8 pt-16 text-stone-300">
        <div class="mx-auto max-w-6xl px-4 sm:px-6">
            <div class="grid gap-10 md:grid-cols-3">
                <div>
                    <img src="{{ asset('img/logo/logo_white.svg') }}" alt="DUJO" class="h-10 w-auto">
                    <p class="mt-4 font-semibold text-stone-100">{{ $site['contact_company'] ?? 'Empresa Industria Cubana del Mueble DUJO' }}</p>
                    <p class="mt-1 text-sm">{{ $site['footer_org'] ?? 'GEMPIL | MINDUS' }}</p>
                </div>

                <div>
                    <h3 class="text-sm font-semibold uppercase tracking-wider text-stone-400">Contacto</h3>
                    <ul class="mt-4 space-y-2 text-sm">
                        <li>{{ $site['contact_address'] ?? '' }}</li>
                        <li>
                            <a href="tel:{{ preg_replace('/[^0-9+]/', '', $site['contact_phone'] ?? '') }}" class="transition hover:text-amber-400">
                                {{ $site['contact_phone'] ?? '' }}
                            </a>
                        </li>
                        <li>
                            <a href="mailto:{{ $site['contact_email'] ?? '' }}" class="transition hover:text-amber-400">
                                {{ $site['contact_email'] ?? '' }}
                            </a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-sm font-semibold uppercase tracking-wider text-stone-400">Síguenos</h3>
                    <div class="mt-4 flex gap-4">
                        @if (! empty($site['social_facebook']))
                            <a href="{{ $site['social_facebook'] }}" target="_blank" rel="noopener" aria-label="Facebook" class="transition hover:text-amber-400">
                                <img src="{{ asset('img/logo/facebook_inv.svg') }}" alt="Facebook" class="h-6 w-6">
                            </a>
                        @endif
                        @if (! empty($site['social_twitter']))
                            <a href="{{ $site['social_twitter'] }}" target="_blank" rel="noopener" aria-label="Twitter" class="transition hover:text-amber-400">
                                <img src="{{ asset('img/logo/twitter_inv.svg') }}" alt="Twitter" class="h-6 w-6">
                            </a>
                        @endif
                    </div>
                    <div class="mt-8 space-y-1 text-sm">
                        <a href="mailto:{{ $site['contact_email'] ?? '' }}?subject=Reportar%20un%20problema" class="block transition hover:text-amber-400">&gt; Reportar un problema</a>
                        <a href="mailto:{{ $site['contact_email'] ?? '' }}?subject=Reportar%20una%20queja%20o%20sugerencia" class="block transition hover:text-amber-400">&gt; Reportar una queja o sugerencia</a>
                    </div>
                </div>
            </div>

            <div class="mt-12 border-t border-white/10 pt-6 text-center text-xs text-stone-500">
                © {{ date('Y') }} {{ $site['contact_company'] ?? 'Empresa Industria Cubana del Mueble DUJO' }}. Todos los derechos reservados.
            </div>
        </div>
    </footer>

</body>
</html>