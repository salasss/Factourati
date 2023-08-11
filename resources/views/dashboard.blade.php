<x-app-layout>


   <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Bienvenue !") }}
                </div>
                <div class="p-6 text-gray-900">
                   <!-- component -->
                    <section class="text-gray-600 body-font">

                              <div class="grid gap-7 sm:grid-cols-2 lg:grid-cols-4">
                                <div class="relative p-5 pb-16 overflow-hidden bg-white rounded-md shadow-sm">
                                  <div class="text-base text-gray-400 ">Ventes totales</div>
                                  <div class="relative  flex items-center pt-1">
                                    <div class="text-2xl font-bold text-gray-900 ">9850.90 DZD</div>
                                    <span class="flex items-center px-2 py-0.5 mx-2 text-sm text-green-600 bg-green-100 rounded-full">
                                      <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18 15L12 9L6 15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                      </svg>
                                      <span>1.8%</span>
                                    </span>
                                  </div>
                                  <div class="absolute bottom-0 inset-x-0 z-0">
                                    <canvas height="80" id="chart1"></canvas>
                                  </div>
                                </div>
                                <div class="relative p-5 pb-16 overflow-hidden bg-white rounded-md shadow-sm">
                                  <div class="text-base text-gray-400 ">Revenu net</div>
                                  <div class="relative z-10 flex items-center pt-1">
                                    <div class="text-2xl font-bold text-gray-900 ">7520.50 DZD</div>
                                    <span class="flex items-center px-2 py-0.5 mx-2 text-sm text-red-600 bg-red-100 rounded-full">
                                      <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                      </svg>
                                      <span>2.5%</span>
                                    </span>
                                  </div>
                                  <div class="absolute bottom-0 inset-x-0 z-0">
                                    <canvas height="80" id="chart2"></canvas>
                                  </div>
                                </div>
                                <div class="relative p-5 pb-16 overflow-hidden bg-white rounded-md shadow-sm">
                                  <div class="text-base text-gray-400 ">Clients</div>
                                  <div class="relative z-10 flex items-center pt-1">
                                    <div class="text-2xl font-bold text-gray-900 ">1375</div>{{-- nbr de clients --}}
                                    <span class="flex items-center px-2 py-0.5 mx-2 text-sm text-green-600 bg-green-100 rounded-full">
                                      <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18 15L12 9L6 15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                      </svg>
                                      <span>5.2%</span>
                                    </span>
                                  </div>
                                  <div class="absolute bottom-0 inset-x-0 z-0">
                                    <canvas height="80" id="chart3"></canvas>
                                  </div>
                                </div>
                                <div class="relative p-5 pb-16 overflow-hidden bg-white rounded-md shadow-sm">
                                  <div class="text-base text-gray-400 ">revenus mensuels récurrents</div>
                                  <div class="relative z-10 flex items-center pt-1">
                                    <div class="text-2xl font-bold text-gray-900 ">250.00DZD</div>
                                    <span class="flex items-center px-2 py-0.5 mx-2 text-sm text-green-600 bg-green-100 rounded-full">
                                      <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18 15L12 9L6 15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                      </svg>
                                      <span>2.2%</span>
                                    </span>
                                  </div>
                                  <div class="absolute bottom-0 inset-x-0 z-0">
                                    <canvas height="80" id="chart4"></canvas>
                                  </div>
                                </div>
                              </div>


                    </section>
                </div>
            </div>
        </div>
    </div>
    <script>

    </script>
</x-app-layout>
