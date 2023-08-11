<x-app-layout>


    <div class="py-12">
         <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6 text-center text-xl font-bold">
                <div class="p-6 text-black-600">
                    {{ __("Voici toutes les factures archiver") }}
                </div>
            </div>

            <div>

            </div>


            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

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
                                        <th scope="col" class="px-6 py-3">facture
                                        </th>
                                        <th scope="col" class="px-6 py-3">Date</th>
                                        <th scope="col" class="px-6 py-3">Date D'Echeance</th>
                                        <th scope="col" class="px-6 py-3">Date d'archive</th>
                                        <th scope="col" class="px-6 py-3">Total</th>

                                        <th scope="col" class="px-6 py-3"> Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($Factures as $Facture)
                                    <tr class="bg-slate-200 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <td class="w-4 p-4">
                                            <div class="flex items-center">
                                                <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">{{$Facture ->facture_number}}</td>
                                        <td class="px-6 py-4">{{$Facture ->facture_Date}}</td>
                                        <td class="px-6 py-4">{{$Facture ->Echeance_date}}</td>
                                        <td class="px-6 py-4">{{$Facture ->deleted_at}}</td>
                                        <td class="px-6 py-4">{{$Facture ->Total}}</td>
                                        <td class="flex items-center px-6 py-4 space-x-3">
                                            <form method="POST" action={{route('Facture.destroy',$Facture ->id)}} >
                                                @csrf
                                                @method('DELETE')

                                                <button class="font-medium text-red-600 dark:text-red-500 hover:underline">Archiver</button>
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
