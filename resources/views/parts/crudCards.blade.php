<div class="max-w-screen-xl mx-auto ">

    <div class="flex items-center justify-center">
        <div class="container">
            <table class="flex flex-row flex-no-wrap justify-center w-full my-5 overflow-hidden bg-gray-900 rounded-lg sm:shadow-lg btnmenu">
                <thead class="text-white">
                    <tr
                        class="flex flex-col rounded-l-lg bg-emerald-500 flex-no wrap sm:table-row ">
                        <th class="p-3 text-center ">Images</th>
                        <th class="p-3 text-center ">Prix</th>
                        <th class="p-3 text-center ">Détails</th>
                        <th class="p-3 text-center ">Note</th>
                        <th class="p-3 text-center ">Commentaires</th>
                        <th class="p-3 text-center " width="110px">Lire</th>
                        <th class="p-3 text-center" width="110px">Modifier</th>
                        <th class="p-3 text-center" width="110px">Supprimer</th>
    
                    </tr>
                    <tr
                    class="flex flex-col rounded-l-lg bg-emerald-500 flex-no wrap sm:table-row ">
                    <th class="p-3 text-center ">Images</th>
                    <th class="p-3 text-center ">Prix</th>
                    <th class="p-3 text-center ">Détails</th>
                    <th class="p-3 text-center ">Note</th>
                    <th class="p-3 text-center ">Commentaires</th>
                    <th class="p-3 text-center " width="110px">Lire</th>
                    <th class="p-3 text-center" width="110px">Modifier</th>
                    <th class="p-3 text-center" width="110px">Supprimer</th>

                </tr>
                </thead>
                <tbody class="flex-1 text-white sm:flex-none">
    
                    <tr class="flex flex-col flex-no wrap sm:table-row">
                        <td class="p-3">une image</td> 
                        <td class="p-3">350 €</td>
                        <td class="p-3">C'est cool</td>
                        <td class="p-3">5/5</td>
                        <td class="p-3">20</td>
                         <td
                            class="p-3 text-green-400 cursor-pointer hover:text-green-600 hover:font-medium">
                            <i class="fa-solid fa-eye"></i></td>
                        <td
                            class="p-3 text-blue-400 cursor-pointer hover:text-blue-600 hover:font-medium">
                            <i class="fa-solid fa-pen-to-square"></i></td>
                        <td
                            class="p-3 text-red-400 cursor-pointer hover:text-red-600 hover:font-medium">
                            <i class="fa-solid fa-trash-can"></i></td>
                    </tr>
     
                    <tr class="flex flex-col flex-no wrap sm:table-row ">
                        <td class="p-3">une image</td>
                        <td class="p-3">350 €</td>
                        <td class="p-3">C'est sympa</td>
                        <td class="p-3">4.5/5</td>
                        <td class="p-3">10</td>
                         <td
                            class="p-3 text-green-400 cursor-pointer hover:text-green-600 hover:font-medium">
                            <i class="fa-solid fa-eye"></i></td>
                        <td
                            class="p-3 text-blue-400 cursor-pointer hover:text-blue-600 hover:font-medium">
                            <i class="fa-solid fa-pen-to-square"></i></td>
                        <td
                            class="p-3 text-red-400 cursor-pointer hover:text-red-600 hover:font-medium">
                            <i class="fa-solid fa-trash-can"></i></td>
                    </tr>
             
    
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