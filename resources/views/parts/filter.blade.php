<div class="w-full px-4 rounded-lg">

    <div class="grid grid-cols-2 gap-4 md:grid-cols-3 xl:grid-cols-6 ">

        <form action="{{ route('searchcard') }}" method="get">
           
                <input type="text" name="q" placeholder="Recherche..." id="place-holder-center"
                    class="btnmenu h-[43.99px] first-letter:w-auto px-4 py-3 text-sm text-white bg-gray-600 border-transparent rounded-md focus:border-gray-500 focus:ring-0 form-control"
                    value="{{ request()->q ?? '' }}">

         
        </form>
        <form action="{{ route('searchfilter') }}" method="get">
            <div class="flex flex-row w-full">
               
                    <select name="categories"
                    class="appearance-none mx-2 btnmenu w-48 h-[43.99px] px-4 py-3 text-sm text-white bg-gray-600 border-transparent rounded-md focus:border-gray-500 focus:ring-0">
                    <option value="" class="text-center">Catégories </option>

                    @foreach ($categories as $categorie)
                        <option value="{{ $categorie->id_cat }}" class="text-center">{{ $categorie->label }}</option>
                    @endforeach
                </select>
             
                <select name="note"
                    class="appearance-none mx-2 btnmenu w-auto h-[43.99px] px-4 py-3 text-sm text-white bg-gray-600 border-transparent rounded-md focus:border-gray-500 focus:ring-0">
                    <option value="" class="text-center">Notes</option>
                    <option value="1" class="text-center text-yellow-500">★</option>
                    <option value="2" class="text-center text-yellow-500">★★</option>
                    <option value="3" class="text-center text-yellow-500">★★★</option>
                    <option value="4" class="text-center text-yellow-500">★★★★</option>
                    <option value="5" class="text-center text-yellow-500">★★★★★</option>
                </select>

                <select name="prix"
                    class="appearance-none mx-2 btnmenu w-auto h-[43.99px] px-4 py-3 text-sm text-white bg-gray-600 border-transparent rounded-md focus:border-gray-500 focus:ring-0 ">
                    <option value="" class="text-center">Gamme de prix</option>
                    <option value="10" class="text-center">
                        < 10€</option> 10€
                    </option>
                    <option value="20" class="text-center">
                        < 20€</option>
                    <option value="30" class="text-center">
                        < 30€</option>
                    <option value="40" class="text-center">
                        < 40€</option>
                    <option value="50" class="text-center">
                        < 50€</option>
                    <option value="" class="text-center">Toutes</option>
                </select>
                <button
                    class="mx-2 w-auto btnmenu h-[43.99px] text-center text-gray-900 transition-colors duration-200 bg-teal-400 rounded-md hover:bg-teal-200 focus:bg-teal-200">valider</button>
                <a href="/"
                    class="w-auto mx-2 px-4 py-3 h-[43.99px] text-sm text-center marker:text-white bg-gray-600 border-transparent rounded-md btnmenu focus:border-gray-500 focus:ring-0">Effacer
                    les filtres</a>
            </div>


        </form>

    </div>
</div>
