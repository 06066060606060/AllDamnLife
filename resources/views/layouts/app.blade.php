<!DOCTYPE html>
<html lang="fr">

<head>
    @include('parts.head')
</head>

<body class="dark bg-gray-800">

    <header>
        @include('parts.header')
    </header>

    <content>
        @yield('main')
    </content>

    <footer class="px-4 py-8 bg-gray-800 text-gray-400">
        @include('parts.footer')
    </footer>

</body>

</html>
