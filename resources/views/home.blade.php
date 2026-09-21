@extends('layouts.app')

@section('title', 'Industria del Mueble DUJO')

@section('content')

{{-- Hero --}}
<section class="relative flex min-h-screen items-center justify-center overflow-hidden bg-stone-950">
    @foreach ([1, 2, 3] as $i)
        <img data-slide src="{{ asset("img/slider/{$i}.jpg") }}" alt="Muebles DUJO" class="absolute inset-0 h-full w-full object-cover opacity-0 transition-opacity duration-1000">
    @endforeach
    <div class="absolute inset-0 bg-gradient-to-b from-stone-950/70 via-stone-950/50 to-stone-950/80"></div>

    <div class="relative z-10 mx-auto max-w-3xl px-6 py-24 text-center">
        <img src="{{ asset('img/logo/logo_white.svg') }}" alt="DUJO" class="mx-auto h-16 w-auto drop-shadow-lg sm:h-20">
        <h1 class="mt-6 text-4xl font-bold tracking-tight text-white sm:text-5xl">Industria del Mueble</h1>
        <p class="mt-3 text-lg font-medium text-stone-200">
            {{ $site['home_hero_subtitle'] ?? 'Empresa Industria Cubana del Mueble' }}
        </p>
        <p class="mx-auto mt-6 max-w-xl text-stone-300">
            Producción y comercialización de mobiliario con diversidad de estilos y clase, servicios de diseño, decoración y proyectos integrados para el mercado interno y externo.
        </p>
        <div class="mt-10 flex flex-wrap items-center justify-center gap-4">
            <a href="{{ route('catalogs') }}" class="rounded-full bg-amber-600 px-7 py-3 text-sm font-semibold text-white shadow-lg transition hover:bg-amber-500">
                Catálogo de Productos
            </a>
            <a href="{{ route('uebs.index') }}" class="rounded-full border border-white/40 px-7 py-3 text-sm font-semibold text-white transition hover:bg-white/10">
                Ver nuestra estructura
            </a>
        </div>
        <div class="mt-12 flex items-center justify-center gap-5">
            @if (! empty($site['social_facebook']))
                <a href="{{ $site['social_facebook'] }}" target="_blank" rel="noopener" aria-label="Facebook" class="text-stone-200 transition hover:text-amber-400">
                    <img src="{{ asset('img/logo/facebook_inv.svg') }}" alt="Facebook" class="h-6 w-6">
                </a>
            @endif
            @if (! empty($site['social_twitter']))
                <a href="{{ $site['social_twitter'] }}" target="_blank" rel="noopener" aria-label="Twitter" class="text-stone-200 transition hover:text-amber-400">
                    <img src="{{ asset('img/logo/twitter_inv.svg') }}" alt="Twitter" class="h-6 w-6">
                </a>
            @endif
        </div>
    </div>
</section>

{{-- Quiénes Somos --}}
<section class="mx-auto max-w-6xl px-4 py-20 sm:px-6">
    <div class="grid items-center gap-12 md:grid-cols-2">
        <div>
            <p class="text-sm font-semibold uppercase tracking-widest text-amber-600">DUJO</p>
            <h2 class="mt-2 text-3xl font-bold tracking-tight text-stone-900 sm:text-4xl">
                {{ $site['home_about_title'] ?? '¿Quiénes Somos?' }}
            </h2>
            <p class="mt-6 leading-relaxed text-stone-600">
                {{ $site['home_about_text'] ?? '' }}
            </p>
            <p class="mt-6 text-sm leading-relaxed text-stone-500">
                Con {{ $uebs->count() }} unidades empresariales distribuidas por todo el país, la entidad no ha tenido pérdidas y sí utilidades mes por mes, contando con un personal altamente comprometido y capacitado.
            </p>
            <a href="{{ route('about') }}" class="mt-8 inline-flex rounded-full bg-stone-900 px-7 py-3 text-sm font-semibold text-white transition hover:bg-stone-700">
                Leer más
            </a>
        </div>
        <div class="overflow-hidden rounded-3xl shadow-xl">
            <img src="{{ asset('img/photos/quienes-somos.jpg') }}" alt="Producción de muebles DUJO" class="aspect-[4/3] w-full object-cover">
        </div>
    </div>
</section>

{{-- Visión --}}
<section class="bg-stone-900 py-20">
    <div class="mx-auto max-w-4xl px-4 text-center sm:px-6">
        <p class="text-sm font-semibold uppercase tracking-widest text-amber-500">
            {{ $site['home_vision_title'] ?? 'Visión' }}
        </p>
        <blockquote class="mt-6 text-2xl font-medium leading-relaxed text-stone-100 sm:text-3xl">
            "{{ $site['home_vision_text'] ?? '' }}"
        </blockquote>
        <img src="{{ asset('img/ueb/muebles_habana.svg') }}" alt="" class="mx-auto mt-10 h-24 w-auto opacity-60">
    </div>
