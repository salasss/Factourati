<x-app-layout>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6 text-center text-xl font-bold">
                <div class="p-6 text-black-600">
                    <h1> Edition des informations de ce client</h1>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6  text-xl font-bold">
                <x-auth-validation-status class="mb-4" :status="session('message')" />
                <div class="p-6 text-black-600">
                    <form action="{{ url('Clients/Clients-maj/'.$Client ->id) }}" method="post" class="">
                        @csrf
                        @method('PUT')
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3">
                                <x-input2-label for="Nom" :value="__('Nom')" />
                                <x-text-input id="Nom" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 pr-8 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="Nom" :value="$Client ->Nom" required autofocus autocomplete="Nom" />
                            </div>
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <x-input2-label for="Prenom" :value="__('Prenom')" />
                                <x-text-input id="Prenom" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" name="Prenom" :value="$Client ->Prenom" required autofocus autocomplete="Prenom" />
                            </div>

                            <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">
                                <x-input2-label for="Email" :value="__('Email')" />
                                <x-text-input id="Email" class="appearance-none block w-30px bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 pr-8leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="Email" :value="$Client ->Email" required autofocus autocomplete="Email" />
                            </div>

                            <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">
                                <x-input2-label for="Telephone" :value="__('Num de telephone')" />
                                <x-text-input id="Telephone" class="appearance-none block w-30px bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 pr-8 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="Telephone" :value="$Client ->Telephone" required autofocus autocomplete="Telephone" />
                            </div>

                            <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">
                                <x-input2-label for="Entreprise" :value="__('Entreprise')" />
                                <x-text-input id="Entreprise" class="appearance-none block w-30px bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="Entreprise" :value="$Client ->entreprise" required autofocus autocomplete="Entreprise" />
                            </div>
                            <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">
                                <x-input2-label for="Adresse" :value="__('Adresse')" />
                                <x-text-input id="Adresse" class="appearance-none block w-30px bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="Adresse" :value="$Client ->adresse" required autofocus autocomplete="Adresse" />
                            </div>


                        </div>
                        <div class="flex items-center justify-center">
                            <x-primary-button class="m-2">
                                {{ __('Mettre à jour') }}
                            </x-primary-button>
                        </div>


                    </form>

                </div>
            </div>

        </div>
    </div>


 </x-app-layout>
