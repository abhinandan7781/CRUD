<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Libraryyy</title>
    @vite('resources/css/app.css')
</head>
<body class="h-screen bg-gray-900">
    <div class="relative h-screen flex items-center justify-center text-center">
        <div class="absolute inset-0">
            <img 
                src="https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?auto=format&fit=crop&w=1920&q=80" 
                alt="Library Background" 
                class="w-full h-full object-cover"
            >
            <div class="absolute inset-0 bg-black opacity-60"></div>
        </div>

        <div class="relative z-10 max-w-2xl text-white px-6">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 drop-shadow-lg">
                Welcome to the Library Network
            </h1>
            <p class="text-lg md:text-xl mb-8 text-gray-200">
                Click the button below to explore a world of books.
            </p>

            <a href="/library" 
               class="bg-yellow-500 hover:bg-yellow-600 text-black font-semibold px-6 py-3 rounded-lg shadow-lg transition transform hover:scale-105">
                Find Books!
            </a>
        </div>
    </div>
</body>
</html>
