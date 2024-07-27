<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    {{-- NOTE alpine --}}
    <script src="//unpkg.com/alpinejs" defer></script>

    {{-- NOTE tailwind --}}
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="">

    <h1 class="text-3xl font-bold underline">
        Hello world!
    </h1>

    {{-- NOTE x-data --}}
    {{-- NOTE tu definujesz data dostępne w tym alpine component, ta data jest dostępna tylko tutaj --}}
    <div x-data="{ open: false, name: 'Kamil' }">
        <div>
            {{-- NOTE @click --}}
            <button @click="open = true">Expand</button>
        </div>

        <div>
            {{-- NOTE x-show --}}
            <span x-show="open">
                Content...
            </span>
        </div>

        <div class="my-4">
            {{-- NOTE x-text --}}
            The value of name is: <span x-text="name"></span>
        </div>
    </div>

</body>

</html>
