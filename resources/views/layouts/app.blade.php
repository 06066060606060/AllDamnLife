<!DOCTYPE html>
<html lang="fr">

<head>
    @include('parts.head')
</head>

<body class="bg-gray-800 dark">

    <header>
        @include('parts.header')
    </header>

    <main>
        @yield('main')
    </main>

    <footer class="px-4 py-8 text-gray-400 bg-gray-800">
        @include('parts.footer')
    </footer>

</body>

</html>
