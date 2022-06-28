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
    class="p-3 text-red-400 cursor-pointer hover:text-blue-600 hover:font-medium">
   
    <i class="fa-solid fa-plus"></i>
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
                        
                    

                        <form action="{{route('addProduct',$card['id'])}}" class="space-y-6 ng-untouched ng-pristine ng-valid" method="post">
                            @csrf
                            
                            <div class="space-y-1 text-sm">
                                <label for="titre" class="block text-gray-400">Titre</label>
                                <input value="{{$card->titre}}" 
                                class="w-full px-4 py-3 text-gray-100 bg-gray-900 border-gray-700 rounded-md focus:border-teal-400"
                                type="text" name="titre" placeholder="180" />
                               
                            </div>
                            <div class="space-y-1 text-sm">
                                <label for="description" class="block text-gray-400">Détails</label>
                                 <input value="{{$card->description}}" type="description" name="description" id="description" placeholder="Prétitre"
                                    class="w-full px-4 py-3 text-gray-100 bg-gray-900 border-gray-700 rounded-md focus:border-teal-400">
                            </div>
                            <div class="space-y-1 text-sm">
                                <label for="prix" class="block text-gray-400">Prix</label>

                                 <input value="{{$card->prix}}" type="prix" name="prix" id="prix" placeholder="prix"
                                    class="w-full px-4 py-3 text-gray-100 bg-gray-900 border-gray-700 rounded-md focus:border-teal-400">
                            </div>
                            <div class="space-y-1 text-sm">
                                <label for="image" class="block text-gray-400">Image</label>
                                
                                 <input  type="file" name="image" id="image" placeholder="image"
                                    class="flex items-center justify-center h-10 px-6 py-3 mt-1 space-x-2 text-sm tracking-wide text-white transition-colors duration-200 transform bg-gray-900 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-800 focus:ring focus:ring-gray-300 focus:ring-opacity-50">
                                
                            </div>
                            <div class="space-y-1 text-sm">
                                <label for="note" class="block text-gray-400">Note</label>
                                 <input value="{{$card->note}}" type="note" name="note" id="note" placeholder="note"
                                    class="w-full px-4 py-3 text-gray-100 bg-gray-900 border-gray-700 rounded-md focus:border-teal-400">
        
                            </div>
                            
                            <button
                                class="block w-full p-3 text-center text-gray-900 transition-colors duration-200 bg-teal-400 rounded hover:bg-teal-200 focus:bg-teal-200">Ajouter</button>
                        </form>
                       
                     
                      
                    </div>

                </section>

            </div>
        </div>
    </div>
</div>
