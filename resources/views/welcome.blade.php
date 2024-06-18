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

<body class="antialiased font-sans">
    <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
        <img id="background" class="absolute left-0 top-0 " src="{{ 'assets/images/background/back1.svg' }}" />
        <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white contend-between">
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl ">

                <livewire:welcome.header />
                <livewire:welcome.section1 />
              

            </div>
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl ">

                
                <livewire:welcome.footer />

            </div>
        </div>
    </div>
</body>

</html>
