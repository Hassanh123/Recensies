<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Over Onze Recensies</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-200 font-sans">
    <header class="bg-blue-400 text-white py-4 text-center">
        <h1 class="text-2xl font-extrabold">Over Onze Recensies</h1>
        <nav class="bg-blue-400 text-white py-2 text-center">
            <ul class="flex justify-center space-x-4">
                <li><a href="{{ route('index') }}" class="hover:text-blue-500">Home</a></li>
                <li><a href="{{ route('reviews') }}" class="hover:text-blue-500">Recensies</a></li>
                <li><a href="{{ route('overons') }}" class="hover:text-blue-500">Over ons</a></li>
            </ul>
        </nav>
    </header>
    <div class="container mx-auto p-6">
        <div class="bg-white p-4 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold mb-4">Ontdek Onze Recensies</h2>
            <p class="text-gray-600">
                Op onze recensiepagina kunt u de eerlijke meningen van onze gewaardeerde gasten lezen. We zijn er trots op dat we niet alleen heerlijke gerechten serveren, maar ook een gedenkwaardige ervaring bieden aan iedereen die ons bezoekt.
            </p>
            <p class="text-gray-600">
                Onze recensies tonen het enthousiasme en de waardering van onze gasten voor onze keuken, service en ambiance. Het is een plek waar u kunt ontdekken wat anderen hebben ervaren en kunt beslissen welk gerecht u als volgende wilt proeven.
            </p>
            <h3 class="text-2xl font-semibold mt-6">Contactgegevens</h3>

            <!-- Weergave van de huidige gegevens -->
            <div class="mb-2">
                <label for="address">Adres:</label>
                <p>[Restaurant Adres]</p>
            </div>
            <div class="mb-2">
                <label for="phone">Telefoonnummer:</label>
                <p>[Restaurant Telefoonnummer]</p>
            </div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2485.555939684508!2d5.493822676315782!3d51.466309013704745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c6d8d3f3dacee7%3A0x1acd712bb57b8792!2sSterrenlaan%2010%2C%205631%20KA%20Eindhoven!5e0!3m2!1snl!2snl!4v1696853131805!5m2!1snl!2snl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

</body>
</html>
