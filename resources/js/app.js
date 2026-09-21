document.addEventListener('DOMContentLoaded', () => {
    const toggle = document.querySelector('[data-menu-toggle]');
    const menu = document.querySelector('[data-menu]');

    if (toggle && menu) {
        toggle.addEventListener('click', () => {
            const hidden = menu.classList.toggle('hidden');
            toggle.setAttribute('aria-expanded', String(!hidden));
        });
    }

    const slides = document.querySelectorAll('[data-slide]');
    if (slides.length > 1) {
        let current = 0;
        slides[current].classList.remove('opacity-0');

        setInterval(() => {
            slides[current].classList.add('opacity-0');
            current = (current + 1) % slides.length;
            slides[current].classList.remove('opacity-0');
        }, 5000);
    }
});