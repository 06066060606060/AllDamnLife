<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="{{ mix('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>AllDamnLife</title>

</head>

<body class="antialiased">
    <section class="dark:bg-gray-800 dark:text-gray-100">
        <div
            class="container mx-auto flex flex-col items-center px-4 py-16 text-center md:py-32 md:px-10 lg:px-32 xl:max-w-3xl">
            <h1 class="text-4xl font-bold leading-none sm:text-5xl">Quisquam necessita vel
                <span class="dark:text-violet-400">laborum doloribus</span>delectus
            </h1>
            <p class="px-8 mt-8 mb-12 text-lg">Cupiditate minima voluptate temporibus quia? Architecto beatae esse ab
                amet vero eaque explicabo!</p>
            <div class="flex flex-wrap justify-center">
                <button class="px-8 py-3 m-2 text-lg font-semibold rounded dark:bg-violet-400 dark:text-gray-900">Get
                    started</button>
                <button class="px-8 py-3 m-2 text-lg border rounded dark:text-gray-50 dark:border-gray-700">Learn
                    more</button>
            </div>
        </div>
    </section>
</body>

</html>
