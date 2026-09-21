@extends('layouts.app')

@section('title', '¿Quiénes Somos?')

@section('content')

<x-page-header title="{{ $page->title }}" />

<section class="mx-auto max-w-4xl px-4 py-16 sm:px-6">
    <img src="{{ asset('img/photos/quienes-somos.jpg') }}" alt="Producción de muebles DUJO" class="aspect-[16/8] w-full rounded-3xl object-cover shadow-lg">

    <div class="mt-10 max-w-none space-y-5 leading-relaxed text-stone-600">
        {!! $page->content !!}
    </div>

    <div class="mt-12 rounded-3xl bg-stone-100 p-8">
        <h2 class="text-xl font-bold text-stone-900">{{ $site['home_vision_title'] ?? 'Visión' }}</h2>
        <p class="mt-3 leading-relaxed text-stone-600">{{ $site['home_vision_text'] ?? '' }}</p>
    </div>

    <div class="mt-10 text-center">
        <a href="{{ route('organization') }}" class="inline-flex rounded-full bg-stone-900 px-7 py-3 text-sm font-semibold text-white transition hover:bg-stone-700">
            Conocer el equipo directivo
        </a>
    </div>
</section>

@endsection