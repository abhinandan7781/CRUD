<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Library</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="font-['Inter']">
    @if (session('success'))
    <div class="bg-emerald-100 border-l-4 border-emerald-500 text-emerald-700 p-4 fixed top-4 right-4 rounded-lg shadow-lg z-50 animate-fade-in-down" role="alert">
        <p class="font-medium">Success!</p>
        <p>{{ session('success') }}</p>
    </div>
    @endif
    
    <header class="bg-gradient-to-r from-indigo-600 to-blue-600 text-white shadow-lg">
        <nav class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <h1 class="text-3xl font-bold tracking-tight">📚 Library's Network</h1>
                <div class="space-x-6">
                    <a href="{{ route('book.index') }}" class="nav-link">
                        <span class="inline-block hover:transform hover:scale-105">📖 All Books</span>
                    </a>
                    <a href="{{ route('book.create') }}" class="btn-primary">
                        <span class="inline-block">➕ Add New Book</span>
                    </a>
                </div>
            </div>
        </nav>
    </header>

    <main class="container mx-auto px-4 py-8">
        {{  $slot }}
    </main>

    <footer class="bg-gray-800 text-white mt-12">
        <div class="container mx-auto px-6 py-4 text-center">
            <p>&copy; {{ date('Y') }} Library's Network. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>