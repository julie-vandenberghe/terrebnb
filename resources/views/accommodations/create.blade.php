@extends('layouts/app') 

@section('content') 

<h1 class="mb-4 text-4xl font-extrabold">Ajouter un nouveau logement</h1>

    <form action="" method="post" class="w-1/2 mx-auto" enctype="multipart/form-data">
        @csrf {{-- Anytime you define an HTML form in your application, you should include a hidden CSRF token field in the form so that the CSRF protection middleware can validate the request.--}}

        <div class="mb-4">
            <label for="title" class="block">Titre *</label>
            @error('title')
                <div class="text-red-500">⚠️ {{ $message }}</div>
            @enderror
            <input type="text" name="title" id="title" value="{{ old('title') }}" class="border-0 border-b focus:ring-0 w-full" >
        </div>
        <div class="mb-4">
            <label for="description" class="block">Description *</label>
            @error('description')
                <div class="text-red-500">⚠️ {{ $message }}</div>
            @enderror
            <textarea name="description" class="border-0 border-b focus:ring-0 w-full"  value="{{ old('description') }}"></textarea>
        </div>
        <div class="mb-4">
            <label for="image" class="block">Url de l'image</label>
            @error('image')
                <div class="text-red-500">⚠️ {{ $message }}</div>
            @enderror
            <input type="text" name="image" class="border-0 border-b focus:ring-0 w-full"  value="{{ old('image') }}">
        </div>
        <fieldset>
            <legend>Le logement est-il disponible actuellement ?</legend>
            <div>
                <input type="radio" name="status" value="1" />Oui
                <input type="radio" name="status" value="0" />Non
            </div>
        </fieldset>

        <div class="container mx-0 min-w-full flex flex-col items-center">
            <button class="mt-10 py-2 px-4 text-white bg-gray-700 rounded-xl hover:bg-gray-900 duration-200">Sauvegarder</button>
        </div>
    </form>
    
@endsection