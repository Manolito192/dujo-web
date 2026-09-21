@extends('layouts.app')

@section('title', $ueb->name)

@section('content')

<section class="bg-stone-900 pb-16 pt-28">
    <div class="mx-auto max-w-6xl px-4 sm:px-6">
        <nav class="text-xs text-stone-400">
            <a href="{{ route('home') }}" class="transition hover:text-amber-400">Inicio</a>
            <span class="mx-2 text-stone-600">»</span>
            <a href="{{ route('uebs.index') }}" class="transition hover:text-amber-400">Estructura</a>
            <span class="mx-2 text-stone-600">»</span>
            <span class="text-amber-400">{{ $ueb->name }}</span>
        </nav>

        <div class="mt-8 flex flex-col items-start gap-8 md:flex-row md:items-center md:justify-between">
            <div class="flex items-center gap-5">
                @if ($ueb->logo)
                    <div class="flex h-16 w-16 shrink-0 items-center justify-center rounded-full bg-white/10 p-3">
                        <img src="{{ asset($ueb->logo) }}" alt="{{ $ueb->name }}" class="h-auto w-full">
                    </div>
                @endif
                <div>
                    @if ($ueb->province)
                        <p class="text-xs font-semibold uppercase tracking-widest text-amber-500">{{ $ueb->province }}</p>
                    @endif
                    <h1 class="mt-1 text-2xl font-bold tracking-tight text-white sm:text-3xl">{{ $ueb->name }}</h1>
                </div>
            </div>
            @if ($ueb->website)
                <a href="{{ $ueb->website }}" target="_blank" rel="noopener" class="rounded-full bg-amber-600 px-6 py-3 text-sm font-semibold text-white transition hover:bg-amber-500">
                    Visitar sitio web
                </a>
            @endif
        </div>
    </div>
</section>

<section class="mx-auto max-w-6xl px-4 py-16 sm:px-6">
    @if ($ueb->intro)
        <p class="max-w-3xl text-lg font-medium leading-relaxed text-stone-700">{{ $ueb->intro }}</p>
    @endif

    @if ($ueb->mission || $ueb->vision)
        <div class="mt-10 grid gap-6 md:grid-cols-2">
            @if ($ueb->mission)
                <div class="rounded-3xl border border-amber-200 bg-amber-50 p-8">
                    <h2 class="text-sm font-semibold uppercase tracking-widest text-amber-700">Misión</h2>
                    <p class="mt-3 leading-relaxed text-stone-700">{{ $ueb->mission }}</p>
                </div>
            @endif
            @if ($ueb->vision)
                <div class="rounded-3xl border border-stone-200 bg-white p-8">
                    <h2 class="text-sm font-semibold uppercase tracking-widest text-stone-500">Visión</h2>
                    <p class="mt-3 leading-relaxed text-stone-700">{{ $ueb->vision }}</p>
                </div>
            @endif
        </div>
    @endif

    <div class="mt-12 grid gap-10 md:grid-cols-3">
        <div class="md:col-span-2">
            @if ($ueb->content)
                <div class="max-w-none space-y-4 leading-relaxed text-stone-600">
                    {!! $ueb->content !!}
                </div>
            @endif

            <dl class="mt-10 space-y-4 rounded-3xl bg-stone-100 p-8 text-sm">
                @if ($ueb->province)
                    <div class="flex gap-3">
                        <dt class="w-24 font-semibold text-stone-500">Provincia</dt>
                        <dd class="text-stone-700">{{ $ueb->province }}</dd>
                    </div>
                @endif
                @if ($ueb->address)
                    <div class="flex gap-3">
                        <dt class="w-24 font-semibold text-stone-500">Dirección</dt>
                        <dd class="text-stone-700">{{ $ueb->address }}</dd>
                    </div>
                @endif
            </dl>
        </div>

        @if ($ueb->image)
            <div>
                <img src="{{ asset($ueb->image) }}" alt="{{ $ueb->name }}" class="w-full rounded-3xl object-cover shadow-lg">
            </div>
        @endif
    </div>

    <div class="mt-14">
        <a href="{{ route('uebs.index') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-amber-700 transition hover:text-amber-600">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-4 w-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"/>
            </svg>
            Volver a la estructura
        </a>
    </div>
</section>

@endsection