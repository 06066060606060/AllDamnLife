<div class="max-w-screen-xl mx-auto ">
<<<<<<< HEAD
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
=======

    <div class="flex items-center justify-center">
        <div class="container">
            <table
            
                class="flex flex-row flex-no-wrap justify-center w-full my-5 overflow-hidden bg-gray-900 rounded-lg sm:shadow-lg">
                
                    
                       
                <thead class="text-white">
>>>>>>> af600f8a4fd532686aa51a23fe3b140cb47fd50e

                    @foreach ($users as $user)
                    
                    <tr class="flex flex-col rounded-l-lg bg-emerald-500 flex-no wrap sm:table-row ">

                        <th class="p-3 text-center ">Nom</th>
                        <th class="p-3 text-center">Prenom</th>
                        <th class="p-3 text-center">Username</th>
                        <th class="p-3 text-center">Email</th>
                        <th class="p-3 text-center " width="110px">Lire</th>
                        <th class="p-3 text-center" width="110px">Modifier</th>
                        <th class="p-3 text-center" width="110px">Supprimer</th>

                    </tr>

                    @endforeach

                </thead> 
                
                <tbody class="flex-1 text-white sm:flex-none">
                    
                     @foreach ($users as $user)
                     
                    <tr class="flex flex-col flex-no wrap sm:table-row">
                        
                        <td class="p-3 hover:bg-gray-800">{{ $user->nom }}</td>
                        <td class="p-3 hover:bg-gray-800">{{ $user->prenom }}</td>
                        <td class="p-3 hover:bg-gray-800">{{ $user->username }}</td>
                        <td class="p-3 truncate hover:bg-gray-800 ">{{ $user->email }}
                        </td>
                        <td
                            class="p-3 text-green-400 cursor-pointer hover:bg-gray-800 hover:text-green-600 hover:font-medium">
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
