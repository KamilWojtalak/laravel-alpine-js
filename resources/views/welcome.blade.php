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
    <div x-data="{ open: false, name: 'Kamil', search: '123' }">
        <div>
            {{-- NOTE @click --}}
            {{-- NOTE dynamic class x-bind:class --}}
            {{-- NOTE dynamic class :class --}}
            <button @click="open = true" :class="open ? 'bg-blue-800' : 'bg-slate-500'">Expand</button>
        </div>

        <div>
            {{-- NOTE x-show --}}
            {{-- NOTE x-transition --}}
            <span x-show="open" x-transition>
                Content...
            </span>
        </div>

        <div class="my-4">
            {{-- NOTE x-text --}}
            The value of name is: <span x-text="name"></span>
        </div>

        <div>
            Serach for
            {{-- NOTE x-model --}}
            <input type="text" class="border p-2 w-full mb-2 mt-6" x-model="search">
            <p>Serach for: <span x-text="search"></span></p>
        </div>

        <div>
            {{-- NOTE x-if --}}
            {{-- NOTE musi być 'template' --}}
            <template x-if="open">
                <div>
                    Shows when open
                </div>
            </template>
        </div>

        {{-- NOTE x-for --}}
        {{-- NOTE x-ref --}}
        {{-- NOTE $refs --}}
        {{-- NOTE x-html --}}
        {{-- NOTE możsez robić await axios.get() w x-html --}}
    </div>

</body>

</html>
