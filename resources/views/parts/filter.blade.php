<div class="w-full px-4 rounded-lg">
    <form action="{{ route('searchfilter') }}" method="get">
        <div class="flex flex-row w-full) ">
            <div class="w-64 mb-0 mr-1">

                <input type="text" name="q" placeholder="Recherche..."
                    class="w-full px-4 py-3 text-sm text-white bg-gray-600 border-transparent rounded-md focus:border-gray-500 focus:ring-0 form-control"
                    value="{{ request()->q ?? '' }}">

            </div>


        
                <select name="categories"
                    class="mx-2 btnmenu w-full h-[43.99px] px-4 py-3 text-sm text-white bg-gray-600 border-transparent rounded-md focus:border-gray-500 focus:ring-0">
                    <option value="">Catégories</option>
                    @foreach ($categories as $categorie)
                        <option value="{{ $categorie->id_cat }}">{{ $categorie->label }}</option>
                    @endforeach
                </select>
        
            
                <select name="note"
                    class="mx-2 btnmenu w-full h-[43.99px] px-4 py-3 text-sm text-white bg-gray-600 border-transparent rounded-md focus:border-gray-500 focus:ring-0">
                    <option value="" class="">Notes</option>
                    <option value="1" class="text-yellow-500">1 ★</option>
                    <option value="2" class="text-yellow-500">2 ★★</option>
                    <option value="3" class="text-yellow-500">3 ★★★</option>
                    <option value="4" class="text-yellow-500">4 ★★★★</option>
                    <option value="5" class="text-yellow-500">5 ★★★★★</option>
                </select>
        
                <select name="prix"
                    class="mx-2 btnmenu w-full h-[43.99px] px-4 py-3 text-sm text-white bg-gray-600 border-transparent rounded-md focus:border-gray-500 focus:ring-0 ">

                    <option value="">Gamme de prix</option>
                    <option value="10">
                        < 10€</option> 10€
                    </option>
                    <option value="20">
                        < 20€</option>
                    <option value="30">
                        < 30€</option>
                    <option value="40">
                        < 40€</option>
                    <option value="50">
                        < 50€</option>
                    <option value="">Toutes</option>
                </select>
                <button
                class="mx-2 block w-full h-[43.99px] p-3 text-center text-gray-900 transition-colors duration-200 bg-teal-400 rounded hover:bg-teal-200 focus:bg-teal-200">valider</button>
                <a href="/"
                class="px-4 py-3 h-[43.99px] text-sm text-white bg-gray-600 border-transparent rounded-md btnmenu focus:border-gray-500 focus:ring-0">Effacer
                les filtres</a>
        </div>

    
    </form>




</div>
