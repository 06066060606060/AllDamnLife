<div class="p-4 text-gray-100 bg-gray-800">
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

        <div class="flex items-center space-x-4">
            <img src="/img/logo.png" alt="logo" class="w-auto h-12">
        </div>

        <!-- <div class="flex justify-end flex-1 w-0 lg:hidden">
            <button class="p-2 text-gray-300 bg-gray-100 rounded-full" type="button">
            </button>
        </div> -->

        <form class="mb-0 lg:flex">
            <div class="relative">
                <input
                    class="h-10 pl-4 pr-10 text-sm text-white placeholder-gray-300 bg-gray-600 border-gray-200 rounded-lg focus:z-10"
                    placeholder="Search..." type="text" />

                <button class="absolute inset-y-0 right-0 p-2 mr-px text-gray-600 rounded-r-lg" type="submit">
                    <svg class="w-5 h-5" fill="white" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            fill-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
        </form>

        <div class="sm:hidden md:flex lg:flex">
        @guest
            <div class="items-center hidden space-x-4 lg:flex">
                @include('parts.login')
                @include('parts.register')
            </div>
        @endguest


        @auth
            <div class="items-center hidden space-x-4 lg:flex">
                <a href="/logout" class="flex items-center justify-center h-8 px-4 pt-1 pb-1 mx-1 space-x-2 tracking-wide text-white transition-colors duration-200 transform rounded-md bg-violet-600 hover:bg-gray-600 focus:outline-none focus:bg-gray-500 focus:ring focus:ring-gray-300 focus:ring-opacity-50">
                    <i class="fa-solid fa-user"></i>
                    </a>
                <a href="/logout" class="flex items-center justify-center h-8 px-4 pt-1 pb-1 mx-1 space-x-2 tracking-wide text-white transition-colors duration-200 transform rounded-md bg-emerald-500 hover:bg-gray-600 focus:outline-none focus:bg-gray-500 focus:ring focus:ring-gray-300 focus:ring-opacity-50">
                    <i class="fa-solid fa-basket-shopping"></i>
                    </a>
                <a href="/logout" class="flex items-center justify-center h-8 px-4 pt-1 pb-1 mx-1 space-x-2 tracking-wide text-white transition-colors duration-200 transform bg-gray-600 rounded-md hover:bg-gray-500 focus:outline-none focus:bg-gray-500 focus:ring focus:ring-gray-300 focus:ring-opacity-50">
                <i class="fa-solid fa-right-from-bracket"></i>
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
            <div class="flex flex-row mx-auto space-x-4">
                <a href="/logout" class="flex items-center justify-center h-8 px-4 pt-1 pb-1 mx-1 space-x-2 tracking-wide text-white transition-colors duration-200 transform rounded-md bg-violet-600 hover:bg-gray-600 focus:outline-none focus:bg-gray-500 focus:ring focus:ring-gray-300 focus:ring-opacity-50">
                    <i class="fa-solid fa-user"></i>
                    </a>
                <a href="/logout" class="flex items-center justify-center h-8 px-4 pt-1 pb-1 mx-1 space-x-2 tracking-wide text-white transition-colors duration-200 transform rounded-md bg-emerald-500 hover:bg-gray-600 focus:outline-none focus:bg-gray-500 focus:ring focus:ring-gray-300 focus:ring-opacity-50">
                    <i class="fa-solid fa-basket-shopping"></i>
                    </a>
                <a href="/logout" class="flex items-center justify-center h-8 px-4 pt-1 pb-1 mx-1 space-x-2 tracking-wide text-white transition-colors duration-200 transform bg-gray-600 rounded-md hover:bg-gray-500 focus:outline-none focus:bg-gray-500 focus:ring focus:ring-gray-300 focus:ring-opacity-50">
                <i class="fa-solid fa-right-from-bracket"></i>
                </a>
            </div>
        @endauth
    </div>
</div>
