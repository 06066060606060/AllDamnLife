<div class="max-w-screen-xl mx-auto ">

    <div class="flex items-center justify-center">
        <div class="container">
            <table
            
                class="flex flex-row flex-no-wrap justify-center w-full my-5 overflow-hidden bg-gray-600 rounded-lg sm:shadow-lg btnmenu">
                
                    
                       
                <thead class="text-white">

                    @foreach ($users as $user)
                    
                    <tr class="flex flex-col rounded-l-lg bg-emerald-500 flex-no wrap sm:table-row ">

                        <th class="p-3 text-center ">Nom</th>
                        <th class="p-3 text-center">Prénom</th>
                        <th class="p-3 text-center">Email</th>
                        <th class="p-3 text-center">Role</th>
                        <th class="p-3 text-center " width="110px">Profil</th>
                        <th class="p-3 text-center" width="110px">Modifier</th>
                        <th class="p-3 text-center" width="110px">Activé</th>

                    </tr>

                    @endforeach

                </thead> 
                
                <tbody class="flex-1 text-white sm:flex-none">
                    
                     @foreach ($users as $user)
                     
                    <tr class="flex flex-col flex-no wrap sm:table-row">
                        
                        <td class="p-3">{{ $user->nom }}</td>
                        <td class="p-3">{{ $user->prenom }}</td>
                        <td class="p-3 truncate ">{{ $user->email }}
                            <td class="p-3 truncate ">{{ $user->profil }}
                        </td>
                        <td
                            class="p-3 text-green-400 cursor-pointer hover:text-green-600 hover:font-medium">
                           <a href="/user/{{ $user->id }}"> <i class="fa-solid fa-eye"></i> </a>
                        </td>
                        <td>
                        @include('parts.updateUser')
                        </td>
                        <td>
                        @include('parts.deleteUsers')
                        </td>
                    </tr> 

                    @endforeach

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
