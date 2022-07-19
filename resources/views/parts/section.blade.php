@php   use \App\Http\Controllers\CategoriesController; @endphp

<div class="max-w-screen-xl p-5 mx-auto text-gray-100" id="app">

    <div v-cloak>
        <div id="pop" class="px-4 py-2 text-xs btnmenu text-emerald-500"><i class="fa-solid fa-basket-shopping"></i>&zwnj; Article ajouté au panier</div>
    </div>

    <div class="gride justify-items-center x">
        @forelse ($produits as $produit)
            <div class="opacity-100 flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <div class="flex flex-col items-center justify-center front">
                            <span class="ribbon">{{ (int) $produit->prix }}
                                €</span>
                            <img class="icon h-[248px] w-auto" src="{{ $produit->image }}">
                            <div class="flex flex-row items-center justify-center p-2">
                                @if ($produit->note)
                                    @for ($i = 0; $i < round($produit->note); $i++)
                                        <i class="px-1 text-yellow-500 fa-solid fa-star"></i>
                                    @endfor
                                @else
                                    <i class="text-gray-200 fa-regular fa-star"></i>
                                @endif
                            </div>
                            <p class="mt-4 text-xl text-gray-200">{{ $produit->titre }}</p>
                        </div>
                    </div>
                    <div class="flip-card-back">
                        <div class="back">
                            <div class="flex flex-col items-center content-center pt-6">
                                <span class="ribbon2">{{ (int) $produit->prix }}
                                    €</span>
                                <p class="mt-10 mb-2 text-xl">{{ $produit->titre }}</p>
                                <img class="w-auto h-20 icon" src="{{ $produit->image }}">
                                <span class="p-4 clamp">{{ $produit->description }}</span>

                                <add-to-cart :produit-id="{{ $produit->id }}" :logged-id="{{ Auth::check()}}"></add-to-cart>

                                <a href="/card/{{ $produit->id }}"
                                    class="text-lg text-white underline transition-colors duration-150 rounded w-36 text-bold hover:text-gray-800">Plus
                                    d'info</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="mt-4">
                <div class="front">
                    <i class="pt-20 fa-solid fa-ban fa-6x"></i>
                    <h2 class="pt-4 text-xl ">Aucun produit trouvé</h2>
                </div>
            </div>

        @endforelse
    </div>
</div>
