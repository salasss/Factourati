<nav x-data="{ open: false }" class="z-70">

        <!-- Primary Navigation Menu -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <nav class="container mx-auto px-4 flex items-center justify-between py-4 " x-data="{ isOpen:false }">
                        <div class="flex">
                          <button @click="isOpen = true">
                            <svg fill="currentColor" viewBox="0 0 24 24" width="24" height="24">
                              <path class="heroicon-ui" d="M4 5h16a1 1 0 010 2H4a1 1 0 110-2zm0 6h16a1 1 0 010 2H4a1 1 0 010-2zm0 6h16a1 1 0 010 2H4a1 1 0 010-2z" /></svg>
                          </button>

                        </div>
                        <div
                                  class="absolute top-0 left-0 bg-white border border-right h-full w-56 z-10" x-show="isOpen"
                                  @click.away="isOpen = false"
                                  x-transition:enter="transition ease-out duration-300 -ml-64"
                                  x-transition:enter-start=""
                                  x-transition:enter-end="transform translate-x-64"
                                  x-transition:leave="transition ease-out duration-300"
                                  x-transition:leave-start=""
                                  x-transition:leave-end="transform -translate-x-64"
                              >
                          <div class="flex justify-end">
                            <button class="text-2xl mr-3 mt-1" @click="isOpen = false">&times;</button>
                          </div>
                            <!-- Logo -->
                            <div class="grid place-items-center">
                                <a href="{{ url('/Compte') }}">
                                    <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                                </a>
                            </div>

                            <!-- Navigation Links -->
                                <x-nav-link :href="route('Compte')" :active="request()->routeIs('Compte')" class="flex items-center px-3 py-3 hover:bg-gray-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5.52 19c.64-2.2 1.84-3 3.22-3h6.52c1.38 0 2.58.8 3.22 3"/><circle cx="12" cy="10" r="3"/><circle cx="12" cy="12" r="10"/></svg>
                                    {{ __('Compte') }}
                                </x-nav-link>


                                <x-nav-link :href="route('Categorie')" :active="request()->routeIs('Categorie')" class="flex items-center px-3 py-3 hover:bg-gray-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" id="category"><path fill="none" fill-rule="evenodd" stroke="#200E32" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.2855094 9.76996262e-15L17.5521036 9.76996262e-15C18.9036211 9.76996262e-15 20 1.10589743 20 2.47018211L20 5.76410278C20 7.12735391 18.9036211 8.23428489 17.5521036 8.23428489L14.2855094 8.23428489C12.9329672 8.23428489 11.8365883 7.12735391 11.8365883 5.76410278L11.8365883 2.47018211C11.8365883 1.10589743 12.9329672 9.76996262e-15 14.2855094 9.76996262e-15zM2.44892104 9.76996262e-15L5.71449064 9.76996262e-15C7.06703281 9.76996262e-15 8.16341169 1.10589743 8.16341169 2.47018211L8.16341169 5.76410278C8.16341169 7.12735391 7.06703281 8.23428489 5.71449064 8.23428489L2.44892104 8.23428489C1.09637888 8.23428489 3.55271368e-15 7.12735391 3.55271368e-15 5.76410278L3.55271368e-15 2.47018211C3.55271368e-15 1.10589743 1.09637888 9.76996262e-15 2.44892104 9.76996262e-15zM2.44892104 11.7657151L5.71449064 11.7657151C7.06703281 11.7657151 8.16341169 12.8716125 8.16341169 14.2369308L8.16341169 17.5298179C8.16341169 18.8941026 7.06703281 20 5.71449064 20L2.44892104 20C1.09637888 20 3.55271368e-15 18.8941026 3.55271368e-15 17.5298179L3.55271368e-15 14.2369308C3.55271368e-15 12.8716125 1.09637888 11.7657151 2.44892104 11.7657151zM14.2855094 11.7657151L17.5521036 11.7657151C18.9036211 11.7657151 20 12.8716125 20 14.2369308L20 17.5298179C20 18.8941026 18.9036211 20 17.5521036 20L14.2855094 20C12.9329672 20 11.8365883 18.8941026 11.8365883 17.5298179L11.8365883 14.2369308C11.8365883 12.8716125 12.9329672 11.7657151 14.2855094 11.7657151z" transform="translate(2 2)"></path></svg>
                                    {{ __('Categorie') }}
                                </x-nav-link>

                                <x-nav-link :href="route('Produits')" :active="request()->routeIs('Produits')" class="flex items-center px-3 py-3 hover:bg-gray-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                                      </svg>
                                    {{ __('Produits') }}
                                </x-nav-link>


                                <x-nav-link :href="route('Clients')" :active="request()->routeIs('Clients')" class="flex items-center px-3 py-3 hover:bg-gray-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                    {{ __('Clients') }}
                                </x-nav-link>

                                <x-nav-link :href="route('factures')" :active="request()->routeIs('factures')" class="flex items-center px-3 py-3 hover:bg-gray-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                                      </svg>
                                    {{ __('Factures') }}
                                </x-nav-link>

                                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="flex items-center px-3 py-3 hover:bg-gray-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                                      </svg>
                                    {{ __('Dashboard') }}
                                </x-nav-link>







                        </div>
                      </nav>


                    <!-- Logo -->
                    <div class="shrink-0 flex items-center">
                        <a href="{{ url('/Compte') }}">
                            <x-application-logo class="block  w-auto fill-current text-gray-800" />
                        </a>
                    </div>
                    <!-- Navigation Links -->
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <x-nav-link1 :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                            {{ __('Dashboard') }}
                        </x-nav-link1>
                    </div>

                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <x-nav-link1 :href="route('factures')" :active="request()->routeIs('factures')" class="flex items-center px-3 py-3 hover:bg-gray-200">
                            {{ __('Factures') }}
                        </x-nav-link1>
                    </div>

                     <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <x-nav-link1 :href="route('Compte')" :active="request()->routeIs('Compte')" class="flex items-center px-3 py-3 hover:bg-gray-200">
                            {{ __('Compte') }}
                        </x-nav-link1>
                    </div>



                    </div>
                </div>

    <!-- Primary Navigation Menu -->

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Se déconnecter') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
