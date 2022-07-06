<div class="w-full px-4 rounded-lg">

    <div class="grid grid-cols-2 gap-4 md:grid-cols-3 xl:grid-cols-5 ">

        <form action="{{ route('searchcard') }}" method="get">
            <div class="form-group btnmenu h-[43.99px]">
                <input type="text" name="q" placeholder="Recherche..." id="place-holder-center"
                    class="w-full px-4 py-3 text-sm text-white bg-gray-600 border-transparent rounded-md focus:border-gray-500 focus:ring-0 form-control"
                    value="{{ request()->q ?? '' }}">

            </div>


        </form>
        <form action="/filter" method="get">

            <select name="categories"
                class="appearance-none btnmenu w-full h-[43.99px] px-4 py-3 text-sm text-white bg-gray-600 border-transparent rounded-md focus:border-gray-500 focus:ring-0"
                onChange="this.form.submit()">
                <option value="" class="text-center">Catégories </option>

                @foreach ($categories as $categorie)
                    <option value="{{ $categorie->id_cat }}" class="text-center">{{ $categorie->label }}</option>
                @endforeach
            </select>

        </form>
        <form action="/filter" method="get">

            <select name="note"
                class=" appearance-none btnmenu w-full h-[43.99px] px-4 py-3 text-sm text-white bg-gray-600 border-transparent rounded-md focus:border-gray-500 focus:ring-0"
                onChange="this.form.submit()">
                <option value="" class="text-center">Notes</option>
                <option value="1" class="text-center text-yellow-500">★</option>
                <option value="2" class="text-center text-yellow-500">★★</option>
                <option value="3" class="text-center text-yellow-500">★★★</option>
                <option value="4" class="text-center text-yellow-500">★★★★</option>
                <option value="5" class="text-center text-yellow-500">★★★★★</option>
            </select>
        </form>
        <form action="/filter" method="get">

            <select name="prix"
                class="appearance-none btnmenu w-full h-[43.99px] px-4 py-3 text-sm text-white bg-gray-600 border-transparent rounded-md focus:border-gray-500 focus:ring-0 "
                onChange="this.form.submit()">

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
        </form>
        <a href="/"
            class="h-[43.99px] px-4 py-3 text-sm text-white bg-gray-600 border-transparent rounded-md btnmenu transition-colors duration-150 focus:border-gray-500 hover:bg-gray-400 focus:ring-0">Effacer
            les filtres</a>

    </div>
</div>

