<div class="max-w-screen-xl mx-auto">
    <div class="flex items-center pb-2 text-gray-100 text-sm">
        <a rel="noopener noreferrer" href="/"
            class="px-5 py-1 border-b-2 border-gray-700 hover:border-blue-400 hover:text-blue-400">Retour</a>
    </div>
    <div class="mx-8">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div
                class="py-8 bg-gray-600 rounded-t rounded-b-none md:rounded-br-none md:rounded-tr-none md:rounded-l-lg md:py-12 panier">
                <div class="max-w-lg px-4 mx-auto md:px-8">
                    <div class="flex items-center">
                        <img class="w-10 h-10 bg-blue-900 rounded-full" src="/img/avatar.png">

                        <h2 class="ml-4 font-medium text-white"> {{ Auth::user()->prenom }}</h2>
                    </div>
                    @php ($totalcost = 0)
                    <div class="mt-4">
                        <p class=" text-gray-200">Contenu du panier</p>
                    </div>
                    <div class="mt-12">
                        <div class="flow-root">
                            <ul class="-my-4 divide-y divide-gray-100">
                                {{--  @forelse comme @foreach mais affiche un truc si c'est vide avec le @empty --}}
                                @forelse ($paniers as $panier)
                                    @foreach ($produits->where('id', '=', $panier->prod_id) as $produit)
                                        <li class="flex items-center justify-between py-4">
                                            <div class="flex items-start">
                                                <img class="flex-shrink-0 object-cover w-16 h-16 rounded-lg bg-neutral-600"
                                                    src="{{ $produit->image }}" alt="" />

                                                <div class="ml-4">
                                                    <p class="pl-4 pt-5 text-sm text-white">{{ $produit->titre }}</p>
                                                </div>
                                            </div>
                                            <div>
                                                <p class="text-sm text-emerald-300">
                                                    {{ $produit->prix }} €
                                                    @php ($totalcost += $produit->prix)   
                                                    <small class="pl-1 ml-4 text-white">
                                                        {{-- A FAIRE FONCTION DELETE PRODUIT DE LA TABLE PANIERS --}}
                                                        <i class="fa-solid fa-trash-can hover:text-red-500 focus:text-red-300"></i>
                                                    </small>
                                                </p>
                                            </div>
                                        </li>
                                    @endforeach
                                @empty
                                    <div class="flex flex-row justify-center">
                                        <p class="text-sm text-white">Votre panier est vide</p>
                                    </div>
                                @endforelse
                            </ul>
                        </div>
                    </div>

                    <div class="mt-8">
                        <p class="text-sm text-gray-200">Total</p>
                        <p class="text-2xl pl-1 font-medium tracking-tight text-emerald-500">{{ $totalcost }} €</p>
                    </div>



                </div>
            </div>

            <div class="py-12 bg-gray-100 rounded-b md:py-24 lg:rounded-r-lg md:rounded-bl-none panier">
                <div class="max-w-lg px-4 mx-auto lg:px-8">
                    <form class="grid grid-cols-6 gap-4">
                        <div class="col-span-3">
                            <label class="block mb-1 text-sm text-gray-600" for="nom">
                                Nom
                            </label>

                            <input class="rounded-lg shadow-sm border-gray-200 w-full text-sm p-2.5" type="text"
                                id="nom" />
                        </div>

                        <div class="col-span-3">
                            <label class="block mb-1 text-sm text-gray-600" for="prenom">
                                Prenom
                            </label>

                            <input class="rounded-lg shadow-sm border-gray-200 w-full text-sm p-2.5" type="text"
                                id="Prenom" />
                        </div>

                        <div class="col-span-6">
                            <label class="block mb-1 text-sm text-gray-600" for="email">
                                Email
                            </label>

                            <input class="rounded-lg shadow-sm border-gray-200 w-full text-sm p-2.5" type="email"
                                id="email" />
                        </div>

                        <div class="col-span-6">
                            <label class="block mb-1 text-sm text-gray-600" for="phone">
                                Telephone
                            </label>

                            <input class="rounded-lg shadow-sm border-gray-200 w-full text-sm p-2.5" type="tel"
                                id="phone" />
                        </div>

                        <fieldset class="col-span-6">
                            <legend class="block mb-4 text-sm text-gray-600">
                                Détails de la carte
                            </legend>

                            <div class="-space-y-px bg-white rounded-lg shadow-sm">
                                <div class="">
                                    <label class="mb-4 sr-only" for="card-number">Numéro de carte</label>

                                    <input
                                        class="border-gray-200 relative rounded-t-lg w-full focus:z-10 text-sm p-2.5 mb-4 placeholder-gray-400"
                                        type="text" name="card-number" id="card-number"
                                        placeholder="Numero de carte" />
                                </div>

                                <div class="flex -space-x-px">
                                    <div class="flex-1">
                                        <label class="sr-only" for="card-expiration-date">
                                            Date d'expiration
                                        </label>

                                        <input
                                            class="border-gray-200 relative rounded-bl-lg w-full focus:z-10 text-sm p-2.5 placeholder-gray-400"
                                            type="text" name="card-expiration-date" id="card-expiration-date"
                                            placeholder="Mois/Année" />
                                    </div>

                                    <div class="flex-1">
                                        <label class="sr-only" for="card-cvc">CVC</label>

                                        <input
                                            class="border-gray-200 relative rounded-br-lg w-full focus:z-10 text-sm p-2.5 placeholder-gray-400"
                                            type="text" name="card-cvc" id="card-cvc" placeholder="CVC" />
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="col-span-6">
                            <legend class="block mb-1 text-sm text-gray-600">
                                Adresse Postale
                            </legend>

                            <div class="-space-y-px bg-white rounded-lg shadow-sm">
                                <div>
                                    <label class="sr-only" for="country">Pays</label>

                                    <select
                                        class="border-gray-200 relative rounded-t-lg w-full focus:z-10 text-sm p-2.5"
                                        id="country" name="country" autocomplete="country-name">
                                        <option>La Réunion</option>

                                    </select>
                                </div>

                                <div>
                                    <label class="sr-only" for="postal-code">
                                        Code Postale
                                    </label>

                                    <input
                                        class="border-gray-200 relative rounded-b-lg w-full focus:z-10 text-sm p-2.5 placeholder-gray-400"
                                        type="text" name="postal-code" id="postal-code" autocomplete="postal-code"
                                        placeholder="Code Postale" />
                                </div>
                            </div>
                        </fieldset>

                        <div class="col-span-6">
                            <button class="rounded-lg bg-black text-sm p-2.5 text-white w-full block" type="submit">
                                Payer maintenant
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
