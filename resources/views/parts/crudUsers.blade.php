<div class="max-w-screen-xl mx-auto ">
<div class="flex items-center justify-center">
    <div class="container">
        <table class="flex flex-row flex-no-wrap justify-center w-full my-5 overflow-hidden bg-gray-900 rounded-lg sm:shadow-lg">
            <thead class="text-white">
                <tr
                    class="flex flex-col  rounded-l-lg bg-emerald-500 flex-no wrap sm:table-row ">
                    <th class="p-3 text-center ">Nom</th>
                    <th class="p-3 text-center">Prenom</th>
                    <th class="p-3 text-center">Email</th>
                    <th class="p-3 text-center " width="110px">Actions</th>
                    <th class="p-3 text-center" width="110px">Actions</th>
                    <th class="p-3 text-center" width="110px">Actions</th>

                </tr>
            </thead>
            <tbody class="flex-1 text-white sm:flex-none">

                <tr class="flex flex-col  flex-no wrap sm:table-row ">
                    <td class="p-3   hover:bg-gray-800">Montegu</td>
                    <td class="p-3   hover:bg-gray-800">Tommy</td>
                    <td class="p-3 truncate   hover:bg-gray-800 ">tommy.montegu@alldamnlife.com
                    </td>
                    <td
                        class="p-3 text-green-400  cursor-pointer hover:bg-gray-800  hover:text-green-600 hover:font-medium">
                        Read</td>
                    <td
                        class="p-3 text-blue-400  cursor-pointer hover:bg-gray-800  hover:text-blue-600 hover:font-medium">
                        Update</td>
                    <td
                        class="p-3 text-red-400  cursor-pointer hover:bg-gray-800  hover:text-red-600 hover:font-medium">
                        Delete</td>
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
