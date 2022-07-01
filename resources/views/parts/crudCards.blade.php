

<div class="max-w-screen-xl mx-auto ">
    <div class="flex items-center justify-center">
        <div class="container">
            <table
                class="w-full flex flex-row flex-no-wrap rounded-lg overflow-hidden my-5">
                <thead class="text-white">
                    @foreach ($cards as $card)
                        <tr
                            class="bg-emerald-500 flex flex-col flex-no wrap sm:table-row rounded-l-lg  sm:rounded-none mb-2 sm:mb-0 ">
                            <th class=" p-3 h-12 text-center">Titre</th>
                            <th class=" p-3 h-12 text-center">Image</th>
                            <th class=" p-3 h-12 text-center">Prix</th>
                            <th class=" p-3 h-12 text-center">Consulter</th>
                            <th class=" p-3 h-12 text-center">Modifier</th>
                            <th class=" p-3 h-12 text-center">Supprimer</th>
                            <th class=" p-3 h-12 text-center">Active</th>
                        </tr>
                    @endforeach
                </thead>
                <tbody class="flex-1 sm:flex-none">
                    @forelse ($cards as $card)
                        <tr class="flex flex-col flex-no-wrap sm:table-row mb-2 -p-2 bg-gray-700 sm:mb-0">
                            <td class=" text-white p-3 h-12">{{ $card->titre }}</td>
                            <td class=" h-12 truncate"><img
                                    class="w-10 h-10 mx-auto sm:w-14 sm:h-14" src="{{ $card->image }}" alt="">
                            </td>
                            <td
                                class=" p-3 h-12 text-white">
                                {{ $card->prix }}</td>
                                <td class="p-3 text-green-400 cursor-pointer hover:text-green-600    h-12"><a
                                    href="/card/{{ $card->id }}">
                                    <i class="fa-solid fa-eye"></i></a></td>
                                    <td class="  hover:text-blue-900 h-12">@include('parts.updateProduct')
                                    </td>
                                    <td class="  hover:text-red-600 h-12">@include('parts.deleteProduct')
                                    </td>
                                    <td class=" hover:text-blue-600   h-12"> @include('parts.activeProduct')
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

    

    th:not(:last-child) {
        border-bottom: 2px solid rgba(0, 0, 0, .1);
    }
</style>
