@extends('layouts/app') 

@section('content') 

<h1 class="mb-4 text-4xl font-extrabold">Nos logements</h1>
<a href="/logements/creer" class="px-4 py-2 text-sm text-white bg-gray-700 hover:bg-gray-900 duration-200 text-white rounded-xl shadow-sm">Créer un logement</a>

@if (session('message'))
<p class="rounded shadow text-green-800 bg-green-300 text-center p-2 my-6">
    {{ session('message')}}
</p>
@endif

<div class="flex flex-wrap my-3 mx-3">
    @foreach ($logements as $logement)
        <div class="w-1/2 sm:w-1/3 lg:w-1/4 mb-9">
            <div class="flex flex-col justify-between h-full rounded-lg bg-white shadow-lg mx-3">
                <a href="/logement/{{$logement->id}}-{{$logement->slug}}" class="block">
                    <img class="w-full h-[300px] object-cover rounded-t-lg" src="{{ $logement->image }}" alt="{{ $logement->title }}">
                    <h3 class="text-lg font-bold mt-3 px-3">{{ $logement->title }}</h3>
                    <p class="text-sm mt-1 px-3">Mis en ligne le {{ $logement->created_at->translatedFormat('d F Y') }}</p>
                    <p class="text-sm text-gray-400 px-3">{{ $logement->created_at->diffForHumans()}}</p>
                </a> 
                <div class="flex justify-evenly my-5">
                    <a href="/logement/{{ $logement->id }}/modifier" title="Modifier">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                        </svg>
                    </a>
                    <a href="/logement/{{ $logement->id }}/supprimer" title="Supprimer">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                        </svg>
                    </a>
                </div>
            </div>
    </div>    
    @endforeach
</div>



@endsection