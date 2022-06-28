<div class="p-4 text-gray-100">
    <div class="flex items-center justify-between h-16 max-w-screen-xl px-4 mx-auto">
        <!-- <div class="flex flex-1 w-0 lg:hidden">
            <button class="p-2 text-gray-600 bg-gray-100 rounded-full" type="button">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2"></path>
                </svg>
            </button>
        </div> -->

        <div class="flex items-center pb-4 mx-auto space-x-4 md:mx-0 lg:mx-0">
            <a href="/"><img src="/img/logo.png" alt="logo" class="w-auto h-12 "></a>
        </div>

        <div class="sm:hidden md:flex lg:flex">
            @if (session('success'))
                <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 8000)" class="pt-1 pr-4">
                    <span class='text-white text-bold'>Bienvenue {{ Auth::user()->prenom }}</span>
                </div>
            @endif
            @if (session('error'))
                <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 8000)" class="pt-2 pr-4">
                    <span class='text-red-600 text-bold'>Login ou Mots de passe incorrect</span>
                </div>
            @endif

            @if (session('cart_ok'))
            <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)" class="pt-1 pr-4">
                <span class='text-green-500 text-bold'>Article ajouté au panier</span>
            </div>
        @endif
        @if (session('cart_delete'))
            <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)" class="pt-2 pr-4">
                <span class='text-red-600 text-bold'>Article supprimé du panier</span>
            </div>
        @endif

            @guest
                <div class="items-center hidden space-x-4 md:flex lg:flex">
                    @include('parts.login')
                    @include('parts.register')
                </div>
            @endguest


            @auth

                <div class="items-center hidden space-x-2 md:flex lg:flex">
                    <a href="/users"
                        class="flex items-center justify-center h-8 px-4 pt-1 pb-1 mx-1 space-x-2 tracking-wide text-white transition-colors duration-200 transform bg-blue-600 rounded-md tooltip btnmenu hover:bg-blue-400 focus:outline-none focus:bg-blue-500">
                        <i class="fa-solid fa-gear"></i>
                        <span class="px-4 tooltiptext">Gestion</span>
                    </a>
                    <a href="/account"
                        class="flex items-center justify-center h-8 px-4 pt-1 pb-1 mx-1 space-x-2 tracking-wide text-white transition-colors duration-200 transform rounded-md tooltip btnmenu bg-violet-600 hover:bg-violet-400 focus:outline-none focus:bg-violet-500">
                        <i class="fa-solid fa-user"></i>
                        <span class="px-4 tooltiptext">Mon Profil</span>
                    </a>
                    <a href="/cart"
                        class="flex items-center justify-center h-8 px-4 pt-1 pb-1 mx-1 space-x-2 tracking-wide text-white transition-colors duration-200 transform rounded-md tooltip btnmenu bg-emerald-500 hover:bg-emerald-300 focus:outline-none focus:bg-emerald-500">
                        <i class="fa-solid fa-basket-shopping"></i>
                        <span class="px-4 tooltiptext">Mon Panier</span>
                    </a>
                    <a href="/logout"
                        class="flex items-center justify-center h-8 px-4 pt-1 pb-1 mx-1 space-x-2 tracking-wide text-white transition-colors duration-200 transform bg-gray-600 rounded-md tooltip btnmenu hover:bg-gray-400 focus:outline-none focus:bg-gray-500">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <span class="px-4 tooltiptext">Se déconnecter</span>
                    </a>
                </div>
            @endauth
        </div>

    </div>

    <div class="flex flex-row pb-2 border-b border-gray-100 lg:hidden md:hidden">
        @guest
            <div class="flex flex-row m-auto ">
                @include('parts.login')
                @include('parts.register')
            </div>
        @endguest


        @auth
            <div class="flex flex-row mx-auto space-x-2">
                <a href="/users"
                    class="flex items-center justify-center h-8 px-4 pt-1 pb-1 mx-1 space-x-2 tracking-wide text-white transition-colors duration-200 transform bg-blue-600 rounded-md btnmenu hover:bg-blue-400 focus:outline-none focus:bg-blue-500">
                    <i class="fa-solid fa-gear"></i>

                </a>
                <a href="/account"
                    class="flex items-center justify-center h-8 px-4 pt-1 pb-1 mx-1 space-x-2 tracking-wide text-white transition-colors duration-200 transform rounded-md btnmenu bg-violet-600 hover:bg-violet-400 focus:outline-none focus:bg-violet-500">
                    <i class="fa-solid fa-user"></i>
                </a>
                <a href="/cart"
                    class="flex items-center justify-center h-8 px-4 pt-1 pb-1 mx-1 space-x-2 tracking-wide text-white transition-colors duration-200 transform rounded-md btnmenu bg-emerald-500 hover:bg-emerald-300 focus:outline-none focus:bg-emerald-500">
                    <i class="fa-solid fa-basket-shopping"></i>
                </a>
                <a href="/logout"
                    class="flex items-center justify-center h-8 px-4 pt-1 pb-1 mx-1 space-x-2 tracking-wide text-white transition-colors duration-200 transform bg-gray-600 rounded-md btnmenu hover:bg-gray-400 focus:outline-none focus:bg-gray-500">
                    <i class="fa-solid fa-right-from-bracket"></i>
                </a>
            </div>
        @endauth
    </div>
</div>

<style>


    /* ANIMATION SURVOL MENU FULL CSS AU TOP */
    .tooltip {
        position: relative;
        display: inline-block;
        border-bottom: 1px dotted black;
    }

    /* Tooltip text */
    .tooltip .tooltiptext {
        visibility: hidden;
        width: 130px;
        top: -35px;
        left: -50px;
        color: rgba(255, 255, 255, 0.534);
        text-alrgba(255, 255, 255, 0.459) center;
        padding: 4px 4px;
        border-radius: 6px;
        position: absolute;
        z-index: 1;
    }

    .tooltip:hover .tooltiptext {
        visibility: visible;
    }

    .tooltip .tooltiptext {
        opacity: 0;
        transition: opacity 0.2s;
    }

    .tooltip:hover .tooltiptext {
        opacity: 1;
    }
</style>
