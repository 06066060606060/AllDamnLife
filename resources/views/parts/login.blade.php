<div x-data="{ modelOpen: false }">

    <button @click="modelOpen =!modelOpen"
        class="flex items-center justify-center px-4 py-2 mx-1 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform rounded-md bg-emerald-500 hover:bg-gray-600 focus:outline-none focus:bg-gray-500 focus:ring focus:ring-gray-300 focus:ring-opacity-50">
        <span>Se connecter</span>
    </button>

    <div x-cloak x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog"
        aria-modal="true">
        <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
            <div x-cloak @click="modelOpen = false" x-show="modelOpen"
                x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                class="fixed inset-0 transition-opacity bg-gray-900 bg-opacity-60" aria-hidden="true"></div>

            <div x-cloak x-show="modelOpen" x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                class="inline-block pt-8 overflow-hidden transition-all transform rounded-lg 2xl:max-w-2xl">
                <section class="">

                    {{-- @click="modelOpen = false" --}}
                    <div class="w-full max-w-md p-8 space-y-3 text-gray-100 bg-gray-600 rounded-xl">
                        <img class="p-2 bg-gray-900 rounded" src="/img/logo.png" alt="logo">
                    

                        <form action="/login" class="space-y-6 ng-untouched ng-pristine ng-valid" method="post">
                            @csrf
                            
                            <div class="space-y-1 text-sm">
                                <label for="email" class="block text-gray-400">email</label>
                                <input type="email" name="email" id="email" placeholder="exemple@mail.com"
                                    class="w-full px-4 py-3 text-gray-100 bg-gray-900 border-gray-700 rounded-md focus:border-emerald-400">
                            </div>
                            <div class="space-y-1 text-sm">
                                <label for="password" class="block text-gray-400">Mot de passe</label>
                                <input type="password" name="password" id="password" placeholder="Password"
                                    class="w-full px-4 py-3 text-gray-100 bg-gray-900 border-gray-700 rounded-md focus:border-emerald-400">
                                
                            </div>
                            <button
                                class="block w-full p-3 text-center text-white transition-colors duration-200 rounded bg-emerald-500 hover:bg-emerald-400 focus:bg-emerald-400">Se Connecter</button>
                        </form>
                        <div class="flex items-center pt-4 space-x-1">
                            <div class="flex-1 h-px bg-gray-700 sm:w-16"></div>
                            <p class="px-3 text-sm text-gray-400">S'identifier via un réseu social</p>
                            <div class="flex-1 h-px bg-gray-700 sm:w-16"></div>
                        </div>
                        <div class="flex justify-center space-x-4">
                            <button aria-label="Log in with Google" class="p-3 rounded-sm">
                            <i class="fa-brands fa-google"></i>
                            </button>
                            
                            <button aria-label="Log in with GitHub" class="p-3 rounded-sm">
                            <i class="fa-brands fa-facebook-f"></i>
                            </button>
                        </div>
                        <p class="text-xs text-center text-gray-400 sm:px-6">Vous n'avez pas encore de compte? &zwnj;
                            <a rel="noopener noreferrer" href="#"  @click="modelOpen = true" class="text-gray-100 underline"> Inscrivez-vous</a>
                        </p>
                    </div>

                </section>

            </div>
        </div>
    </div>
</div>
