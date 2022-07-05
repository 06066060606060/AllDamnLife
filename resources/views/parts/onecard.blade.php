<div class="max-w-screen-xl mx-auto">
    <div class="flex items-center pb-2 text-sm text-gray-100">
        <a rel="noopener noreferrer" href="/"
            class="px-5 py-1 border-b-2 border-gray-700 hover:border-blue-400 hover:text-blue-400">Retour</a>
    </div>
    <div class="items-center justify-center m-auto mt-4 -space-y-4 md:flex md:space-y-0 md:-space-x-4 ">
        <div class="relative z-10 -mx-4 group md:w-6/12 md:mx-0 lg:w-5/12">
            <div aria-hidden="true"
                class="absolute top-0 w-full h-full transition duration-500 shadow-xl btnmenu rounded-2xl bg-emerald-500 group-hover:scale-105 lg:group-hover:scale-110">
            </div>
            <div class="relative p-6 space-y-6 lg:p-8">

                <div class="relative flex justify-around">
                    <div class="flex items-end">
                        <div class="card">
                            <div class="front2">
                                <img class="icon" src=" {{ $produit->image }}">
                            </div>
                            <div class="flex flex-col items-center w-full">
                                <div class="flex flex-col items-center py-6 space-y-3">
                                    <div class="flex space-x-3"></div>
                                </div>
                                @include('parts.comm')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="relative group md:w-5/12 lg:w-6/12">
            <div aria-hidden="true"
                class="absolute top-0 w-full h-full transition duration-500 bg-gray-600 shadow-lg btnmenu rounded-2xl group-hover:scale-105">
            </div>
            <div class="relative p-6 pt-16 md:p-8 md:pl-12 md:rounded-r-2xl lg:pl-20 lg:p-16">
                <div class="flex flex-col justify-center">
                    <h1 class="text-white">{{ $produit->titre }}</h1>
                    <span class="px-6 py-4 text-sm font-light text-white">
                        {{ $produit->description }}
                    </span>
                    <a
                        class="flex items-center justify-center h-8 px-4 pt-1 pb-1 mx-1 mb-2 space-x-2 tracking-wide text-white bg-blue-400 rounded-md">
                        {{ $produit->prix }} €
                    </a>

                    {{-- putain pas mal ce petit truc merci copilot! --}}
                    <form @auth action="/addtocart/{{ $produit->id }}" @else action="/" @endauth method="post">
                     @csrf
                     <div class="flex flex-row justify-center">
                        <label for="quantite" class="px-2 text-gray-100 ">Quantité:</label>
                            <input type="number" class="w-16 px-2 my-2 text-white bg-blue-800" name="quantite" value="1" min="1" max="9">
                        </div>
                     <input type="submit" value="Ajouter au panier" class="flex items-center justify-center w-full h-8 px-4 pt-1 pb-1 mx-1 mt-2 space-x-2 tracking-wide text-white transition-colors duration-200 transform rounded-md btnmenu bg-emerald-500 hover:bg-emerald-300 focus:outline-none focus:bg-emerald-700">
                    </form>
            
                </div>
            </div>
        </div>
    </div>
</div>



<div class="flex flex-col justify-center mx-auto mt-10 md:flex-row">
    <div
        class="container flex flex-col w-full max-w-lg p-6 mx-auto mt-4 text-gray-100 divide-y divide-gray-700 rounded-md sm:mx-4 ">

        {{-- COMMENTAIRES --}}

        @foreach ($comments as $comment)
            <div class="mb-4 transition duration-500 bg-gray-900 rounded-lg btnmenu hover:scale-105">
                <div class="flex justify-between p-4 ">
                    <div class="flex space-x-4">
                        <div>
                            <img src="{{ $comment->user->photo }}" alt=""
                                class="object-cover w-12 h-12 bg-gray-500 rounded-full">
                        </div>
                        <div>
                            <h4 class="font-bold">{{ $comment->user->prenom }} {{ $comment->user->nom }}</h4>
                            <span class="text-sm text-gray-400">{{ $comment->created_at->diffForHumans() }} </span>
                        </div>
                    </div>
                    <div class="flex flex-row items-center space-x-2 text-yellow-500">
                        @for ($i = 0; $i < $comment->note; $i++)
                            <i class="text-yellow-500 fa-solid fa-star"></i>
                        @endfor
                    </div>
                </div>
                <div class="max-w-xl p-4 space-y-2 text-xl text-gray-400 ">
                    <span class="break-words">{{ $comment->contenu }}</span>
                </div>
            </div>
        @endforeach
    </div>


    {{-- New Notation Étoiles --}}

    <div
        class="flex flex-col w-full max-w-lg p-6 mx-auto mt-4 text-gray-100 transition duration-500 bg-gray-900 divide-y divide-gray-700 rounded-md container2 sm:mx-4 btnmenu hover:scale-105">
        <div class="flex flex-col w-full">
            <div class="flex flex-wrap items-center mt-2 mb-1 space-x-2">
                <div class="flex flex-row items-center space-x-2 text-yellow-500">

                    @for ($i = 0; $i < $note; $i++)
                        <i class="text-yellow-500 fa-solid fa-star"></i>
                    @endfor
                </div>
                <span class="text-gray-400">3 sur 5</span>
            </div>
            <p class="text-sm text-gray-400">861 global ratings</p>
            <div class="flex flex-col mt-4">
@foreach ($noteProduct as $noteP )
                <div class="flex items-center space-x-1">
                    <span class="flex-shrink-0 w-12 text-sm">{{$noteP->note}}</span>
                    <div class="flex-1 h-4 overflow-hidden bg-gray-700 rounded-sm">
                        <div class="w-5/6 h-4 bg-orange-300"></div>
                        {{-- pourcentage par rapport nb total de noteP
                        pour chaque colonne, un pourcentage note --}}
                    </div>
                    <span class="flex-shrink-0 w-12 text-sm text-right"> {{$noteP->total}}</span>
                </div>
              @endforeach
            </div>
        </div>
    </div>
</div>
