@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif



<div x-data="{ modelOpen: false }">

    <button @click="modelOpen =!modelOpen"
    class="p-3 text-blue-400 cursor-pointer hover:text-blue-600 hover:font-medium">
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
                    <div class="w-full max-w-md p-8 space-y-3 text-gray-100 bg-gray-600 rounded-xl">
                        <img class="p-2 bg-gray-900 rounded" src="/img/logo.png" alt="logo">
                    

                        <form action="{{route('updateUsers',$user['id'])}}" class="space-y-6 ng-untouched ng-pristine ng-valid" method="post">
                            @csrf
                            
                            <div class="space-y-1 text-sm">
                                <label for="nom" class="block text-gray-400">Nom</label>
                                <input value="{{$user->nom}}" 
                                class="w-full px-4 py-3 text-gray-100 bg-gray-900 border-gray-700 rounded-md focus:border-teal-400"
                                type="text" name="nom" placeholder="180" />
                               
                            </div>
                            <div class="space-y-1 text-sm">
                                <label for="prenom" class="block text-gray-400">Prénom</label>
                                 <input value="{{$user->prenom}}" type="prenom" name="prenom" id="prenom" placeholder="Prénom"
                                    class="w-full px-4 py-3 text-gray-100 bg-gray-900 border-gray-700 rounded-md focus:border-teal-400">
                            </div>
                            <div class="space-y-1 text-sm">
                                <label for="username" class="block text-gray-400">Username</label>
                                 <input value="{{$user->username}}" type="username" name="username" id="username" placeholder="Username"
                                    class="w-full px-4 py-3 text-gray-100 bg-gray-900 border-gray-700 rounded-md focus:border-teal-400">
                            </div>
                            <div class="space-y-1 text-sm">
                                <label for="email" class="block text-gray-400">Email</label>
                                 <input value="{{$user->email}}" type="email" name="email" id="email" placeholder="Adresse mail"
                                    class="w-full px-4 py-3 text-gray-100 bg-gray-900 border-gray-700 rounded-md focus:border-teal-400">
                                
                            </div>
                            <button
                                class="block w-full p-3 text-center text-gray-900 transition-colors duration-200 bg-teal-400 rounded hover:bg-teal-200 focus:bg-teal-200">Mettre à jour</button>
                        </form>
                       
                     
                      
                    </div>

                </section>

            </div>
        </div>
    </div>
</div>
