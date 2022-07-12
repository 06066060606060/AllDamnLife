<div class="max-w-screen-xl mx-auto">
    <div class="flex items-center text-gray-900 text-base font-bold">
        <a rel="noopener noreferrer" href="/"
            class="px-5 py-1 md:border-b-2 md:border-gray-900 hover:border-emerald-500 hover:text-emerald-500">Accueil</a>
            @if (Auth::user()->profil == 'admin')
        <a rel="noopener noreferrer" href="/giftCards"
            class="px-5 py-1 md:border-b-2 md:border-gray-900 hover:border-emerald-500 hover:text-emerald-500">Liste des
            articles</a>
        <a rel="noopener noreferrer" href="/categories"
            class="px-5 py-1 md:border-b-2 md:border-gray-900 hover:border-emerald-500 hover:text-emerald-500">Catégories</a>
            <a rel="noopener noreferrer" href="/users"
            class="px-5 py-1 md:border-b-2 md:border-gray-900 hover:border-emerald-500 hover:text-emerald-500">Liste des
            utilisateurs</a>
           @endif
    </div>
</div>
