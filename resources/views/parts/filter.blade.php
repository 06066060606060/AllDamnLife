<div class="w-full px-4 rounded-lg">
  
        <div class="grid grid-cols-2 gap-4 md:grid-cols-3 xl:grid-cols-5">
            <input class="w-full px-4 py-3 text-sm text-white bg-gray-600 border-transparent rounded-md focus:border-gray-500 focus:ring-0" value="" placeholder="Recherche..." >
            <form action="/filter" method="post">
                @csrf
            <select name="categories"
             class="w-full h-[43.99px] px-4 py-3 text-sm text-white bg-gray-600 border-transparent rounded-md focus:border-gray-500 focus:ring-0" onChange="this.form.submit()">
             <option value="">Catégories</option>
            @foreach ($categories as $categorie)
            <option value="{{ $categorie->id_cat }}">{{ $categorie->label }}</option>
            @endforeach
            </select>
          </form>
          <form action="/filter" method="post">
            <select name="note" class="w-full h-[43.99px] px-4 py-3 text-sm text-white bg-gray-600 border-transparent rounded-md focus:border-gray-500 focus:ring-0" onChange="this.form.submit()"
            @csrf
                class="w-full px-4 py-3 text-sm text-white bg-gray-600 border-transparent rounded-md focus:border-gray-500 focus:ring-0" onChange="this.form.submit()">
                <option value="" class="">Notes</option>
                <option value="1" class="text-yellow-500">★</option>
                <option value="2" class="text-yellow-500">★★</option>
                <option value="3" class="text-yellow-500">★★★</option>
                <option value="4" class="text-yellow-500">★★★★</option>
                <option value="5" class="text-yellow-500">★★★★★</option>
            </select>
          </form>
            <select
                class="w-full px-4 py-3 text-sm text-white bg-gray-600 border-transparent rounded-md focus:border-gray-500 focus:ring-0">
                <option value="">Gamme de prix</option>
                <option value="1000">More than 100€</option>
                <option value="2000">Between 50€ & 100€</option>
                <option value="3000">Between 25€ & 50€</option>
                <option value="4000">Less than 25€</option>
            </select>
            <a href="/" class="px-4 py-3 text-sm text-white bg-gray-600 border-transparent rounded-md focus:border-gray-500 focus:ring-0">Effacer les filtres</a>
  
        </div>

</div>
