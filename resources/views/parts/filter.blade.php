<div class="w-full px-4 rounded-lg">

    <div class="flex flex-col md:flex-row">

        
        <form action="{{ route('searchfilter') }}" method="get">
            <input type="text" name="q" placeholder="Recherche..." id="place-holder-center"
                class="mx-2  w-[188px] my-2 btnmenu h-[43.99px] py-3 px-2 text-sm text-white bg-gray-600 border-transparent rounded-md focus:border-gray-500"
                value="{{ request()->q ?? '' }}">
            <select name="categories"
                class="mx-2  w-[188px] my-2 appearance-none btnmenu h-[43.99px] py-3 text-sm text-white bg-gray-600 border-transparent rounded-md focus:border-gray-500">
                <option value="" class="text-center">Catégories </option>

                @foreach ($categories as $categorie)
                    <option value="{{ $categorie->id_cat }}" class="text-center">{{ $categorie->label }}</option>
                @endforeach
            </select>

            <select name="note"
                class="mx-2  w-[188px] my-2 appearance-none btnmenu  h-[43.99px] py-3 text-sm text-white bg-gray-600 border-transparent rounded-md focus:border-gray-500">
                <option value="" class="text-center">Notes</option>
                <option value="1" class="text-center text-yellow-500">★</option>
                <option value="2" class="text-center text-yellow-500">★★</option>
                <option value="3" class="text-center text-yellow-500">★★★</option>
                <option value="4" class="text-center text-yellow-500">★★★★</option>
                <option value="5" class="text-center text-yellow-500">★★★★★</option>
            </select>

            <select name="prix"
                class="mx-2  w-[188px] my-2 appearance-none btnmenu h-[43.99px] py-3 text-sm text-white bg-gray-600 border-transparent rounded-md focus:border-gray-500 ">
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
            <button class="mx-2  w-[188px] my-2 btnmenu h-[43.99px] text-sm text-center text-gray-100 transition-colors duration-200 bg-gray-600 rounded-md hover:bg-gray-500 focus:bg-gray-400">Valider</button>
            <button class="mx-2  w-[188px] my-2 h-[43.99px] text-sm text-center bg-gray-600 text-gray-100 rounded-md btnmenu hover:bg-gray-500 focus:bg-gray-400"><a href="/">Effacer les filtres</a>
            </button>



        </form>

    </div>
</div>
