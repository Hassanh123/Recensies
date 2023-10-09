<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Over ons</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-200 font-sans">
    <header class="bg-blue-400 text-white py-4 text-center">
        <h1 class="text-2xl font-extrabold">Over ons</h1>
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
            <h2 class="text-2xl font-semibold mb-4">Welkom bij [Restaurant Naam]</h2>
            <p class="text-gray-600">
                Wij zijn een toonaangevend restaurant dat zich toelegt op het bieden van een onvergetelijke eetervaring aan onze gewaardeerde gasten.
            </p>
            <p class="text-gray-600">
                Onze getalenteerde chefs hebben een passie voor het creëren van culinaire meesterwerken met verse en hoogwaardige ingrediënten. Bij [Restaurant Naam] streven we ernaar om smaken te combineren en gerechten te serveren die uw zintuigen zullen prikkelen en uw smaakpapillen zullen verwennen.
            </p>
            <p class="text-gray-600">
                Wij hechten veel waarde aan de tevredenheid van onze gasten en streven ernaar om een uitstekende klantenservice te bieden. Ons team is toegewijd om uw dinerervaring onvergetelijk te maken, en we kijken ernaar uit om u te verwelkomen in ons restaurant.
            </p>
        </div>
    </div>
</body>
</html>
