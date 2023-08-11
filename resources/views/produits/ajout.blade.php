<x-app-layout>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6 text-center text-xl font-bold">
                <div class="p-6 text-black-600">
                    <h1> Ici vous pouver ajouter des produits</h1>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6  text-xl font-bold">
                <x-auth-validation-status class="mb-4" :status="session('message')" />
                <div class="p-6 text-black-600">
                    <form action="{{ url('Produit/Produits-ajout', []) }}" method="post" class="">
                        @csrf
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3">
                                <x-input2-label for="Reference" :value="__('Reference')" />
                                <x-text-input id="Reference" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 pr-8 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="Reference" :value="old('Reference')" required autofocus autocomplete="Reference" />
                            </div>
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <x-input2-label for="nom" :value="__('Nom')" />
                                <x-text-input id="nom" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" name="nom" :value="old('nom')" required autofocus autocomplete="nom" />
                            </div>

                            <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">
                                <x-input2-label for="Famille" :value="__('Categorie')" />
                                <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state" name="Famille">
                                    @foreach ($categories as $Categorie)
                                    <option value="{{$Categorie->Nom}}">{{$Categorie->Nom}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">
                                <x-input2-label for="prixht" :value="__('prix de vente hors taxe')" />
                                <x-text-input id="prixht" class="appearance-none block w-30px bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 pr-8 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="prixht" :value="old('name')" required autofocus autocomplete="prixht" />
                            </div>



                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <x-input2-label for="img_ajout" :value="__('Ajouter une photo')" />
                                    <input class="block w-full text-sm text-gray-900 border py-10 border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="img_ajout" type="file">
                                </div>
                                <div class="w-full  px-3 mb-6 md:mb-0">
                                    <x-input2-label for="Description" :value="__('Description')" />
                                    <textarea id="Description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="description" placeholder="Ecrivez la discription du produit ici..."></textarea>
                                </div>

                        </div>
                        <div class="flex items-center justify-center">
                            <x-primary-button class="m-2">
                                {{ __('Ajouter') }}
                            </x-primary-button>
                        </div>


                    </form>

                </div>
            </div>

        </div>
    </div>


 </x-app-layout>
