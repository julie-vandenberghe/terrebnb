@extends('layouts/app') {{-- dit que on étend le fichier app.blade.php situé dans dossier "layouts" --}}


@section('content') {{-- ici remettre le nom dans @yield dans le fichier app --}}


<h1 class="mb-4 text-4xl font-extrabold">Nos derniers logements</h1>
<div class="flex flex-wrap my-3">
    @foreach ($logementsRecents as $logement)
        <div class="w-1/2 sm:w-1/4 mb:3">
            <div class="flex flex-col justify-between h-full">
                <a href="/logement/{{$logement->id}}-{{$logement->slug}}" class="block mx-3 group">
                    <img class="w-full h-[300px] object-cover rounded-xl" src="{{ $logement->image }}" alt="{{ $logement->title }}">
                    <h3 class="text-md text-center text-gray-600">{{ $logement->title }}</h3>
                </a>
            </div>
        </div>    
    @endforeach
</div>

@endsection