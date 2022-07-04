<div class="w-full px-4 rounded-lg">
  
        <div class="grid grid-cols-2 gap-4 md:grid-cols-3 xl:grid-cols-5">
                
                 <form action="{{ route('searchcard') }}"  method="get">
                    <div class="mb-0 mr-1 form-group">
                        <input type="text" name="q" placeholder="Recherche..." class="w-full px-4 py-3 text-sm text-white bg-gray-600 border-transparent rounded-md focus:border-gray-500 focus:ring-0 form-control" value="{{ request()->q ?? '' }}"> 
                 
                    </div>
                
                </form>  
            {{-- <form action="/filter" method="get">
                @csrf
            <select name="categories"
             class="w-full h-[43.99px] px-4 py-3 text-sm text-white bg-gray-600 border-transparent rounded-md focus:border-gray-500 focus:ring-0" onChange="this.form.submit()">
             <option value="">Catégories</option>
            @foreach ($categories as $categorie)
            <option value="{{ $categorie->id_cat }}">{{ $categorie->label }}</option>
            @endforeach
            </select>
          </form>
          <form action="/filter" method="get">
            @csrf
            <select name="note"
                class="w-full h-[43.99px] px-4 py-3 text-sm text-white bg-gray-600 border-transparent rounded-md focus:border-gray-500 focus:ring-0" onChange="this.form.submit()">
                <option value="" class="">Notes</option>
                <option value="1" class="text-yellow-500">1★</option>
                <option value="2" class="text-yellow-500">2★★</option>
                <option value="3" class="text-yellow-500">3★★★</option>
                <option value="4" class="text-yellow-500">4★★★★</option>
                <option value="5" class="text-yellow-500">5★★★★★</option>
            </select>
        </form>
            <form action="/filter" method="get">
                @csrf
            <select name="prix"
                class="w-full h-[43.99px] px-4 py-3 text-sm text-white bg-gray-600 border-transparent rounded-md focus:border-gray-500 focus:ring-0 "  onChange="this.form.submit()">
                
                <option value="">Gamme de prix</option>
               
                <option value="25">0-25</option>
               
                <option value="100">25-100</option>
              
              
           
            </select>
        </form> --}}
            <a href="/" class="px-4 py-3 text-sm text-white bg-gray-600 border-transparent rounded-md focus:border-gray-500 focus:ring-0">Effacer les filtres</a>
  
        </div>

</div>



