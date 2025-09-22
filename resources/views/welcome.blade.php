<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased font-sans bg-gray-50 text-black/50 dark:bg-base-100 dark:text-white/50">

    {{-- Navbar at the top --}}
    <header class="w-full px-6 py-2 border-b border-gray-200 dark:border-gray-700">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <h2 class="text-lg font-semibold text-black dark:text-white">Games App</h2>
            @if (Route::has('login'))
                <livewire:welcome.navigation />
            @endif
        </div>
    </header>

    {{-- Centered content --}}
    <main class="flex items-center justify-center px-6 py-40">
        <div class="max-w-2xl w-full text-center">
            <h1 class="text-6xl font-bold text-black dark:text-white">Games App</h1>
        </div>
    </main>

    
   <footer class="py-16 text-center text-sm text-black dark:text-white/70">
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }}) JFB
    </footer>
</body>
</html>

