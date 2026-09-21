@extends('layouts.app')

@section('title', 'Organigrama')

@section('content')

<x-page-header title="Organigrama" />

<section class="mx-auto max-w-6xl px-4 py-16 sm:px-6">
    <p class="mx-auto max-w-2xl text-center text-stone-600">
        El equipo directivo de la Empresa Industria Cubana del Mueble DUJO, comprometido con la calidad y el bienestar de la sociedad cubana.
    </p>

    <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
        @foreach ($members as $member)
            <article class="overflow-hidden rounded-3xl border border-stone-200 bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-lg">
                <div class="bg-stone-100">
                    @if ($member->photo)
                        <img src="{{ asset($member->photo) }}" alt="{{ $member->name }}" loading="lazy" class="aspect-[3/4] w-full object-cover object-top">
                    @else
                        <div class="flex aspect-[3/4] w-full items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-16 w-16 text-stone-300">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/>
                            </svg>
                        </div>
                    @endif
                </div>
                <div class="p-5 text-center">
                    <h2 class="text-lg font-semibold text-stone-900">{{ $member->name }}</h2>
                    <p class="mt-1 text-sm text-amber-700">{{ $member->role }}</p>
                    @if ($member->email)
                        <a href="mailto:{{ $member->email }}" class="mt-3 inline-block text-sm text-stone-500 transition hover:text-amber-600">{{ $member->email }}</a>
                    @endif
                </div>
            </article>
        @endforeach
    </div>
</section>

@endsection