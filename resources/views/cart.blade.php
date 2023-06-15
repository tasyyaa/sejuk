@extends('layout.navbarcustsupi')
@section('title', 'Shopping Cart')
@section('content')

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="https://cdn.tailwindcss.com"></script>

        <!-- Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
            rel="stylesheet" />
        <link
            href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet" />

        <style>
            body {
                font-family: "Plus Jakarta Sans", sans-serif;
            }
        </style>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">


        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
            integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body class="h-screen bg-fixed w-full bg-gradient-to-b from-[#D6E4E5] to-[#F9F5F2]">
        <div id="app">
            <!--Navbar-->


            <div class="items-center w-[1050px] px-[20px] py-4 mx-auto my-10 bg-white rounded-lg shadow-md sm:w-4/5">
                <div class="container mx-auto">
                    <div class="flex justify-between w-full px-4 py-2">
                        <div class="text-2xl font-bold text-[#497174]">
                            Shopping Cart
                        </div>

                    </div>
                    <div class="mt-6 overflow-x-auto">
                        <table class="w-full  border-collapse table-auto">
                            <thead class="">
                                <tr class="text-base font-semibold text-left">
                                    <th class="px-4 py-3 border-b-2 ">
                                        <div class="flex items-center">
                                            <input id="default-checkbox" type="checkbox" value=""
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="default-checkbox"
                                                class="ml-2 text-sm font-semibold text-gray-900 dark:text-gray-300 ">Choose
                                                all</label>
                                        </div>
                                    </th>
                                    <th class=" font-semibold border-b-2 ">Store</th>
                                    <th class="px-4 py-3 font-semibold border-b-2 ">Price</th>
                                    <th class="px-4 py-3 font-semibold border-b-2 ">Total</th>
                                    <th class="px-2 font-semibold border-b-2 ">Total Price</th>
                                    <th class="px-4 py-3 font-semibold border-b-2 ">
                                        <button type="submit"
                                            class=" text-white btn bg-[#D7306C] hover:bg-[#D7306C]-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                            Delete</button>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="text-sm font-normal text-gray-700">

                                <!--Item 1-->
                                <tr class="py-10 border-b border-gray-200 hover:bg-gray-100">
                                    <td class="flex flex-row items-center px-4 py-4">
                                        <div class="flex items-center">
                                            <input id="default-checkbox" type="checkbox" value=""
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="default-checkbox"
                                                class="ml-2 text-sm font-semibold text-gray-900 dark:text-gray-300 "></label>
                                            <div class="flex w-10 h-10 mr-4">
                                                <img alt="profil" src="images/harry.png" />
                                            </div>
                                            <div class="flex-1 pl-2 tracking-wide">
                                                <div class="font-medium text[#675959] pb-2">Kota Surabaya</div>
                                                <div class="text-sm font-extrabold text-[#675959] pr-2 ">
                                                    Full Set Harry Potter Costume Jubah (Kemeja Adult/Anak-anak)
                                                </div>
                                                <div class="text-sm text-[#A89E9E] dark:text-gray-200 pt-2">
                                                    Varian: -Size L -Adult
                                                </div>
                                            </div>
                                    </td>
                                    <td class="font-bold">
                                        danzino
                                    </td>
                                    </td>
                                    <td class="px-8 font-semibold">
                                        Rp.150.000
                                    </td>
                                    <td class="px-2 py-4">
                                        <input type="number" min="0" name="jumlah_pesan"
                                            class="justify-items-center form-control mb-1 shadow appearance-none border rounded w-20 py-2 px-2 text-gray-250 leading-tight focus:outline-none focus:shadow-outline"
                                            required="">
                                    </td>
                                    <td class="px-1 text-lg font-bold text-[#497174]">
                                        Rp.150.000
                                    </td>
                                    <td class="px-4 py-4">
                                        <button
                                            class="bg-transparent hover:bg-[#D7306C] text-[#D7306C] font-semibold hover:text-white py-2 px-4 border border-red-500 hover:border-transparent flex rounded-full">
                                            Delete
                                        </button>
                                    </td>

                                    <!--Item 2-->
                                <tr class="py-10 border-b border-gray-200 hover:bg-gray-100">
                                    <td class="flex flex-row items-center px-4 py-4">
                                        <div class="flex items-center">
                                            <input id="default-checkbox" type="checkbox" value=""
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="default-checkbox"
                                                class="ml-2 text-sm font-semibold text-gray-900 dark:text-gray-300 "></label>
                                            <div class="flex w-10 h-10 mr-4">
                                                <img alt="profil" src="images/keqing.png" />
                                            </div>
                                            <div class="flex-1 pl-2 tracking-wide">
                                                <div class="font-medium text[#675959] pb-2">Kota Surabaya</div>
                                                <div class="text-sm font-extrabold text-[#675959] pr-2 ">
                                                    Kostum Keqing Default Genshin Impact Cosplay
                                                </div>
                                                <div class="text-sm text-[#A89E9E] dark:text-gray-200 pt-2">
                                                    Varian: -Size L -Adult
                                                </div>
                                            </div>
                                    </td>
                                    <td class="font-bold">
                                        iuroidea
                                    </td>
                                    <td class="px-8 font-semibold">
                                        Rp.875.600
                                    </td>
                                    <td class="px-2 py-4">
                                        <input type="number" min="0" name="jumlah_pesan"
                                            class="justify-items-center form-control mb-1 shadow appearance-none border rounded w-20 py-2 px-2 text-gray-250 leading-tight focus:outline-none focus:shadow-outline"
                                            required="">
                                    </td>
                                    <td class="px-1 text-lg font-bold text-[#497174]">
                                        Rp.875.600
                                    </td>
                                    <td class="px-4 py-4">
                                        <button
                                            class="bg-transparent hover:bg-[#D7306C] text-[#D7306C] font-semibold hover:text-white py-2 px-4 border border-red-500 hover:border-transparent flex rounded-full">
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class=" flex justify-center items-center p-10 pt-10 ">


                        <div class=" rounded overflow-hidden shadow-lg">
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2">Order Summary</div>


                                <table class="border-separate border-spacing-2 border-slate-400 font-semibold text-md">
                                    <tbody>
                                        <tr>
                                            <td>Total Price</td>
                                            <td></td>
                                            <td>Rp.1.250.600
                                                <!-- <-Harga Dummy;Harga sesuai database-->
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Discount</td>
                                            <td></td>
                                            <td>10%
                                                <!-- <-Harga Dummy;Harga sesuai database-->
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                        </tr>
                                        <tr class="font-bold">
                                            <td>Total Payment</td>
                                            <td></td>
                                            <td>Rp.-
                                                <!-- <-Ukuran Dummy;Ukuran sesuai database-->
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div class="px-6 pt-4 pb-2">
                                <button type="submit"
                                    class=" flex justify-center text-white btn bg-[#497174] text-white font-bold py-2 px-20 rounded focus:outline-none focus:shadow-outline">
                                    Checkout</button>
                                <p class="text-center text-gray-500 text-xs pt-4">
                                    &copy;Sejuk2023.
                                </p>
                            </div>
                        </div>
                    </div>
                @endsection


</body>

</html>
