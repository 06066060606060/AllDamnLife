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
            @csrf
            <select name="note" 
            class="w-full h-[43.99px] px-4 py-3 text-sm text-white bg-gray-600 border-transparent rounded-md focus:border-gray-500 focus:ring-0" onChange="this.form.submit()"
            
                class="w-full px-4 py-3 text-sm text-white bg-gray-600 border-transparent rounded-md focus:border-gray-500 focus:ring-0" onChange="this.form.submit()">
                <option value="" class="">Notes</option>
                <option value="0" class="text-yellow-500">0 étoile</option>
                <option value="1" class="text-yellow-500">★</option>
                <option value="2" class="text-yellow-500">★★</option>
                <option value="3" class="text-yellow-500">★★★</option>
                <option value="4" class="text-yellow-500">★★★★</option>
                <option value="5" class="text-yellow-500">★★★★★</option>
              
               
               
            </select>
          </form>
          <form>
            <select name="prix" 
                class="w-full px-4 py-3 text-sm text-white bg-gray-600 border-transparent rounded-md focus:border-gray-500 focus:ring-0">
                <option value="">Gamme de prix</option>
                <option value="101">More than 100€</option>
                <option value="100">Between 50€ & 100€</option>
                <option value="50">Between 25€ & 50€</option>
                <option value="25">Less than 25€</option>
            </select></form>
            <a href="/" class="px-4 py-3 text-sm text-white bg-gray-600 border-transparent rounded-md focus:border-gray-500 focus:ring-0">Effacer les filtres</a>
  
        </div>

</div>
