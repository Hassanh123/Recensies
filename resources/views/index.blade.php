<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Reviews - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body class="font-sans bg-gray-200">
    <header class="bg-blue-400 text-white py-4 text-center">
        <h1 class="text-2xl font-extrabold">Restaurant Recensies</h1>
        <nav>
            <ul class="flex justify-center space-x-6 mt-4">
                <li><a href="{{ route('index') }}" class="hover:text-blue-500">Home</a></li>
                <li><a href="{{ route('reviews') }}" class="hover:text-blue-500">Recensies</a></li>
                <li><a href="{{ route('overons') }}" class="hover:text-blue-500">Over ons</a></li>
            </ul>
        </nav>
    </header>
    <div class="container mx-auto p-6">
        <div class="bg-white p-4 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold mb-4">Welkom bij onze site</h2>
            <p class="text-gray-600">Ontdek de beste restaurants en lees recensies van tevreden gasten. Welkom bij onze
                recensiepagina!
                Vind hier de beste restaurants in jouw omgeving. Hieronder zie je een aantal foto's van restaurants. Het
                is mogelijk om recensies te schrijven om zo de beste restaurants aan te bevelen.
            </p>
        </div>
        <div class="mt-6 grid grid-cols-2 gap-4">
            <div class="relative image-container group">
                <img src="{{ asset('restaurant.jpg') }}" alt="Afbeelding" class="w-full h-full">
                <div
                    class="like-overlay absolute inset-0 flex items-center justify-center bg-opacity-75 bg-blue-400 text-white opacity-0 group-hover:opacity-100 transition-opacity">
                    <form action="{{ route('like.update', 1) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="like-button bg-blue-400 text-white px-4 py-2 rounded-full">
                            <i class="fa fa-thumbs-up"></i> Vind ik leuk
                        </button>
                    </form>
                </div>
                <p class="likes-count text-white absolute top-0 right-0 mt-2 mr-2">
                    {{ $like && $like->id === 1 ? $like->count : '0' }} likes
                </p>

            </div>
            <div class="relative image-container group">
                <img src="{{ asset('eetplekken.jpg') }}" alt="Afbeelding" class="w-full h-full">
                <div
                    class="like-overlay absolute inset-0 flex items-center justify-center bg-opacity-75 bg-blue-400 text-white opacity-0 group-hover:opacity-100 transition-opacity">
                    <form action="{{ route('like.update', 2) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="like-button bg-blue-400 text-white px-4 py-2 rounded-full">
                            <i class="fa fa-thumbs-up"></i> Vind ik leuk
                        </button>
                    </form>
                </div>
                <p class="likes-count text-white absolute top-0 right-0 mt-2 mr-2">
                    {{ $like && $like->id === 2 ? $like->count : '0' }} likes
                </p>

            </div>
        </div>
    </div>
</body>

</html>
