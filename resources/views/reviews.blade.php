<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Reviews - Home</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-200 font-sans">
    <header class="bg-blue-400 text-white py-4 text-center">
        <h1 class="text-2xl font-extrabold">Restaurant Recensies</h1>
        <nav class="bg-blue-400 text-white py-2 text-center">
            <ul class="flex justify-center space-x-4">
                <li><a href="{{ route('index') }}" class="hover:text-blue-500">Home</a></li>
                <li><a href="{{ route('reviews') }}" class="hover:text-blue-500">Recensies</a></li>
                <li><a href="{{ route('overons') }}" class="hover:text-blue-500">Over ons</a></li>
            </ul>
        </nav>
    </header>
    <div class="container mx-auto p-4 flex flex-wrap -mx-4">
        @foreach ($recensies as $recensie)
            <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="text-lg font-semibold">{{ $recensie->Naam }}</h3>
                    <p class="text-gray-600">Beoordeling: {{ $recensie->Beoordeling }}/5</p>
                    <p class="text-gray-600">Recensie: {{ $recensie->Recensie }}</p>
                    <div class="mt-2 flex space-x-2">
                        <form action="{{ route('reviews.destroy', ['id' => $recensie->Id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="bg-red-500 hover:bg-red-700 text-white font-semibold py-1 px-2 rounded focus:outline-none focus:ring focus:ring-red-600">Verwijderen</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach

        <div class="w-full md:w-1/2 lg:w-1/3 px-4">
            <div class="bg-white p-4 rounded-lg shadow">
                <h2 class="text-xl font-semibold mb-4">Schrijf hier een Recensie</h2>
                <form action="{{ route('reviews.store') }}" method="POST">
                    @csrf
                    <div class="mb-2">
                        <label for="restaurant" class="block text-gray-600 font-semibold">Restaurant:</label>
                        <input type="text" id="restaurant" name="Naam"
                            class="w-full border rounded-lg px-2 py-1 focus:outline-none focus:ring-2 focus:ring-blue-600"
                            required>
                    </div>
                    <div class="mb-2">
                        <label for="rating" class="block text-gray-600 font-semibold">Beoordeling:</label>
                        <select id="rating" name="Beoordeling"
                            class="w-full border rounded-lg px-2 py-1 focus:outline-none focus:ring-2 focus:ring-blue-600"
                            required>
                            <option value="5">5 - Uitstekend</option>
                            <option value="4">4 - Goed</option>
                            <option value="3">3 - Redelijk</option>
                            <option value="2">2 - Slecht</option>
                            <option value="1">1 - Zeer Slecht</option>
                        </select>
                    </div>
                    <div class="mb-2">
                        <label for="review" class="block text-gray-600 font-semibold">Recensie:</label>
                        <textarea id="review" name="Recensie" rows="4"
                            class="w-full border rounded-lg px-2 py-1 focus:outline-none focus:ring-2 focus:ring-blue-600" required></textarea>
                    </div>
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-1 px-2 rounded focus:outline-none focus:ring focus:ring-blue-600">Verzenden</button>
                </form>

            </div>
        </div>
    </div>
</body>

</html>
