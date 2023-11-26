@extends('layouts/app')

@section('content')
    <a href="/logements" class="text-gray-500 flex gap-2 mb-3">
        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
        </svg>Retour aux logements
    </a>
    <div class="flex gap-10 items-center">
        <div class="w-2/5">
            <img class="w-full" src="{{ $logement->image }}" alt="{{ $logement->title }}">
        </div>
        <div class="w-3/5">
            <div class="border p-4 shadow-lg">
                <h1 class="text-3xl">{{ $logement->title }}</h1>
                <p class="text-sm mt-1 text-gray-400">Mis en ligne le {{ $logement->created_at->translatedFormat('d F Y') }} | {{ $logement->created_at->diffForHumans()}}</p>
                <div class="prose mt-3">{!! Str::markdown($logement->description) !!}</div>
                {{-- class="prose" permet que TailWind affiche/formate le contenu à l'intérieur de la div en Markdown (sinon, le contenu sera en markdown mais sans formatage puisque Tailwind remet tout à zéro. --}}
                {{-- L'instruction à l'intérieur convertit le markdown en HTML et l'affiche. --}}   
                <p class="text-sm">
                    @if ($logement->status)
                        <span class="bg-green-500">Logement actuellement disponible</span>
                    @else
                    <span class="bg-red-500">Logement actuellement indisponible</span>
                    @endif
                </p>
            </div>
        </div>
    </div>
@endsection
