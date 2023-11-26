<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

</head>
<body class="bg-gray-200">
    <nav class="bg-gray-300">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
          <a href="/" class="flex items-center space-x-3">
              <span class="self-center text-2xl font-semibold whitespace-nowrap">Accueil</span>
          </a>
        <a href="/logements" class="block py-2 px-3 text-white bg-gray-700 rounded-xl hover:bg-gray-900 duration-200">Logements</a>
        {{-- <a href="/a-propos" class="block py-2 px-3 text-white bg-gray-700 rounded">À propos</a> --}}

    </nav>   


    <div class="max-w-screen-xl flex flex-col flex-wrap items-center justify-between mx-auto p-4">
        @yield('content')
    </div>

    <footer class="bg-gray-200 text-center py-2">Terrebnb &copy; {{date ('Y') }} </footer>
</body>
</html>