</section>

{{-- Mueblería --}}
<section class="bg-white py-20">
    <div class="mx-auto max-w-6xl px-4 sm:px-6">
        <div class="max-w-2xl">
            <p class="text-sm font-semibold uppercase tracking-widest text-amber-600">Mueblería</p>
            <h2 class="mt-2 text-3xl font-bold tracking-tight text-stone-900 sm:text-4xl">
                {{ $site['home_muebleria_title'] ?? 'Mueblería' }}
            </h2>
            <p class="mt-5 leading-relaxed text-stone-600">
                {{ $site['home_muebleria_text'] ?? '' }}
            </p>
            <div class="mt-7 flex flex-wrap gap-4">
                <a href="{{ $site['muebleria_online_url'] ?? '#' }}" target="_blank" rel="noopener" class="rounded-full bg-amber-600 px-7 py-3 text-sm font-semibold text-white transition hover:bg-amber-500">
                    Tienda online
                </a>
                <a href="{{ route('uebs.index') }}" class="rounded-full border border-stone-300 px-7 py-3 text-sm font-semibold text-stone-700 transition hover:border-stone-900 hover:text-stone-900">
                    Ver más
                </a>
            </div>
        </div>

        <div class="mt-12 grid grid-cols-2 gap-4 sm:grid-cols-3 lg:grid-cols-5">
            @foreach ([1, 2, 3, 9, 14] as $i)
                <div class="group overflow-hidden rounded-2xl shadow-sm">
                    <img src="{{ asset("img/photos/galeria{$i}.jpg") }}" alt="Muebles DUJO" class="aspect-[16/10] w-full object-cover transition duration-500 group-hover:scale-105">
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Estructura --}}
<section class="py-20">
    <div class="mx-auto max-w-6xl px-4 sm:px-6">
        <div class="mx-auto max-w-2xl text-center">
            <p class="text-sm font-semibold uppercase tracking-widest text-amber-600">Estructura</p>
            <h2 class="mt-2 text-3xl font-bold tracking-tight text-stone-900 sm:text-4xl">Unidades Empresariales</h2>
            <p class="mt-4 text-stone-600">Nuestras UEB producen y comercializan mobiliario con diversidad de estilos en todo el país.</p>
        </div>

        <div class="mt-12 grid grid-cols-2 gap-4 sm:grid-cols-3 lg:grid-cols-4">
            @foreach ($uebs as $ueb)
                <a href="{{ route('uebs.show', $ueb->slug) }}" class="group flex flex-col items-center rounded-2xl border border-stone-200 bg-white p-6 text-center shadow-sm transition hover:-translate-y-1 hover:border-amber-600 hover:shadow-lg">
                    <div class="flex h-16 w-16 items-center justify-center rounded-full bg-stone-100">
                        @if ($ueb->logo)
                            <img src="{{ asset($ueb->logo) }}" alt="{{ $ueb->name }}" class="h-10 w-auto">
                        @else
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-8 w-8 text-stone-400">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18.5m-10.5 9v-3.375a1.125 1.125 0 011.125-1.125h1.5a1.125 1.125 0 011.125 1.125V21m0 0h.75m0 0H21M6.75 21h.75"/>
                            </svg>
                        @endif
                    </div>
                    <h3 class="mt-4 text-sm font-semibold text-stone-900 group-hover:text-amber-700">{{ $ueb->name }}</h3>
                    @if ($ueb->province)
                        <p class="mt-1 text-xs text-stone-500">{{ $ueb->province }}</p>
                    @endif
                </a>
            @endforeach
        </div>
    </div>
</section>

{{-- CTA contacto --}}
<section class="bg-amber-600 py-16">
    <div class="mx-auto max-w-4xl px-4 text-center sm:px-6">
        <h2 class="text-2xl font-bold text-white sm:text-3xl">¿Interesado en nuestros productos y servicios?</h2>
        <p class="mx-auto mt-3 max-w-2xl text-amber-50">Contáctanos para conocer más sobre la producción, distribución y venta de mobiliario de la industria cubana del mueble.</p>
        <div class="mt-8 flex flex-wrap items-center justify-center gap-4">
            <a href="mailto:{{ $site['contact_email'] ?? '' }}" class="rounded-full bg-white px-7 py-3 text-sm font-semibold text-amber-700 shadow transition hover:bg-amber-50">
                Escribir a {{ $site['contact_email'] ?? 'direccion@dujo.cu' }}
            </a>
            <a href="#contacto" class="rounded-full border border-white/60 px-7 py-3 text-sm font-semibold text-white transition hover:bg-white/10">
                Datos de contacto
            </a>
        </div>
    </div>
</section>

@endsection