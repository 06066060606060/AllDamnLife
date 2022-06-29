<div class="max-w-screen-xl mx-auto ">
    <div class="flex items-center justify-center">
        <div class="container">
            <table
                class="flex flex-row flex-no-wrap justify-center w-full overflow-hidden bg-gray-600 rounded-lg sm:shadow-lg btnmenu mt-5">
                <thead class="text-white">
                    @foreach ($cards as $card)
                        <tr class="flex flex-col rounded-l-lg bg-emerald-500 flex-no wrap sm:table-row ">
                            <th class="p-3 text-center ">Titre</th>
                            <th class="p-3 text-center ">Images</th>
                            <th class="p-3 text-center ">Prix</th>
                            <th class="p-3 text-center ">Détails</th>
                            <th class="p-3 text-center " width="110px">Consulter</th>
                            <th class="p-3 text-center" width="110px">Modifier</th>
                            <th class="p-3 text-center" width="110px">Activer</th>
                            <th class="p-3 text-center" width="110px">Supprimer</th>
                        </tr>
                    @endforeach
                </thead>
                <tbody class="flex-1 text-white sm:flex-none">
                    @forelse ($cards as $card)
                        <tr class="flex flex-col flex-no wrap sm:table-row">
                            <td class="p-3">{{ $card->titre }}</td>
                            <td class=""> <img class="w-10 h-10 mx-auto sm:w-14 sm:h-14" src="{{ $card->image }}" alt=""></td>
                            <td class="p-3">{{ $card->prix }}</td>
                            <td class="p-3 clampdeux">{{ $card->description }}</td>
                            <td class="p-3 text-green-400 cursor-pointer hover:text-green-600 hover:font-medium"><a
                                    href="/card/{{ $card->id }}">
                                    <i class="fa-solid fa-eye"></i></a></td>2
                            <td> @include('parts.updateProduct')</td>
                             <td>
                                @include('parts.activeProduct')
                            </td>
                            <td>
                                @include('parts.deleteProduct')
                            </td>
                        </tr>
                        @empty
                        <div class="flex flex-row justify-center">
                            <p class="text-sm text-white">Vide</p>
                        </div>
                    @endforelse
                </tbody>
          
            </table>
            @include('parts.addProduct')
        </div>
    </div>
</div>

<style>
    @media (min-width: 640px) {
        table {
            display: inline-table !important;
        }

        thead tr:not(:first-child) {
            display: none;
        }
    }

    td:not(:last-child) {
        -bottom: 0;
    }

    th:not(:last-child) {
        -bottom: 2px solid rgba(0, 0, 0, .1);
    }
</style>
