<div class="max-w-screen-xl mx-auto ">
    <div class="flex items-center justify-center">
        <div class="container">

            <table
                class="flex flex-row flex-no-wrap justify-center w-full my-5 overflow-hidden bg-gray-600 rounded-lg sm:shadow-lg btnmenu">
                @include('parts.addCateg')
                <thead class="text-white">

                    @foreach ($categories as $categorie)
                        <tr class="flex flex-col rounded-l-lg bg-emerald-500 flex-no wrap sm:table-row ">

                            <th class="p-3 text-center ">Catégories</th>
                            <th class="p-3 text-center" width="110px">Modifier</th>
                            <th class="p-3 text-center" width="110px">Supprimer</th>

                        </tr>
                    @endforeach
                    </tr>
                </thead>
                <tbody class="flex-1 text-white sm:flex-none">
                    @forelse ($categories as $categorie)
                        <tr class="flex flex-col flex-no wrap sm:table-row ">
                            <td class="p-3 ">{{ $categorie->label }}</td>
                            <td>
                                @include('parts.updateCateg')
                            <td>
                                @include('parts.deleteCateg')
                            </td>
                        </tr>
                    @empty
                        <div class="flex flex-row justify-center">
                            <p class="text-sm text-white">Aucune catégories existants</p>
                        </div>
                    @endforelse
                </tbody>
               
            </table>
         
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
