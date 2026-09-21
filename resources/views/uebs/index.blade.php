@extends('layouts.app')

@section('title', 'Unidades Empresariales')

@section('content')

<x-page-header title="Unidades Empresariales" crumb="Estructura" />

<section class="mx-auto max-w-6xl px-4 py-16 sm:px-6">
    <p class="mx-auto max-w-2xl text-center text-stone-600">
        Con 11 Unidades Empresariales de Base (UEB) distribuidas por casi todo el país, DUJO produce y comercializa mobiliario con diversidad de estilos y clase.
    </p>

    <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
        @foreach ($uebs as $ueb)
            <a href="{{ route('uebs.show', $ueb->slug) }}" class="group flex flex-col rounded-3xl border border-stone-200 bg-white p-7 shadow-sm transition hover:-translate-y-1 hover:border-amber-600 hover:shadow-lg">
                <div class="flex h-16 w-16 items-center justify-center rounded-full bg-stone-100">
                    @if ($ueb->logo)
                        <img src="{{ asset($ueb->logo) }}" alt="{{ $ueb->name }}" class="h-10 w-auto">
                    @else
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-8 w-8 text-stone-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18.5m-10.5 9v-3.375a1.125 1.125 0 011.125-1.125h1.5a1.125 1.125 0 011.125 1.125V21m0 0h.75m0 0H21M6.75 21h.75"/>
                        </svg>
                    @endif
                </div>
                <div class="mt-5 flex-1">
                    <h2 class="text-lg font-semibold text-stone-900 group-hover:text-amber-700">{{ $ueb->name }}</h2>
                    @if ($ueb->province)
                        <p class="mt-1 text-xs font-medium uppercase tracking-wider text-stone-500">{{ $ueb->province }}</p>
                    @endif
                    @if ($ueb->intro)
                        <p class="mt-3 text-sm leading-relaxed text-stone-600">{{ $ueb->intro }}</p>
                    @endif
                </div>
                <span class="mt-6 inline-flex items-center gap-1 text-sm font-semibold text-amber-700">
                    Ver detalles
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-4 w-4 transition group-hover:translate-x-1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </span>
            </a>
        @endforeach
    </div>
</section>

@endsection