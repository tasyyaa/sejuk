<!DOCTYPE html>
<html lang="en">
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
            rel="stylesheet"
        />
        <link
            href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet"
        />

        <style>
            nav {
                font-family: "Montserrat", sans-serif;
            }
            body {
                font-family: "Plus Jakarta Sans", sans-serif;
            }
        </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body
        class="h-screen bg-fixed w-full bg-gradient-to-b from-[#D6E4E5] to-[#F9F5F2]"
    >
    <div id="app">

                <!--Navbar-->

        <nav
            class="relative flex flex-row w-full justify-between items-center h-24 mx-auto px-12 font-monserrat"
        >
            <div class="flex flex-row items-center gap-6">
                <a href="#">
                    <img
                        src="images/burger-logo-dark.png"
                        alt="burger-logo"
                        class="w-8"
                    />
                </a>
                <a href="#">
                    <img src="images/logo-dark.png" alt="logo" class="w-24" />
                </a>
            </div>
            <div class="flex flex-row items-center gap-8">
                <div class="relative flex flex-row items-center mr-8">
                    <input
                        type="text"
                        placeholder="Cari Baju"
                        class="bg-white rounded-md px-2 h-11 placeholder:text-sm w-[600px] outline-none"
                    />
                    <button
                        class="flex items-center justify-center bg-[#497174] h-11 rounded-md w-20 px-2 absolute z-50 -right-4"
                    >
                        <img
                            src="images/search-logo.png"
                            alt="search-logo"
                            class="w-1/3"
                        />
                    </button>
                </div>
                <a href="#">
                    <img
                        src="images/cart-logo.png"
                        alt="cart-logo"
                        class="w-10"
                    />
                </a>
                <a href="#">
                    <img
                        src="images/notification-logo.png"
                        alt="notif-logo"
                        class="w-10"
                    />
                </a>
                <a href="#">
                    <img
                        src="images/user-logo-white.png"
                        alt="user-logo"
                        class="w-10"
                    />
                </a>
            </div>
        </nav>


