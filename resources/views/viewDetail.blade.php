
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


        <!--Detail Items-->
        <main class="py-4">
            <div class="container mx-auto">
                <div class="row">
                        <div class="card bg-[#F9F5F2]">
                            <div class="row">
                                <div class="gap-12 columns-2">

                                    <img class= "w-full aspect" src="images/vintage.png">

                                    <div class="h-56 grid pt-24 content-evenly ...">

                                        <h1 class="text-5xl whitespace-nowrap text-[#497174] font-bold">
                                        Vintage Linen Shirt<!-- <-Nama Baju Dummy;Nama Baju sesuai dari database -->
                                        </h1>

                                    </div>

                                    <h2 class=" text-2xl pb-6 font-bold text-[#B7B7B7]">
                                        Women Collection
                                    </h2>

                                            <table class= "border-separate border-spacing-2 border-slate-400 font-bold text-xl">
                                                <tbody>
                                                    <tr>
                                                        <td>Harga</td>
                                                        <td>:</td>
                                                        <td>Rp. 200.000 <!-- <-Harga Dummy;Harga sesuai database--></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Stok</td>
                                                        <td>:</td>
                                                        <td>10 <!-- <-Harga Dummy;Harga sesuai database--></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Keterangan</td>
                                                        <td>:</td>
                                                        <td>Size-M,L,XL,XXL<!-- <-Ukuran Dummy;Ukuran sesuai database--></td>
                                                    </tr>

                                                    <tr>
                                                        <td>Jumlah Pesanan</td>
                                                        <td>:</td>



                                                    </tr>
                                                </tbody>
                                            </table>

                                            <form method="" action="" >

                                                <input type="number" min="0" name="jumlah_pesan" class="justify-items-center form-control mb-5 shadow appearance-none border rounded w-64 py-2 px-2 text-gray-250 leading-tight focus:outline-none focus:shadow-outline" required="">

                                                <div class="flex items-center justify-between">
                                                    <button type="submit" class=" text-white btn bg-[#497174] hover:bg-[#497174]-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"><i class="fa fa-shopping-cart"></i>
                                                     Add To Cart</button>
                                                </div>
                                            </form>

                                </div>
                            </div>
                        </div>

                </div>
            </div>
        </main>
    </div>

    </body>
</html>