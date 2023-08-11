<x-app-layout>


    <div class="py-12">
         <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6 text-center text-xl font-bold">
                <div class="p-6 text-black-600">
                    <h1> Voici votre liste des categories de vos produits</h1>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <a href="{{ url('Categorie/Categorie-ajout') }}" class="grid place-items-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5  dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">+Ajouter une categorie</a>
                <x-auth-validation-status class="mb-4" :status="session('message')" />

                <div class="mt-6 p-6 ">
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="p-4">
                                            <div class="flex items-center">
                                                <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                            </div>
                                        </th>
                                        <th scope="col" class="px-6 py-3">Nom</th>

                                        <th scope="col" class="px-6 py-3">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($cates as $Categorie)
                                    <tr class="bg-slate-200 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <td class="w-4 p-4">
                                            <div class="flex items-center">
                                                <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">{{$Categorie ->Nom}}</td>

                                        <td class="flex items-center px-6 py-4 space-x-3">
                                            <a href="{{ url('Categorie/Categorie-modifier/'.$Categorie ->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline" >Modifier </a>
                                            <form method="POST" action={{route('Categorie.destroy',$Categorie ->id)}} >
                                                @csrf
                                                @method('DELETE')

                                                <x-primary-button class="font-medium text-red-600 dark:text-red-500 hover:underline">Suprimer</x-primary-button>
                                            </form>
                                        </td>
                                    </tr>
                                    @empty

                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                </div>

             </div>
         </div>
     </div>


 </x-app-layout>
