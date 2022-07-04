<div x-data="{ modelOpen: false }">

    <button @click="modelOpen =!modelOpen" class="p-3 text-blue-400 cursor-pointer hover:text-blue-600 hover:font-medium">
        <i class="fa-solid fa-pen-to-square"></i>
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
                    <div class="w-full max-w-xl py-8 px-20 space-y-3 text-gray-100 bg-gray-600 rounded-xl">
                        <form action="{{ route('updateUsers', $user->id) }}" enctype="multipart/form-data"
                            method="POST" class="w-full max-w-lg">
                            @csrf
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2"
                                        for="grid-first-name">
                                        Nom
                                    </label>
                                    <input name="nom"
                                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                        id="grid-first-name" type="text" placeholder="" value="{{ $user->nom }}">

                                </div>
                                <div class="w-full md:w-1/2 px-3">
                                    <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2"
                                        for="grid-last-name">
                                        Prenom
                                    </label>
                                    <input name="prenom"
                                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="grid-last-name" type="text" placeholder="" value="{{ $user->prenom }}">
                                </div>
                                <div>
                                <select class="text-black" name="role">
                                    <option value="{{ $user->profil }}" selected>{{ $user->profil }}</option>
                                    <option value="abonne">abonne</option>
                                    <option value="client">client</option>
                                    <option value="admin">admin</option>
                                </select>
                            </div>
                            </div>
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2"
                                        for="username">
                                        Pseudo
                                    </label>
                                    <input name="username"
                                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                        type="text" placeholder="" value="{{ $user->username }}">

                                </div>
                                <div class="w-full md:w-1/2 px-3">
                                    <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2"
                                        for="grid-last-name">
                                        Telephone
                                    </label>
                                    <input name="phone"
                                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="grid-last-name" type="text" placeholder=""
                                        value="{{ $user->numero_telephone }}">
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full px-3">
                                    <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2"
                                        for="grid-password">
                                        Addresse
                                    </label>
                                    <input name="address"
                                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        placeholder="" value=" {{ $user->address }}">
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-3 mb-2">
                                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2"
                                        for="grid-zip">
                                        Code-Postal
                                    </label>
                                    <input name="zip"
                                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="grid-zip" type="text" placeholder="90210"
                                        value=" {{ $user->zipCode }}">
                                </div>
                                <div class="w-full md:w-2/3 px-3 mb-6 md:mb-0 pb-4">
                                    <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2"
                                        for="grid-city">
                                        Ville
                                    </label>
                                    <input name="city"
                                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="grid-city" type="text" placeholder="" value=" {{ $user->city }}">
                                </div>
                                <button
                                    class="block w-full p-3 text-center text-gray-900 transition-colors duration-200 bg-teal-400 rounded hover:bg-teal-200 focus:bg-teal-200">Valider</button>
                            </div>
                    </div>
                    </form>
                </section>

            </div>

        </div>

    </div>

</div>
