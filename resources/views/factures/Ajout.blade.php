<x-app-layout>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
    <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script>
        window.addEventListener('DOMContentLoaded', function() {
            const today = new Date();
            var picker = new Pikaday({
                keyboardInput: false,
                field: document.querySelector('.js-datepicker'),
                format: 'MMM D YYYY',
                theme: 'date-input',
                i18n: {
                    previousMonth: "Prev",
                    nextMonth: "Next",
                    months: [
                        "Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"
                    ],
                    weekdays: [
                        "Sunday", "Monday", "Tuesday", "Wednesday", "Thursday","Friday","Saturday"
                    ],
                    weekdaysShort: ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa"]
                }
            });
            picker.setDate(new Date());

            var picker2 = new Pikaday({
                keyboardInput: false,
                field: document.querySelector('.js-datepicker-2'),
                format: 'MMM D YYYY',
                theme: 'date-input',
                i18n: {
                    previousMonth: "Prev",
                    nextMonth: "Next",
                    months: [
                        "Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"
                    ],
                    weekdays: [
                        "Sunday", "Monday", "Tuesday", "Wednesday", "Thursday","Friday","Saturday"
                    ],
                    weekdaysShort: ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa"]
                }
            });
            picker2.setDate(new Date());
        });

        function Factures() {
            return {
                items: [],
                FactureNumber: 0,
                FactureDate: '',
                FactureDueDate: '',

                totalTVA: 0,
                netTotal: 0,

                item: {
                    id: '',
                    name: '',
                    qty: 0,
                    rate: 0,
                    total: 0,
                    TVA: 18
                },

                billing: {
                    name: '',
                    address: '',
                    extra: ''
                },
                from: {
                    name: '',
                    address: '',
                    extra: ''
                },

                showTooltip: false,
                showTooltip2: false,
                openModal: false,

                addItem() {
                    this.items.push({
                        id: this.generateUUID(),
                        name: this.item.name,
                        qty: this.item.qty,
                        rate: this.item.rate,
                        TVA: this.calculateTVA(this.item.TVA, this.item.rate),
                        total: this.item.qty * this.item.rate
                    })

                    this.itemTotal();
                    this.itemTotalTVA();

                    this.item.id = '';
                    this.item.name = '';
                    this.item.qty = 0;
                    this.item.rate = 0;
                    this.item.TVA = 10;
                    this.item.total = 0;
                },

                deleteItem(uuid) {
                    this.items = this.items.filter(item => uuid !== item.id);

                    this.itemTotal();
                    this.itemTotalTVA();
                },

                itemTotal() {
                    this.netTotal = this.numberFormat(this.items.length > 0 ? this.items.reduce((result, item) => {
                        return result + item.total;
                    }, 0) : 0);
                },

                itemTotalTVA() {
                    this.totalTVA =  this.numberFormat(this.items.length > 0 ? this.items.reduce((result, item) => {
                        return result + (item.TVA * item.qty);
                    }, 0) : 0);
                },

                calculateTVA(TVAPercentage, itemRate) {
                    return this.numberFormat((itemRate - (itemRate * (100 / (100 + TVAPercentage)))).toFixed(2));
                },

                generateUUID() {
                    return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
                        var r = Math.random() * 16 | 0, v = c == 'x' ? r : (r & 0x3 | 0x8);
                        return v.toString(16);
                    });
                },

                generateFactureNumber(minimum, maximum) {
                    const randomNumber = Math.floor(Math.random() * (maximum - minimum)) + minimum;
                    this.FactureNumber = '#FCT-'+ randomNumber;
                },

                numberFormat(Montant) {
                    return Montant.toLocaleString("en-US", {
                        style: "currency",
                        currency: "INR"
                    });
                },

                printFacture() {
                    var printContents = this.$refs.printTemplate.innerHTML;
                    var originalContents = document.body.innerHTML;

                    document.body.innerHTML = printContents;
                    window.print();
                    document.body.innerHTML = originalContents;
                }
            }
        }
    </script>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6 text-center text-xl font-bold">
                <div class="p-6 text-black-600">
                    <h1> Ici vous pouver ajouter des factures</h1>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6  text-xl font-bold">
                <x-auth-validation-status class="mb-4" :status="session('message')" />
                <div class="p-6 text-black-600">
                    <body class="antialiased sans-serif">
                        <div
                            class="container mx-auto py-6 px-4" x-data="Factures()" x-init="generateFactureNumber(111111, 999999);"  x-cloak      >
                            <div class="flex justify-between">
                                <h2 class="text-2xl font-bold mb-6 pb-2 tracking-wider uppercase">Facture</h2>
                                <div>
                                    <div class="relative mr-4 inline-block">
                                        <div class="text-gray-500 cursor-pointer w-10 h-10 rounded-full bg-gray-100 hover:bg-gray-300 inline-flex items-center justify-center" @mouseenter="showTooltip = true" @mouseleave="showTooltip = false" @click="printFacture()">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-printer" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                                                <path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2" />
                                                <path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4" />
                                                <rect x="7" y="13" width="10" height="8" rx="2" />
                                            </svg>
                                        </div>
                                        <div x-show.transition="showTooltip" class="z-40 shadow-lg text-center w-32 block absolute right-0 top-0 p-2 mt-12 rounded-lg bg-gray-800 text-white text-xs">
                                            Imprimez cette facture !
                                        </div>
                                    </div>

                                    <div class="relative inline-block">
                                        <div class="text-gray-500 cursor-pointer w-10 h-10 rounded-full bg-gray-100 hover:bg-gray-300 inline-flex items-center justify-center" @mouseenter="showTooltip2 = true" @mouseleave="showTooltip2 = false" @click="window.location.reload()">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-refresh" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                                                <path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -5v5h5" />
                                                <path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 5v-5h-5" />
                                            </svg>
                                        </div>
                                        <div x-show.transition="showTooltip2" class="z-40 shadow-lg text-center w-32 block absolute right-0 top-0 p-2 mt-12 rounded-lg bg-gray-800 text-white text-xs">
                                            Rafraîchir la page
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form action="{{ url('factures/factures-ajout', []) }}" method="post" class="">
                                @csrf
                                <div class="flex mb-8 justify-between">
                                    <div class="w-2/4">
                                        <div class="mb-2 md:mb-1 md:flex items-center">
                                            <label class="w-32 text-gray-800 block font-bold text-sm uppercase tracking-wide">Facture No.</label>
                                            <span class="mr-4 inline-block  md:block">:</span>
                                            <div class="flex-1">
                                            <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-48 py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="FactureNo" name="FactureNo" type="text" placeholder="eg. #FCT-100001" x-model="FactureNumber">
                                            </div>
                                        </div>

                                        <div class="mb-2 md:mb-1 md:flex items-center">
                                            <label class="w-32 text-gray-800 block font-bold text-sm uppercase tracking-wide">Date de la facture</label>
                                            <span class="mr-4 inline-block md:block">:</span>
                                            <div class="flex-1">
                                            <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-48 py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500 js-datepicker" type="text" id="datepicker1" name="date1" placeholder="eg. 17 Fev, 2023" x-model="FactureDate" x-on:change="FactureDate = document.getElementById('datepicker1').value" autocomplete="off" readonly>
                                            </div>
                                        </div>

                                        <div class="mb-2 md:mb-1 md:flex items-center">
                                            <label class="w-32 text-gray-800 block font-bold text-sm uppercase tracking-wide">Date d'échéance</label>
                                            <span class="mr-4 inline-block  md:block">:</span>
                                            <div class="flex-1">
                                            <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-48 py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500 js-datepicker-2" id="datepicker2" name="date2" type="text" placeholder="eg. 17 Mar, 2023" x-model="FactureDueDate" x-on:change="FactureDueDate = document.getElementById('datepicker2').value" autocomplete="off" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="w-32 h-32 mb-1 border rounded-lg overflow-hidden relative bg-gray-100">
                                            <img id="image" class="object-cover w-full h-32" src="https://placehold.co/300x300/e2e8f0/e2e8f0" />

                                            <div class="absolute top-0 left-0 right-0 bottom-0 w-full  cursor-pointer flex items-center justify-center" onClick="document.getElementById('fileInput').click()">
                                                <button type="button"
                                                    style="background-color: rgba(255, 255, 255, 0.65)"
                                                    class="hover:bg-gray-100 text-gray-700 font-semibold py-2 px-4 text-sm border border-gray-300 rounded-lg shadow-sm"
                                                >
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-camera" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                                                        <path d="M5 7h1a2 2 0 0 0 2 -2a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1a2 2 0 0 0 2 2h1a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2" />
                                                        <circle cx="12" cy="13" r="3" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <input name="photo" id="fileInput" accept="image/*" class="hidden" type="file" onChange="let file = this.files[0];
                                            var reader = new FileReader();

                                            reader.onload = function (e) {
                                                document.getElementById('image').src = e.target.result;
                                                document.getElementById('image2').src = e.target.result;
                                            };

                                            reader.readAsDataURL(file);
                                        ">
                                    </div>
                                </div>

                                <div class="flex flex-wrap justify-between mb-8">
                                    <div class="w-full md:w-1/3 mb-2 md:mb-0">
                                        <label class="text-gray-800 block mb-1 font-bold text-sm uppercase tracking-wide">Facturation pour:</label>
                                        <input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="client_nom" type="text" placeholder="Nom de l'entreprise a facturée" x-model="billing.name">
                                        <div id="client_list" class="flex absolute bg-cyan-500 shadow-lg shadow-cyan-500/50 rounded-lg"></div>
                                        <script >
                                            $(document).ready(function(){
                                                $('#client_nom').keyup(function(){
                                                    var query = $(this).val();
                                                    if(query != '')
                                                    {
                                                        var _token = $('input[name="_token"]').val();
                                                        $.ajax({
                                                        url:"{{ route('autocomplete') }}",
                                                        method:"GET",
                                                        data:{query:query, _token:_token},
                                                        success:function(data){
                                                        $('#client_list').fadeIn();
                                                                $('#client_list').html(data);
                                                        }
                                                        });
                                                    }
                                                });
                                                $(document).on('click', '#li0', function(){
                                                    $('#client_nom').val($(this).text());
                                                    $('#client_list').fadeOut();
                                                });
                                                });
                                            </script>
                                        <input class="cltadr mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="adrclient" type="text" placeholder="L'addresse de l'entreprise de facturée" x-model="billing.address">
                                        <div id="client_list1" class="flex absolute bg-cyan-500 shadow-lg shadow-cyan-500/50 rounded-lg"></div>
                                        <script >
                                            $(document).ready(function(){
                                                $('.cltadr').keyup(function(){
                                                    var query = $(this).val();
                                                    if(query != '')
                                                    {
                                                        var _token = $('input[name="_token"]').val();
                                                        $.ajax({
                                                        url:"{{ route('autoadresse') }}",
                                                        method:"GET",
                                                        data:{query:query, _token:_token},
                                                        success:function(data){
                                                        $('#client_list1').fadeIn();
                                                                $('#client_list1').html(data);
                                                        }
                                                        });
                                                    }
                                                });
                                                $(document).on('click', '#li1', function(){
                                                    $('.cltadr').val($(this).text());
                                                    $('#client_list1').fadeOut();
                                                });
                                                });
                                            </script>
                                        <input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="information additionnelle" x-model="billing.extra">
                                    </div>

                                    <div class="w-full md:w-1/3">
                                        <label class="text-gray-800 block mb-1 font-bold text-sm uppercase tracking-wide">De:</label>
                                        <input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" value={{ auth()->user()->name_entreprise }} readonly >

                                        <input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" value={{ auth()->user()->adresse_entreprise }} readonly >

                                        <input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="information additionnelle" x-model="from.extra">
                                    </div>
                                </div>

                                <div class="flex -mx-1 border-b py-2 items-start">
                                    <div class="flex-1 px-1">
                                        <p class="text-gray-800 uppercase tracking-wide text-sm font-bold">Description</p>
                                    </div>

                                    <div class="px-1 w-20 text-right">
                                        <p class="text-gray-800 uppercase tracking-wide text-sm font-bold">Quantité</p>
                                    </div>

                                    <div class="px-1 w-32 text-right">
                                        <p class="leading-none">
                                            <span class="block uppercase tracking-wide text-sm font-bold text-gray-800">Prix ​​Unitaire</span>
                                        </p>
                                    </div>

                                    <div class="px-1 w-32 text-right">
                                        <p class="leading-none">
                                            <span class="block uppercase tracking-wide text-sm font-bold text-gray-800">Montant</span>
                                        </p>
                                    </div>

                                    <div class="px-1 w-20 text-center">
                                    </div>
                                </div>
                                <template x-for="Facture in items" :key="Facture.id">
                                    <div class="flex -mx-1 py-2 border-b">
                                        <div class="flex-1 px-1">
                                            <p class="text-gray-800" x-text="Facture.name"></p>
                                        </div>

                                        <div class="px-1 w-20 text-right">
                                            <p class="text-gray-800" x-text="Facture.qty"></p>
                                        </div>

                                        <div class="px-1 w-32 text-right">
                                            <p class="text-gray-800" x-text="numberFormat(Facture.rate)"></p>
                                        </div>

                                        <div class="px-1 w-32 text-right">
                                            <p class="text-gray-800" x-text="numberFormat(Facture.total)"></p>
                                        </div>

                                        <div class="px-1 w-20 text-right">
                                            <a href="#" class="text-red-500 hover:text-red-600 text-sm font-semibold" @click.prevent="deleteItem(Facture.id)">Delete</a>
                                        </div>
                                    </div>
                                </template>
                                <p href="" class="mt-6 bg-white hover:bg-gray-100 text-gray-700 font-semibold py-2 px-4 text-sm border border-gray-300 rounded shadow-sm" x-on:click="openModal = !openModal">
                                    Ajouter un produit</p>

                                {{-- <button class="mt-6 bg-white hover:bg-gray-100 text-gray-700 font-semibold py-2 px-4 text-sm border border-gray-300 rounded shadow-sm" x-on:click="openModal = !openModal">
                                    Ajouter un produit
                                </button> --}}

                                <div class="py-2 ml-auto mt-5 w-full sm:w-2/4 lg:w-1/4">
                                    <div class="flex justify-between mb-3">
                                        <div class="text-gray-800 text-right flex-1">Total TVA inclue</div>
                                        <div class="text-right w-40">
                                            <div class="text-gray-800 font-medium" x-html="netTotal"></div>

                                        </div>
                                    </div>
                                    <div class="flex justify-between mb-4">
                                        <div class="text-sm text-gray-600 text-right flex-1">TVA(10%) incl. in Total</div>
                                        <div class="text-right w-40">
                                            <div class="text-sm text-gray-600" x-html="totalTVA"></div>
                                        </div>
                                    </div>

                                    <div class="py-2 border-t border-b">
                                        <div class="flex justify-between">
                                            <div class="text-xl text-gray-600 text-right flex-1">Montant Total</div>
                                            <div class="text-right w-40">
                                                <div class="text-xl text-gray-800 font-bold"  x-html="netTotal"  ></div>
                                                <p name="netotal" >10</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center justify-center">
                                    <x-primary-button class="m-2">
                                        {{ __('Ajouter') }}
                                    </x-primary-button>
                                </div>
                            </form>


                            <!-- Print Template -->
                            <div id="js-print-template" x-ref="printTemplate" class="hidden">
                                <div class="mb-8 flex justify-between">
                                    <div>
                                        <h2 class="text-3xl font-bold mb-6 pb-2 tracking-wider uppercase">Facture</h2>

                                        <div class="mb-1 flex items-center">
                                            <label class="w-32 text-gray-800 block font-bold text-xs uppercase tracking-wide">Facture No.</label>
                                            <span class="mr-4 inline-block">:</span>
                                            <div x-text="FactureNumber"></div>
                                        </div>

                                        <div class="mb-1 flex items-center">
                                            <label class="w-32 text-gray-800 block font-bold text-xs uppercase tracking-wide">Facture Date</label>
                                            <span class="mr-4 inline-block">:</span>
                                            <div x-text="FactureDate"></div>
                                        </div>

                                        <div class="mb-1 flex items-center">
                                            <label class="w-32 text-gray-800 block font-bold text-xs uppercase tracking-wide">Due date</label>
                                            <span class="mr-4 inline-block">:</span>
                                            <div x-text="FactureDueDate"></div>
                                        </div>
                                    </div>
                                    <div class="pr-5">
                                        <div class="w-32 h-32 mb-1 overflow-hidden">
                                            <img id="image2" class="object-cover w-20 h-20" />
                                        </div>
                                    </div>
                                </div>

                                <div class="flex justify-between mb-10">
                                    <div class="w-1/2">
                                        <label class="text-gray-800 block mb-2 font-bold text-xs uppercase tracking-wide">Bill/Ship To:</label>
                                        <div>
                                            <div x-text="billing.name"></div>
                                            <div x-text="billing.address"></div>
                                            <div x-text="billing.extra"></div>
                                        </div>
                                    </div>
                                    <div class="w-1/2">
                                        <label class="text-gray-800 block mb-2 font-bold text-xs uppercase tracking-wide">From:</label>
                                        <div>
                                            <div x-text="from.name"></div>
                                            <div x-text="from.address"></div>
                                            <div x-text="from.extra"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex flex-wrap -mx-1 border-b py-2 items-start">
                                    <div class="flex-1 px-1">
                                        <p class="text-gray-600 uppercase tracking-wide text-xs font-bold">Description</p>



                                    </div>

                                    <div class="px-1 w-32 text-right">
                                        <p class="text-gray-600 uppercase tracking-wide text-xs font-bold">Quantité</p>
                                    </div>

                                    <div class="px-1 w-32 text-right">
                                        <p class="leading-none">
                                            <span class="block uppercase tracking-wide text-xs font-bold text-gray-600">Prix ​​Unitaire</span>
                                            <span class="font-medium text-xs text-gray-500">(TVA inclue)</span>
                                        </p>
                                    </div>

                                    <div class="px-1 w-32 text-right">
                                        <p class="leading-none">
                                            <span class="block uppercase tracking-wide text-xs font-bold text-gray-600">Montant</span>
                                            <span class="font-medium text-xs text-gray-500">(TVA inclue)</span>
                                        </p>
                                    </div>
                                </div>
                                <template x-for="Facture in items" :key="Facture.id">
                                    <div class="flex flex-wrap -mx-1 py-2 border-b">
                                        <div class="flex-1 px-1">
                                            <p class="text-gray-800" x-text="Facture.name"></p>
                                        </div>

                                        <div class="px-1 w-32 text-right">
                                            <p class="text-gray-800" x-text="Facture.qty"></p>
                                        </div>

                                        <div class="px-1 w-32 text-right">
                                            <p class="text-gray-800" x-text="numberFormat(Facture.rate)"></p>
                                        </div>

                                        <div class="px-1 w-32 text-right">
                                            <p class="text-gray-800" x-text="numberFormat(Facture.total)"></p>
                                        </div>
                                    </div>
                                </template>

                                <div class="py-2 ml-auto mt-20" style="width: 320px">
                                    <div class="flex justify-between mb-3">
                                        <div class="text-gray-800 text-right flex-1">Total TVA inclue</div>
                                        <div class="text-right w-40">
                                            <div class="text-gray-800 font-medium" x-html="netTotal"></div>
                                        </div>
                                    </div>
                                    <div class="flex justify-between mb-4">
                                        <div class="text-sm text-gray-600 text-right flex-1">TVA(18%) incl. in Total</div>
                                        <div class="text-right w-40">
                                            <div class="text-sm text-gray-600" x-html="totalTVA"></div>
                                        </div>
                                    </div>

                                    <div class="py-2 border-t border-b">
                                        <div class="flex justify-between">
                                            <div class="text-xl text-gray-600 text-right flex-1">Montant Total</div>
                                            <div class="text-right w-40">
                                                <div class="text-xl text-gray-800 font-bold" x-html="netTotal" name="ToTotal"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Print Template -->

                            <!-- Modal -->
                            <div style=" background-color: rgba(0, 0, 0, 0.8)" class="fixed z-40 top-0 right-0 left-0 bottom-0 h-full w-full" x-show.transition.opacity="openModal">
                                <div class="p-4 max-w-xl mx-auto absolute left-0 right-0 overflow-hidden mt-24">
                                    <div class="shadow absolute right-0 top-0 w-10 h-10 rounded-full bg-white text-gray-500 hover:text-gray-800 inline-flex items-center justify-center cursor-pointer"
                                        x-on:click="openModal = !openModal">
                                        <svg class="fill-current w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path
                                                d="M16.192 6.344L11.949 10.586 7.707 6.344 6.293 7.758 10.535 12 6.293 16.242 7.707 17.656 11.949 13.414 16.192 17.656 17.606 16.242 13.364 12 17.606 7.758z" />
                                        </svg>
                                    </div>

                                    <div class="shadow w-full rounded-lg bg-white overflow-hidden  block p-8">

                                        <h2 class="font-bold text-2xl mb-6 text-gray-800 border-b pb-2">Fill your services</h2>

                                        <div class="mb-4">
                                            <label class="text-gray-800 block mb-1 font-bold text-sm uppercase tracking-wide">Description</label>
                                            <input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="produitnom" type="text" x-model="item.name">
                                            <div id="prod_list" class="flex absolute bg-cyan-500 shadow-lg shadow-cyan-500/50 rounded-lg"></div>
                                    <script >
                                        $(document).ready(function(){
                                            $('#produitnom').keyup(function(){
                                                var query = $(this).val();
                                                if(query != '')
                                                {
                                                    var _token = $('input[name="_token"]').val();
                                                    $.ajax({
                                                    url:"{{ route('autoaprod') }}",
                                                    method:"GET",
                                                    data:{query:query, _token:_token},
                                                    success:function(data){
                                                    $('#prod_list').fadeIn();
                                                            $('#prod_list').html(data);
                                                    }
                                                    });
                                                }
                                            });
                                            $(document).on('click', '#li5', function(){
                                                $('#produitnom').val($(this).text());
                                                $('#prixunit').val($('#li6').text());


                                                $('#prod_list').fadeOut();
                                            });
                                            });
                                        </script>
                                        </div>

                                        <div class="flex">
                                            <div class="mb-4 w-32 mr-2">
                                                <label class="text-gray-800 block mb-1 font-bold text-sm uppercase tracking-wide">Quantité</label>
                                                <input class="text-right mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" x-model="item.qty">
                                            </div>

                                            <div class="mb-4 w-32 mr-2">
                                                <label class="text-gray-800 block mb-1 font-bold text-sm uppercase tracking-wide">Prix ​​Unitaire</label>
                                                <input class="text-right mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="prixunit" type="text" x-model="item.rate">
                                            </div>

                                            <div class="mb-4 w-32">
                                                <label class="text-gray-800 block mb-1 font-bold text-sm uppercase tracking-wide">Montant</label>
                                                <input class="text-right mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" x-model="item.total = item.qty * item.rate">
                                            </div>
                                        </div>



                                        <div class="mt-8 text-right">
                                            <button type="button" class="bg-white hover:bg-gray-100 text-gray-700 font-semibold py-2 px-4 border border-gray-300 rounded shadow-sm mr-2" @click="openModal = !openModal">
                                                Annuler
                                            </button>
                                            <button type="button" class="bg-gray-800 hover:bg-gray-700 text-white font-semibold py-2 px-4 border border-gray-700 rounded shadow-sm" @click="addItem()">
                                                Ajouter un article
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Modal -->

                        </div>

                        <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>


                    </body>

                </div>
            </div>

        </div>
    </div>


 </x-app-layout>
