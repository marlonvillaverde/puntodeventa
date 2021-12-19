<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>


<body class="font-sans antialiased">
    <x-jet-banner />
<div class="min-h-screen bg-gray-100">
        <!-- Page Heading -->
        @if (isset($header))
    <header class="bg-white shadow">
        <div >
            {{ $header }}
        </div>
        </header>
        @endif                
        <!-- Page Content -->
       
        <main>
            {{ $slot }}            
        </main>
    </div>

    <!-- Footer -->
    @if (isset($footer))
        <footer class="bg-white shadow">
            {{ $footer }}
        </footer>
    @endif

    @stack('modals')

    @livewireScripts
</body>
</html>
