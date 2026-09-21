@extends('layouts.app')

@section('title', 'Catálogo de Productos')

@section('content')

<x-page-header title="Catálogo de Productos" />

<section class="mx-auto max-w-6xl px-4 py-16 sm:px-6">
    <p class="mx-auto max-w-2xl text-center text-stone-600">
        Descarga los catálogos de productos de la Empresa Industria Cubana del Mueble DUJO.
    </p>

    <div class="mt-12 grid gap-6 sm:grid-cols-2">
        @foreach ($catalogs as $catalog)
            <a href="{{ $catalog->file }}" target="_blank" rel="noopener"
               class="group flex items-center gap-5 rounded-3xl border border-stone-200 bg-white p-7 shadow-sm transition hover:-translate-y-1 hover:border-amber-600 hover:shadow-lg">
                <div class="flex h-16 w-16 shrink-0 items-center justify-center rounded-2xl bg-red-50">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-8 w-8 text-red-600">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/>
                    </svg>
                </div>
                <div class="flex-1">
                    <h2 class="text-lg font-semibold text-stone-900 group-hover:text-amber-700">{{ $catalog->title }}</h2>
                    <p class="mt-1 flex items-center gap-1 text-sm text-stone-500">
                        Documento PDF
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-4 w-4 transition group-hover:translate-x-1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25"/>
                        </svg>
                    </p>
                </div>
            </a>
        @endforeach
    </div>
</section>

@endsection