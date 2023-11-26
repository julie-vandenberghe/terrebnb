@extends('layouts/app') {{-- dit que on étend le fichier app.blade.php situé dans dossier "layouts" --}}


@section('content') {{-- ici remettre le nom dans @yield dans le fichier app --}}
<h1 class="mb-4 text-4xl font-extrabold">Nos derniers logements</h1>
<div class="flex flex-wrap my-3">
    @foreach ($logementsRecents as $logement)
        <div class="w-1/2 sm:w-1/4 mb:3">
            Découvrez Terrebnb, la plateforme qui réinvente votre manière de voyager en mettant à l'honneur des logements éco-responsables au cœur de la nature. Des tiny houses aux camping-cars, en passant par les tentes et les cabanes, chaque hébergement a été soigneusement sélectionné pour offrir une expérience unique, respectueuse de l'environnement.
        </div>    
    @endforeach
</div>

@endsection