@extends('layouts/app') 

@section('content') 

<h1 class="mb-4 text-4xl font-extrabold">Modifier {{ $logement->title }}</h1>

<a href="/logements" class="text-gray-500">Retour aux logements</a>

    <form action="" method="post" class="w-1/2 mx-auto" enctype="multipart/form-data">
        @csrf {{-- Anytime you define an HTML form in your application, you should include a hidden CSRF token field in the form so that the CSRF protection middleware can validate the request.--}}

        <div class="mb-4">
            <label for="title" class="block">Titre *</label>
            <input type="text" name="title" id="title" value="{{ old('title', $logement->title) }}" class="border-0 border-b focus:ring-0 w-full" >
            @error('title')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="description" class="block">Description *</label>
            <textarea name="description" class="border-0 border-b focus:ring-0 w-full">{{ old('description', $logement->description) }}</textarea>
            @error('title')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="image" class="block">URL de l'image</label>
            <input type="text" name="image" class="border-0 border-b focus:ring-0 w-full"  value="{{ old('image', $logement->image) }}">
            @error('title')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <button class="py-2 px-3 text-white bg-gray-700 rounded-xl hover:bg-gray-900 duration-200">Sauvegarder</button>
    </form>
    
@endsection