<div x-data="{ modelOpen: false }">

    <button @click="modelOpen =!modelOpen"
        class="flex items-center justify-center px-4 py-2 mx-1 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-gray-500 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-500 focus:ring focus:ring-gray-300 focus:ring-opacity-50">
        <span>Sign In</span>
    </button>

    <div x-cloak x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog"
        aria-modal="true">
        <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
            <div x-cloak @click="modelOpen = false" x-show="modelOpen"
                x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                class="fixed inset-0 transition-opacity bg-gray-900 bg-opacity-70" aria-hidden="true"></div>

            <div x-cloak x-show="modelOpen" x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                class="inline-block pt-8 overflow-hidden transition-all transform rounded-lg 2xl:max-w-2xl">
                <section class="">

                    {{-- @click="modelOpen = false" --}}
                    <div class="w-full max-w-md p-8 space-y-3 rounded-xl dark:bg-gray-600 dark:text-gray-100">
                        <img src="/img/logo.png" alt="logo">
                    

                        <form novalidate="" action="" class="space-y-6 ng-untouched ng-pristine ng-valid">
                            <div class="space-y-1 text-sm">
                                <label for="nom" class="block dark:text-gray-400">Nom</label>
                                <input type="text" name="nom" id="nom" placeholder="Nom"
                                    class="w-full px-4 py-3 rounded-md dark:border-gray-700 dark:bg-gray-900 dark:text-gray-100 focus:dark:border-teal-400">
                            </div>
                            <div class="space-y-1 text-sm">
                                <label for="prenom" class="block dark:text-gray-400">Prenom</label>
                                <input type="text" name="prenom" id="prenom" placeholder="prenom"
                                    class="w-full px-4 py-3 rounded-md dark:border-gray-700 dark:bg-gray-900 dark:text-gray-100 focus:dark:border-teal-400">
                            </div>
                            <div class="space-y-1 text-sm">
                                <label for="email" class="block dark:text-gray-400">email</label>
                                <input type="email" name="email" id="email" placeholder="exemple@mail.com"
                                    class="w-full px-4 py-3 rounded-md dark:border-gray-700 dark:bg-gray-900 dark:text-gray-100 focus:dark:border-teal-400">
                            </div>
                            <div class="space-y-1 text-sm">
                                <label for="password" class="block dark:text-gray-400">Password</label>
                                <input type="password" name="password" id="password" placeholder="Password"
                                    class="w-full px-4 py-3 rounded-md dark:border-gray-700 dark:bg-gray-900 dark:text-gray-100 focus:dark:border-teal-400">
                                <div class="flex justify-end text-xs dark:text-gray-400">
                                    <a rel="noopener noreferrer" href="#">Forgot Password?</a>
                                </div>
                            </div>
                            <button
                                class="block w-full p-3 text-center rounded-sm dark:text-gray-900 dark:bg-teal-400">Sign
                                in</button>
                        </form>
                        <div class="flex items-center pt-4 space-x-1">
                            <div class="flex-1 h-px sm:w-16 dark:bg-gray-700"></div>
                            <p class="px-3 text-sm dark:text-gray-400">Login with social accounts</p>
                            <div class="flex-1 h-px sm:w-16 dark:bg-gray-700"></div>
                        </div>
                        <div class="flex justify-center space-x-4">
                            <button aria-label="Log in with Google" class="p-3 rounded-sm">
                            <i class="fa-brands fa-google"></i>
                            </button>
                            
                            <button aria-label="Log in with GitHub" class="p-3 rounded-sm">
                            <i class="fa-brands fa-facebook-f"></i>
                            </button>
                        </div>
                        <p class="text-xs text-center sm:px-6 dark:text-gray-400">Don't have an account?
                            <a rel="noopener noreferrer" href="#" class="underline dark:text-gray-100">Sign up</a>
                        </p>
                    </div>

                </section>

            </div>
        </div>
    </div>
</div>
