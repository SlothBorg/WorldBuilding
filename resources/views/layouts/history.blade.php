<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.parts.header')
    @livewireStyles
</head>
<body class="font-sans antialiased m-0 p-0 h-full bg-light text-dark">
    <main class="w-full">
        @yield('content')
    </main>

    @livewireScripts
    @livewire('livewire-ui-modal')
</body>
</html>
