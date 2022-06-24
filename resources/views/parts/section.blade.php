
<div class="max-w-screen-xl p-5 mx-auto text-gray-100">

   @foreach ($produits as $produit)
    <div class="flip">
        <div class="front">
            <span class="ribbon cr cr-top cr-right cr-sticky cr-blue">{{ $produit->prix }} €</span>
            <img class="icon" src="{{ $produit->image }}">
            <p class="mt-12">{{ $produit->titre }}</p>
        </div>
        <div class="back">

            <p class="p-2">{{ $produit->description }}</p>
            <a  href="/card" class="w-24 h-12 p-2 bg-blue-600 rounded hover:bg-blue-400 hover:text-gray-300">Voir plus</a>
        </div>
    </div>
    @endforeach
</div>