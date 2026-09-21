@props([
    'title' => '',
    'crumb' => null,
])

<section class="bg-stone-900 pb-16 pt-28">
    <div class="mx-auto max-w-6xl px-4 sm:px-6">
        <nav class="text-xs text-stone-400">
            <a href="{{ route('home') }}" class="transition hover:text-amber-400">Inicio</a>
            <span class="mx-2 text-stone-600">»</span>
            <span class="text-amber-400">{{ $crumb ?? $title }}</span>
        </nav>
        <h1 class="mt-3 text-3xl font-bold tracking-tight text-white sm:text-4xl">{{ $title }}</h1>
    </div>
</section>