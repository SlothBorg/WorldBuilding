<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.parts.header')
    @livewireStyles
</head>
<body class="font-sans antialiased m-0 p-0 h-full">
    <div class="flex justify-center items-center h-full">
        <main>
            <section class="prose">
                <livewire:history.index />
            </section>
        </main>
    </div>

    @livewireScripts
    @livewire('livewire-ui-modal')
</body>
</html>
