<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? config('app.name', 'Parroquia Cristo Resucitado') }}</title>
    <meta name="description" content="{{ $description ?? 'Parroquia Cristo Resucitado - Comunidad de Fe y Esperanza en Honduras' }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&display=swap" rel="stylesheet">
    
    <!-- Material Symbols -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">

    <!-- Scripts & Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('head')
</head>
<body class="min-h-screen flex flex-col bg-background-light text-text-dark font-sans antialiased overflow-x-hidden dark:bg-background-dark dark:text-text-light">
    {{-- Header --}}
    <x-header />

    {{-- Main Content --}}
    <main class="flex-grow">
        {{ $slot }}
    </main>

    {{-- Footer --}}
    <x-footer />

    @stack('scripts')
</body>
</html>
