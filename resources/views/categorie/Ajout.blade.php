<x-app-layout>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6 text-center text-xl font-bold">
                <div class="p-6 text-black-600">
                    <h1> Ici vous pouvez ajouter vos categories</h1>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6  text-xl font-bold">
                <x-auth-validation-status class="mb-4" :status="session('message')" />
                <div class="p-6 text-black-600">
                    <form action="{{ url('Categorie/Categorie-ajout', []) }}" method="post" class="">
                        @csrf
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3">
                                <x-input2-label for="Nom" :value="__('Categorie')" />
                                <x-text-input id="Nom" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 pr-8 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="Nom" :value="old('Nom')" required autofocus autocomplete="Categorie" />
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
