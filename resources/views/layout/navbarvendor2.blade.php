<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
        integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap');

        body {
            font-family: 'Montserrat', sans-serif;
            background: linear-gradient(rgba(73, 113, 116, 1), rgba(239, 245, 245, 1));
            background-attachment: fixed;
        }
    </style>
    {{-- start --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    {{-- tambah ini buat tailwind (mulai dari start) --}}
</head>

<body>
    <nav class="">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <div class="leftitem" style="display: flex; justify-content: center;">
                <div id="main" style="margin:0px 20px 0px 0px">
                    <span style="font-size:20px;cursor:pointer" data-drawer-target="drawer-navigation"
                        data-drawer-show="drawer-navigation" aria-controls="drawer-navigation"> &#9776;
                    </span>
                </div>
                <div id="drawer-navigation"
                    class="fixed top-0 left-0 z-40 w-screen h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white dark:bg-gray-800"
                    tabindex="-1" aria-labelledby="drawer-navigation-label">
                    <div class="flex flex-row">
                        <div class="flex flex-col bg-[#FFFFFF] w-[650px] relative">
                            <div class="flex flex-row">
                                <div class="flex flex-col ml-[25px]">
                                    <img src="{{ asset('images/sejukcust2.svg') }}" width="60" height="80"
                                        class="d-inline-block align-text-">
                                </div>
                                <div class="flex flex-col">
                                    <button type="button" data-drawer-hide="drawer-navigation"
                                        aria-controls="drawer-navigation"
                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
                                        <svg aria-hidden="true" class="w-10 h-10" fill="#497174" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="sr-only">Close menu</span>
                                    </button>
                                </div>
                            </div>
                            <div class="flex flex-row ml-[45px] mt-[20px]">
                                <div class="relative w-[500px] ml-[25px]">
                                    <input type="search" id="search-dropdown"
                                        class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-[50px] bo border border-gray-300 dark:bg-gray-700 dark:border-l-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white focus:ring-0 focus:border-transparent"
                                        placeholder="Search by product, category,  size, etc." required>
                                    <button type="submit"
                                        class="bg-gray-50 absolute top-0 right-0 p-2.5 text-sm font-medium text-white  rounded-r-[50px] border focus:ring-0 focus:border-transparent">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="#000000"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                        </svg>
                                        <span class="sr-only">Search</span>
                                    </button>
                                </div>
                            </div>
                            <div class="flex flex-row ml-[80px] mt-[30px]">
                                <a href="/homepageVendor"
                                    class="text-[#565656] font-semibold w-[196px] h-[51px] text-[18px]">Home</a>
                            </div>
                            <div class="flex flex-row ml-[80px] mt-[6px]">
                                <a href="/vendorCatalog"
                                    class="text-[#565656] font-semibold w-[196px] h-[51px] text-[18px]">Your
                                    Catalogue</a>
                            </div>
                            <div class="flex flex-row ml-[80px] mt-[6px]">
                                <a href="/orderList"
                                    class="text-[#565656] font-semibold w-[196px] h-[51px] text-[18px]">My Order
                                    List</a>
                            </div>
                            <div class="flex flex-row ml-[80px] mt-[6px]">
                                <a href="/faq"
                                    class="text-[#565656] font-semibold w-[196px] h-[51px] text-[18px]">FAQ</a>
                            </div>
                            <div class="flex justify-center items-center mt-[45px]">
                                <a href="/signinvendor"
                                    class="bg-[#497174] text-white w-[196px] h-[51px] font-bold rounded-md flex justify-center items-center ">SIGN
                                    IN</a>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <img src="{{ asset('storage/buatapp/sidebar.jpg') }}" class="w-[650px] h-screen">
                        </div>
                    </div>
                </div>

                {{-- navbar --}}
                <a class="navbar-brand" href="homepageVendor">
                    <img src="{{ asset('storage/buatapp/sejuk1.png') }}" width="24" height="30"
                        class="d-inline-block align-text-">
                </a>
            </div>
            <div class="">
                <div class="relative">
                    <div
                        class="flex justify-center  w-[104px] absolute right-0 items-center h-[40px] bg-[#497174] rounded-md">
                        <i class="fas fa-search text-xl font-medium text-white"></i>
                    </div>
                    <input type="text"
                        class="w-[508px] h-[40px] pl-3 rounded-lg  focus:ring-0 focus:border-transparent"
                        placeholder="Search">
                </div>
            </div>
            <div class="sideitem" style="display: flex; justify-content: center;margin-left:10px;">
                <a class="navbar-brand" href="/orderList">
                    <img src="{{ asset('images/cart.svg') }}" width="30" height="24">
                </a>
                <a class="navbar-brand" href="/notifications" style="margin:0px 0px 0px 20px;">
                    <img src="{{ asset('images/notifications.svg') }}" width="30" height="24">
                </a>
                <a class="navbar-brand" href="/vendorAccount" style="margin:0px 0px 0px 20px;">
                    <img src="{{ asset('storage/buatapp/3.png') }}" width="30" height="24">
                </a>
            </div>
        </div>
    </nav>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    @yield('content')
</body>

</html>
