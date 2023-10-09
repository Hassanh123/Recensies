<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Reviews - Home</title>
    @vite('resources/css/app.css')
</head>

<body class="font-sans bg-gray-200">
    <header class="bg-blue-400 text-white py-4 text-center">
        <h1 class="text-2xl font-extrabold">Restaurant Homepagina</h1>
        <nav>
            <ul class="flex justify-center space-x-6 mt-4">
                <li><a href="{{ route('index') }}" class="hover:text-blue-500">Home</a></li>
                <li><a href="{{ route('reviews') }}" class="hover:text-blue-500">Recensies</a></li>
                <li><a href="#" class="hover:text-blue-500">Over ons</a></li>
            </ul>
        </nav>
    </header>
    <div class="container mx-auto p-6">
        <div class="bg-white p-4 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold mb-4">Welkom bij onze site</h2>
            <p class="text-gray-600"> Welkom bij <strong>[Restaurant Naam]</strong>. Ontdek de smaak van [Restaurant
                Naam]. Onze chefs bereiden heerlijke gerechten met verse ingrediënten. Bekijk onze menukaart en lees
                recensies van tevreden gasten. We heten u van harte welkom!
                Er zijn vele mogelijkheden om uit te kiezen binnen ons restaurant.
            </p>
        </div>
        <div class="mt-6 flex justify-between w-screen">
            <img src="{{ asset('restaurant.jpg') }}" alt="Afbeelding" class="w-1/2 h-auto mx-1" >
            <img src="{{ asset('eetplekken.jpg') }}" alt="Afbeelding" class="w-1/2 h-auto mx-1">
        </div>

    </div>
</body>

</html>
