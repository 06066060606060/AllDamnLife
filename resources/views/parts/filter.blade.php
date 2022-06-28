<div class="w-full px-4 rounded-lg shadow">
  
        <div class="grid grid-cols-2 gap-4 md:grid-cols-3 xl:grid-cols-5">
           
  
              
            <input class="px-4 py-3 text-sm text-white bg-gray-600 border-transparent rounded-md focus:border-gray-500 focus:ring-0" value="Recherche">
            <form action="/filter" method="post">
                @csrf
            <select name="categories"
             class="px-4 py-3 text-sm text-white bg-gray-600 border-transparent rounded-md focus:border-gray-500 focus:ring-0 w-full" onChange="this.form.submit()">
             <option value="">Catégories</option>
            @foreach ($categories as $categorie)
            <option value="{{ $categorie->id_cat }}">{{ $categorie->label }}</option>
            @endforeach
            </select>
        </form>
            <select
                class="px-4 py-3 text-sm text-white bg-gray-600 border-transparent rounded-md focus:border-gray-500 focus:ring-0">
               
                <option value="fully-furnished">5 stars</option>
                <option value="partially-furnished">3 stars</option>
                <option value="not-furnished">les than 3 stars</option>
            </select>

            <select
                class="px-4 py-3 text-sm text-white bg-gray-600 border-transparent rounded-md focus:border-gray-500 focus:ring-0">
                <option value="">Gamme de prix</option>
                <option value="1000">More than 100€</option>
                <option value="2000">Between 50€ & 100€</option>
                <option value="3000">Between 25€ & 50€</option>
                <option value="4000">Less than 25€</option>
            </select>

        </div>

</div>