<div class="items-center w-full px-4 py-4 mx-auto my-10  rounded-lg sm:w-4/5">
    <div class="container mx-auto ">
      <div class="flex justify-between w-full  py-2 pb-8">
        <div class="text-3xl font-black text-[#497174]">
          Order Keranjang
        </div>

      </div>
      <div class="mt-auto overflow-x-auto">
      <table class="w-full border-collapse table-auto  bg-white pb-">
        <thead class="">
          <tr class="text-base font-semibold text-left border-t-4 border-b-4">
            <th class="px-4 py-3  "><div class="flex items-center">
                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-checkbox" class="ml-2 text-sm font-semibold text-gray-900 dark:text-gray-300 ">Pilih Semua</label>
            </div></th>
            <th class=" font-semibold border-b-2 ">Toko</th>
            <th class="px-4 py-3 font-semibold border-b-2 ">Harga Satuan</th>
            <th class="px-4 py-3 font-semibold border-b-2 ">Jumlah Barang</th>
            <th class="px-2 font-semibold border-b-2 ">Total Harga</th>
            <th class="px-4 py-3 font-semibold border-b-2 ">
                <button type="submit" class=" text-white btn bg-[#D7306C] hover:bg-[#D7306C]-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Hapus</button></th>
          </tr>
        </thead>
        <tbody class="text-sm font-normal text-gray-700">

            <!--Item 1-->
          <tr class="py-10 border-b border-gray-200 hover:bg-gray-100">
            <td class="flex flex-row items-center px-4 py-4">
                <div class="flex items-center">
                    <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="default-checkbox" class="ml-2 text-sm font-semibold text-gray-900 dark:text-gray-300 "></label>
                <div class="flex w-10 h-10 mr-4">
                    <img alt="profil" src="images/harry.png" />
                </div>
                <div class="flex-1 pl-2 tracking-wide">
                  <div class="font-medium text[#675959] pb-2">Kota Surabaya</div>
                  <div class="text-sm font-extrabold text-[#675959] pr-2 ">
                    Full Set Harry Potter Costume Jubah (Kemeja Adult/Anak-anak)
                  </div>
                  <div class="text-sm text-[#A89E9E] dark:text-gray-200 pt-2">
                    Varian: -Ukuran L -Adult
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
                <input type="number" min="0" name="jumlah_pesan" class="justify-items-center form-control mb-1 shadow appearance-none border rounded w-20 py-2 px-2 text-gray-250 leading-tight focus:outline-none focus:shadow-outline" required="">
            </td>
            <td class="px-1 text-lg font-bold text-[#497174]">
                Rp.150.000
            </td>
            <td class="px-4 py-4">
                <button class="bg-transparent hover:bg-[#D7306C] text-[#D7306C] font-semibold hover:text-white py-2 px-4 border border-red-500 hover:border-transparent flex rounded-full">
                    Hapus
                  </button>
            </td>

            <!--Item 2-->
            <tr class="py-10 border-b border-gray-200 hover:bg-gray-100">
                <td class="flex flex-row items-center px-4 py-4">
                    <div class="flex items-center">
                        <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="default-checkbox" class="ml-2 text-sm font-semibold text-gray-900 dark:text-gray-300 "></label>
                    <div class="flex w-10 h-10 mr-4">
                        <img alt="profil" src="images/keqing.png" />
                    </div>
                    <div class="flex-1 pl-2 tracking-wide">
                      <div class="font-medium text[#675959] pb-2">Kota Surabaya</div>
                      <div class="text-sm font-extrabold text-[#675959] pr-2 ">
                        Kostum Keqing Default Genshin Impact Cosplay
                      </div>
                      <div class="text-sm text-[#A89E9E] dark:text-gray-200 pt-2">
                        Varian: -Ukuran L -Adult
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
                    <input type="number" min="0" name="jumlah_pesan" class="justify-items-center form-control mb-1 shadow appearance-none border rounded w-20 py-2 px-2 text-gray-250 leading-tight focus:outline-none focus:shadow-outline" required="">
                </td>
                <td class="px-1 text-lg font-bold text-[#497174]">
                    Rp.875.600
                </td>
                <td class="px-4 py-4">
                    <button class="bg-transparent hover:bg-[#D7306C] text-[#D7306C] font-semibold hover:text-white py-2 px-4 border border-red-500 hover:border-transparent flex rounded-full">
                        Hapus
                      </button>
                </td>
                </tr>
        </tbody>
      </table>
    </div>




        <a href="#">
        <div class ="w-auto h-32 mx-auto rounded-lg shadow-lg mt-10 border-2 bg-white">
            <div class="text-3xl font-bold text-[#497174] px-8 py-4">
                Address
            </div>

        </div>
        </a>




        <div class="bg-white rounded-lg shadow-lg mt-10 border-2 mb-10">
                    <div class="columns-2 mt-10  mx-auto  bg-white">
                            <div class="text-3xl font-bold text-[#497174] px-8 py-4">
                                Pilih Metode Pengiriman

                            </div>
                            <table class="border-collapse table-fixed hover:table-fixed ">

                                <tr class=" hover:bg-gray-100">

                                    <td class="flex flex-row items-center px-4 py-4 pl-8">
                                        <div class="flex items-center">
                                            <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-[#497174] bg-gray-100 border-gray-300 focus:ring-[#497174] dark:focus:ring-[#497174] dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <div class="flex-1 pl-3 tracking-wide">
                                                <label for="default-radio-1" class="ml-4 text-m font-bold text-[#675959] pr-20">
                                                    JNE</label>
                                                <div for="default-radio-1" class="ml-4 text-sm font-medium text-[#675959] pr-20">
                                                    Estimasi: 2-3 hari</div>
                                            </div>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="text-lg font-bold text-[#675959] pr-2 ">
                                            Rp.25.000
                                        </div>
                                    </td>

                                </tr>

                                <tr class=" hover:bg-gray-100">
                                    <td class="flex flex-row items-center px-4 py-4 pl-8">
                                        <div class="flex items-center">
                                            <input id="radio" type="radio" value="" name="default-radio" class="w-4 h-4 text-[#497174] bg-gray-100 border-gray-300 focus:ring-[#497174] dark:focus:ring-[#497174] dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <div class="flex-1 pl-3 tracking-wide">
                                                <label for="default-radio-1" class="ml-4 text-m font-bold text-[#675959] pr-20">
                                                    JNT</label>
                                                <div for="default-radio-1" class="ml-4 text-sm font-medium text-[#675959] pr-20">
                                                    Estimasi: 2-3 hari</div>
                                            </div>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="text-lg font-bold text-[#675959] pr-2 ">
                                            Rp.27.000
                                        </div>
                                    </td>

                                </tr>

                                <tr class=" hover:bg-gray-100">
                                    <td class="flex flex-row items-center px-4 py-4 pl-8">
                                        <div class="flex items-center">
                                            <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-[#497174] bg-gray-100 border-gray-300 focus:ring-[#497174] dark:focus:ring-[#497174] dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <div class="flex-1 pl-3 tracking-wide">
                                                <label for="default-radio-1" class="ml-4 text-m font-bold text-[#675959] pr-20">
                                                    SiCepat</label>
                                                <div for="default-radio-1" class="ml-4 text-sm font-medium text-[#675959] pr-20">
                                                    Estimasi: 1-2 hari</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="text-lg font-bold text-[#675959] pr-2 ">
                                            Rp.20.000
                                        </div>
                                    </td>
                                </tr>

                                <tr class=" hover:bg-gray-100">
                                    <td class="flex flex-row items-center px-4 py-4 pl-8">
                                        <div class="flex items-center">
                                            <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-[#497174] bg-gray-100 border-gray-300 focus:ring-[#497174] dark:focus:ring-[#497174] dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <div class="flex-1 pl-3 tracking-wide">
                                                <label for="default-radio-1" class="ml-4 text-m font-bold text-[#675959] pr-20">
                                                    Go-Send</label>
                                                <div for="default-radio-1" class="ml-4 text-sm font-medium text-[#675959] pr-20">
                                                    Estimasi: On the same day</div>
                                            </div>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="text-lg font-bold text-[#675959] pr-2 ">
                                            Rp.15.000
                                        </div>
                                    </td>

                                </tr>

                            </table>


                            <div class=" flex justify-center items-center pt-5 pl-10 pb-32 ">


                                <div class=" rounded overflow-hidden shadow-lg  bg-white">
                                <div class="px-6 py-4">
                                    <div class="font-bold text-xl mb-2">Ringkasan Belanja</div>


                                    <table class= "border-separate border-spacing-2 border-slate-400 font-semibold text-md">
                                        <tbody>
                                            <tr>
                                                <td>Total Harga</td>
                                                <td></td>
                                                <td>Rp.1.250.600 <!-- <-Harga Dummy;Harga sesuai database--></td>
                                            </tr>
                                            <tr>
                                                <td>Diskon</td>
                                                <td></td>
                                                <td>10% <!-- <-Harga Dummy;Harga sesuai database--></td>
                                            </tr>
                                            <tr>
                                                <td><hr class="my-auto border-t-2"/></td>
                                            </tr>

                                            <tr class="font-bold">
                                                <td >Total Pembayaran</td>
                                                <td></td>
                                                <td>Rp.-<!-- <-Ukuran Dummy;Ukuran sesuai database--></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <div class="px-6 pt-4 pb-2">
                                    <div class = "flex justify-center">

                                    <button type="submit" class=" flex justify-center text-white btn bg-[#497174] text-white font-bold py-2 px-20 rounded focus:outline-none focus:shadow-outline">
                                        Checkout</button>
                                    </div>
                                        <p class="text-center text-gray-500 text-xs pt-4">
                                        &copy;Sejuk2023.
                                    </p>

                                </div>
                                </div>
                            </div>






                    </div>

                    <div class="columns-2 mx-auto bg-white">

                                    <div class="rounded overflow-hidden">

                                            <div class="text-3xl font-bold text-[#497174] px-8 py-4 mb-4">
                                                Pilih Metode Pembayaran

                                            </div>

                                            <div class="mb-10 ml-8">
                                            <table class="border-collapse table-fixed hover:table-fixed">
                                                <caption class="caption-top text-left  text-lg font-bold text-[#675959] ">
                                                    Pembayaran lain
                                                </caption>
                                                <tr class=" hover:bg-gray-100 border-b border-gray-200">
                                                    <td class="flex flex-row items-center px-4 py-4">
                                                        <div class="flex items-center">
                                                            <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-[#497174] bg-gray-100 border-gray-300 focus:ring-[#497174] dark:focus:ring-[#497174] dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                            <div class="flex w-10 h-10 ml-4">
                                                                <img alt="profil" src="images/gopay.png" />
                                                            </div>
                                                            <div class="flex-1 tracking-wide">
                                                                <label for="default-radio-1" class="ml-4 text-m font-bold text-[#675959] pr-20">
                                                                    Rp100.000</label>
                                                                <div for="default-radio-1" class="ml-4 text-sm font-medium text-[#675959] pr-20">
                                                                    GoPay Coins 200.000</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr class=" hover:bg-gray-100 border-b border-gray-200">
                                                    <td class="flex flex-row items-center px-4 py-4">
                                                        <div class="flex items-center">
                                                            <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-[#497174] bg-gray-100 border-gray-300 focus:ring-[#497174] dark:focus:ring-[#497174] dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                            <div class="flex w-10 h-10 ml-4 items-center">
                                                                <img alt="profil" src="images/ovo1..jpeg" />
                                                            </div>
                                                            <div class="flex-1 pl-1 tracking-wide">
                                                                <label for="default-radio-1" class="ml-4 text-m font-bold text-[#675959] pr-20">
                                                                    Rp150.000</label>
                                                                <div for="default-radio-1" class="ml-4 text-sm font-medium text-[#675959] pr-20">
                                                                    OVO Points 0</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>




                                        <div class="mb-10 ml-8">
                                            <table class="border-collapse table-fixed hover:table-fixed">
                                                <caption class="caption-top text-left text-lg font-bold text-[#675959] ">
                                                    Tunai di Gerai
                                                </caption>
                                                <tr class=" hover:bg-gray-100 border-b border-gray-200">
                                                    <td class="flex flex-row items-center px-4 py-4">
                                                        <div class="flex items-center">
                                                            <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-[#497174] bg-gray-100 border-gray-300 focus:ring-[#497174] dark:focus:ring-[#497174] dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                            <div class="flex w-10 h-10 ml-4">
                                                                <img alt="profil" src="images/alfamart.svg" />
                                                            </div>
                                                            <div class="flex-1 tracking-wide">
                                                                <label for="default-radio-1" class="ml-4 text-m font-bold text-[#675959] pr-20">
                                                                    Alfamart / Alfamidi / Lawson / Dan+Dan</label>

                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr class=" hover:bg-gray-100 border-b border-gray-200">
                                                    <td class="flex flex-row items-center px-4 py-4">
                                                        <div class="flex items-center">
                                                            <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-[#497174] bg-gray-100 border-gray-300 focus:ring-[#497174] dark:focus:ring-[#497174] dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                            <div class="flex w-10 h-10 ml-4 items-center">
                                                                <img alt="profil" src="images/indomaret.png" />
                                                            </div>
                                                            <div class="flex-1 pl-3 tracking-wide">
                                                                <label for="default-radio-1" class="ml-4 text-m font-bold text-[#675959] pr-20">
                                                                Indomaret / Ceriamart</label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                            </table>
                                        </div>



                                        <div class="mb-20 ml-8">
                                            <table class="border-collapse table-fixed hover:table-fixed">
                                                <caption class="caption-top text-left text-lg font-bold text-[#675959] ">
                                                    Kartu Kredit
                                                </caption>
                                                <tr class=" hover:bg-gray-100 border-b border-gray-200">
                                                    <td class="flex flex-row items-center px-4 py-4">
                                                        <div class="flex items-center">
                                                            <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-[#497174] bg-gray-100 border-gray-300 focus:ring-[#497174] dark:focus:ring-[#497174] dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                            <div class="flex w-10 h-10 ml-4">
                                                                <img alt="profil" src="images/kredit.png" />
                                                            </div>
                                                            <div class="flex-1 tracking-wide">
                                                                <label for="default-radio-1" class="ml-4 text-m font-bold text-[#675959] pr-20">
                                                                    Kartu Kredit / Debit</label>

                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                            </table>
                                        </div>

                                </div>


                                <div class="text-3xl font-bold text-[#497174] px-8 py-4 mb-12 mt-24">

                                </div>

                                <div class="mb-10 ml-8">
                                <table class="border-collapse table-fixed hover:table-fixed">
                                    <caption class="caption-top text-left  text-lg font-bold text-[#675959] ">
                                        Transfer Virtual Account / Via Bank
                                    </caption>
                                    <tr class=" hover:bg-gray-100 border-b border-gray-200">
                                        <td class="flex flex-row items-center px-4 py-4">
                                            <div class="flex items-center">
                                                <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-[#497174] bg-gray-100 border-gray-300 focus:ring-[#497174] dark:focus:ring-[#497174] dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <div class="flex w-10 h-5 ml-4">
                                                    <img alt="profil" src="images/mandiri.png" />
                                                </div>
                                                <div class="flex-1 tracking-wide">
                                                    <label for="default-radio-1" class="ml-4 text-m font-bold text-[#675959] pr-20">
                                                        Bank Mandiri</label>
                                                    <div for="default-radio-1" class="ml-4 text-sm font-medium text-[#675959] pr-20">
                                                        </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr class=" hover:bg-gray-100 border-b border-gray-200">
                                        <td class="flex flex-row items-center px-4 py-4">
                                            <div class="flex items-center">
                                                <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-[#497174] bg-gray-100 border-gray-300 focus:ring-[#497174] dark:focus:ring-[#497174] dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <div class="flex w-10 h-10 ml-4 items-center">
                                                    <img alt="profil" src="images/bca.png" />
                                                </div>
                                                <div class="flex-1 pl-1 tracking-wide">
                                                    <label for="default-radio-1" class="ml-4 text-m font-bold text-[#675959] pr-20">
                                                        Bank BCA</label>
                                                    <div for="default-radio-1" class="ml-4 text-sm font-medium text-[#675959] pr-20">
                                                        </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr class=" hover:bg-gray-100 border-b border-gray-200">
                                        <td class="flex flex-row items-center px-4 py-4">
                                            <div class="flex items-center">
                                                <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-[#497174] bg-gray-100 border-gray-300 focus:ring-[#497174] dark:focus:ring-[#497174] dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <div class="flex w-10 h-10 ml-4 items-center">
                                                    <img alt="profil" src="images/bni.png" />
                                                </div>
                                                <div class="flex-1 pl-1 tracking-wide">
                                                    <label for="default-radio-1" class="ml-4 text-m font-bold text-[#675959] pr-20">
                                                        Bank BNI</label>
                                                    <div for="default-radio-1" class="ml-4 text-sm font-medium text-[#675959] pr-20">
                                                        </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr class=" hover:bg-gray-100 border-b border-gray-200">
                                        <td class="flex flex-row items-center px-4 py-4">
                                            <div class="flex items-center">
                                                <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-[#497174] bg-gray-100 border-gray-300 focus:ring-[#497174] dark:focus:ring-[#497174] dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <div class="flex w-10 h-10 ml-4 items-center">
                                                    <img alt="profil" src="images/bri.svg" />
                                                </div>
                                                <div class="flex-1 pl-1 tracking-wide">
                                                    <label for="default-radio-1" class="ml-4 text-m font-bold text-[#675959] pr-20">
                                                        Bank BRI</label>
                                                    <div for="default-radio-1" class="ml-4 text-sm font-medium text-[#675959] pr-20">
                                                        </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr class=" hover:bg-gray-100 border-b border-gray-200">
                                        <td class="flex flex-row items-center px-4 py-4">
                                            <div class="flex items-center">
                                                <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-[#497174] bg-gray-100 border-gray-300 focus:ring-[#497174] dark:focus:ring-[#497174] dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <div class="flex w-10 h-10 ml-4 items-center">
                                                    <img alt="profil" src="images/bsi.jpg" />
                                                </div>
                                                <div class="flex-1 pl-1 tracking-wide">
                                                    <label for="default-radio-1" class="ml-4 text-m font-bold text-[#675959] pr-20">
                                                        Bank Syariah Indonesia (BSI)</label>
                                                    <div for="default-radio-1" class="ml-4 text-sm font-medium text-[#675959] pr-20">
                                                        </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>


                                </table>
                            </div>















                    </div>

        </div>
</body>
</html>
