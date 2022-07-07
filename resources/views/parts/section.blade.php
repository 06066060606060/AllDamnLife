@php   use \App\Http\Controllers\CategoriesController; @endphp
<div class="max-w-screen-xl p-5 mx-auto text-gray-100">
    @php($urlcat = request()->query('categories'))
    @php($urlnote = request()->query('note'))
    @php($urlprix = request()->query('prix'))
    @php($urlsearch = request()->query('q'))



    @if ($urlcat)
        @foreach ($categories->where('id_cat', '=', $urlcat) as $categorie)
            <h1 class="mb-8">Catégorie : {{ $categorie->label }} <br>
                @if ($urlnote)
                    notés : @for ($i = 0; $i < $urlnote; $i++)
                        <i class="text-yellow-500 fa-solid fa-star"></i>
                    @endfor
                @elseif($urlprix)
                    <h1 class="mb-8">
                        produits d'une valeurs de moins de {{ $urlprix }}€
                    </h1>
                @elseif($urlsearch)
                    <h1 class="mb-8">
                        Résultat pour: {{ $urlsearch }}
                    </h1>
                @endif

            </h1>
        @endforeach
    @elseif ($urlnote)
        <h1 class="mb-8"> Note: :
            @for ($i = 0; $i < $urlnote; $i++)
                <i class="text-yellow-500 fa-solid fa-star"></i>
            @endfor
        </h1>
    @elseif($urlprix)
        <h1 class="mb-8">
            produits d'une valeurs de moins de {{ $urlprix }}€
        </h1>
    @elseif($urlsearch)
        <h1 class="mb-8">
            Résultat pour: {{ $urlsearch }}
        </h1>
    @endif



    @forelse ($produits as $produit)
        <div class="flip">
            <div class="front">
                <span class="ribbon cr cr-top cr-right cr-sticky cr-blue">{{ (int) $produit->prix }} €</span>
                <img class="icon w-[256px] h-auto" src="{{ $produit->image }}">
                <p class="mt-12">{{ $produit->titre }}</p>
            </div>
            <div class="back">
                <div class="flex flex-col items-center content-center pt-6">
                    <img class="w-auto h-20 pb-4 icon" src="{{ $produit->image }}">
                    <span class="px-4 bg-blue-800 rounded-md">{{ (int) $produit->prix }} €</span>
                    <span class="p-2 clamp">{{ $produit->description }}</span>
                    <div class="flex items-center justify-center p-2 flex-rows">
                        @for ($i = 0; $i < $produit->note; $i++)
                            <i class="text-yellow-500 fa-solid fa-star"></i>
                        @endfor
                    </div>

                    <form @auth action="/addtocart/{{ $produit->id }}" method="post"
                        onsubmit="myButton.disabled = true; return true;" @else
                        onclick="document.getElementById('primaryButton').click()" onsubmit="return false" @endauth
                        class="px-2 py-1 mt-1 mb-3 transition-colors duration-150 rounded w-36 bg-emerald-500 hover:bg-emerald-300 hover:text-gray-800">
                        @csrf
                        <input type="hidden" name="quantite" value="1">
                        <button name="myButton" type="submit">Ajouter au panier</button>
                    </form>

                    <a href="/card/{{ $produit->id }}"
                        class="w-24 transition-colors duration-150 bg-blue-600 rounded hover:bg-blue-400 hover:text-gray-800">Plus
                        d'info</a>
                </div>
            </div>
        </div>
    @empty
        <div class="flip mt-4">
            <div class="front">
                <h2 class="pt-32 ">Aucun produit trouvé</h2>
            </div>
            <div class="back">
                <h2 class="pt-32 ">Aucun produit trouvé</h2>
            </div>
        </div>

    @endforelse

    {{-- {{$produits->links('pagination::tailwind')}} --}}

</div>
