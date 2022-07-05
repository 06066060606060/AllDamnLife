<div class="max-w-screen-xl p-5 mx-auto text-gray-100">
    @foreach ($produits as $produit)
        <div class="flip">
            <div class="front">
                <span class="ribbon cr cr-top cr-right cr-sticky cr-blue">{{ (int) $produit->prix }} €</span>
                <img class="icon" src="{{ $produit->image }}">
                <p class="mt-12">{{ $produit->titre }}</p>
            </div>
            <div class="back">
                <div class="flex flex-col items-center content-center pt-6">
                    <img class="w-auto h-20 icon" src="{{ $produit->image }}">
                    <span class="px-4 bg-blue-800 rounded-md">{{ (int) $produit->prix }} €</span>
                    <span class="p-2 clamp">{{ $produit->description }}</span>
                    <div class="flex items-center justify-center p-2 flex-rows">
                        @for ($i = 0; $i < $produit->note; $i++)
                            <i class="text-yellow-500 fa-solid fa-star"></i>
                        @endfor
                    </div>

                    <a @auth href="/addtocart/{{ $produit->id }}" @else href="/" @endauth
                        class="px-2 mt-1 mb-3 rounded w-36 bg-emerald-500 hover:bg-emerald-300 hover:text-gray-800">Ajouter au panier</a>
                    <a href="/card/{{ $produit->id }}"
                        class="w-24 bg-blue-600 rounded hover:bg-blue-400 hover:text-gray-800">Plus d'info</a>
                </div>
            </div>
        </div>
    @endforeach
    

        
       {{$produits->links('pagination::tailwind')}}
        
</div>
