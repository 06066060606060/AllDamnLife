<div class="max-w-screen-xl mx-auto">
    <div class="flex items-center text-xs text-gray-100 bg-gray-800">
        <a rel="noopener noreferrer" href="/"
            class="px-5 py-1 md:border-b-2 md:border-gray-700 hover:border-blue-400 hover:text-blue-400">Accueil</a>
            @if (Auth::user()->profil == 'admin')
        <a rel="noopener noreferrer" href="/users"
            class="px-5 py-1 md:border-b-2 md:border-gray-700 hover:border-blue-400 hover:text-blue-400">Liste des
            utilisateurs</a>
        <a rel="noopener noreferrer" href="/giftCards"
            class="px-5 py-1 md:border-b-2 md:border-gray-700 hover:border-blue-400 hover:text-blue-400">Liste des
            articles</a>
        <a rel="noopener noreferrer" href="/categories"
            class="px-5 py-1 md:border-b-2 md:border-gray-700 hover:border-blue-400 hover:text-blue-400">Catégories</a>
           @endif
    </div>
</div>
