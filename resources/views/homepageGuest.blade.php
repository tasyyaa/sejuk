<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
        integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous">
    </script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/app.js') }}" defer></script>
    <style>
        nav {
            font-family: "Montserrat", sans-serif;
        }

        body {
            font-family: "Plus Jakarta Sans", sans-serif;
        }
    </style>

    <title>Home Page | Guest</title>
</head>

<body class="h-screen bg-fixed w-full bg-gradient-to-b from-[#D6E4E5] to-[#F9F5F2]">
    <nav class="relative flex flex-row w-full justify-between items-center h-24 mx-auto px-12 font-monserrat">
        <div class="leftitem" style="display: flex; justify-content: center;">
            <div id="main" style="margin:6px 2px 0px 0px">
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
                            <a href="/homepagecustomer"
                                class="text-[#565656] font-semibold w-[196px] h-[51px] text-[18px]">Home</a>
                        </div>
                        <div class="flex flex-row ml-[80px] mt-[6px]">
                            <a href="/mypurchases"
                                class="text-[#565656] font-semibold w-[196px] h-[51px] text-[18px]">My
                                Purchases</a>
                        </div>
                        <div class="flex flex-row ml-[80px] mt-[6px]">
                            <a href="/faq"
                                class="text-[#565656] font-semibold w-[196px] h-[51px] text-[18px]">FAQ</a>
                        </div>
                        <div class="flex flex-row justify-center mt-[45px]">
                            <a href="/signincustomer"
                                class="bg-[#497174] text-white w-[196px] h-[51px] font-bold rounded-md flex justify-center items-center ">SIGN
                                IN</a>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <img src="{{ asset('images/sidebar.jpg') }}" class="w-[650px] h-screen">
                    </div>
                </div>
            </div>
            <a class="navbar-brand" href="/homepagecustomer">
                <img src="{{ asset('images/sejukcust2.svg') }}" width="40" height="45"
                    class="d-inline-block align-text-">
            </a>
        </div>
        <div class="flex flex-row items-center gap-8">
                <div class="relative">
                    <div
                        class="flex justify-center  w-[104px] absolute right-0 items-center h-[40px] bg-[#497174] rounded-md">
                        <i class="fas fa-search text-xl font-medium text-white"></i>
                    </div>
                    <input type="text"
                        class="w-[508px] h-[40px] pl-3 rounded-lg  focus:ring-0 focus:border-transparent"
                        placeholder="Search">
                </div>

            <a href="#" class="text-xl font-medium text-black">Sign in</a>
            <a href="#" class="text-xl font-medium text-white bg-[#3C9379] rounded-lg py-3 px-8">Sign up</a>
        </div>
    </nav>

    <!-- Hero -->
    <section class="flex flex-col justify-center items-center">
        <div class="flex flex-row justify-between mx-auto items-center">
            <div class="flex flex-col items-center justify-center gap-16 w-1/3 pl-72 pb-32">
                <h1 class="text-5xl text-center whitespace-nowrap">
                    Wear new clothes every <br />
                    week without regret
                </h1>
                <a href="#"
                    class="bg-[#497174] px-16 py-4 text-2xl font-bold uppercase text-white whitespace-nowrap">Join Now
                    !</a>
            </div>
            <div>
                <img src="images/hero.png" alt="hero-logo"
                    class="w-[625px] 2xl:w-[825px] h-[800px] 2xl:h-[1000px]" />
            </div>
        </div>
        <div
            class="flex flex-row justify-between items-center w-10/12 mx-auto bg-[#D6E4E5] rounded-t-[50px] px-32 py-4 -translate-y-[9.2rem]">
            <div class="flex flex-row items-center justify-center gap-12">
                <img src="images/truck-logo.png" alt="truck" class="w-[135px] h-[130px]" />
                <h2 class="text-3xl text-[#497174] font-bold uppercase tracking-wide">
                    Free Delivery
                </h2>
            </div>
            <div class="w-1 h-28 bg-[#497174]"></div>
            <div class="flex flex-row items-center justify-center gap-12">
                <img src="images/washing-logo.png" alt="washing" class="w-[128px] h-[129px]" />
                <h2 class="text-3xl text-[#497174] font-bold uppercase tracking-wide">
                    Free Dry Cleaning
                </h2>
            </div>
        </div>
    </section>

    <!-- Catalog -->
    <section class="flex flex-col justify-center items-center w-11/12 mx-auto">
        <!-- How it works -->
        <div class="flex flex-col justify-center items-center gap-20">
            <h2 class="text-4xl text-[#497174] font-bold uppercase tracking-wider">
                How It Works
            </h2>
            <div class="flex flex-row justify-between items-center gap-10">
                <div class="flex flex-col items-center gap-6">
                    <img src="images/hit-1.png" alt="hit" class="" />
                    <p class="text-xl font-medium">Rent / Buy</p>
                </div>
                <div class="flex flex-col items-center gap-6">
                    <img src="images/hit-2.png" alt="hit" class="" />
                    <p class="text-xl font-medium">Wear</p>
                </div>
                <div class="flex flex-col items-center gap-6">
                    <img src="images/hit-3.png" alt="hit" class="" />
                    <p class="text-xl font-medium">Repeat</p>
                </div>
            </div>
        </div>

        <!-- Clothes -->
        <div class="flex flex-col justify-center gap-12 mt-20">
            <h2 class="text-4xl text-left text-[#497174] font-bold uppercase tracking-wider">
                Clothes
            </h2>
            <div class="flex flex-row justify-between items-center gap-10 w-11/12 mx-auto">
                <div class="flex flex-col items-center">
                    <img src="images/clothes-1.png" alt="clothes" class="bg-[#DCE2E7]" />
                    <div class="flex flex-col justify-between items-start bg-white px-2 pb-8 pt-2 w-full h-[198px]">
                        <div>
                            <h3 class="text-base font-semibold">
                                Cotton T-Shirt
                            </h3>
                            <p class="text-[10px] text-[#B7B7B7] font-semibold">
                                Woman Collection
                            </p>
                        </div>
                        <div>
                            <p class="text-sm font-bold">Rp 250.000</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-center">
                    <img src="images/clothes-2.png" alt="clothes" class="bg-[#DCE2E7]" />
                    <div class="flex flex-col justify-between items-start bg-white px-2 pb-8 pt-2 w-full h-[198px]">
                        <div>
                            <h3 class="text-base font-semibold">
                                Cotton T-Shirt
                            </h3>
                            <p class="text-[10px] text-[#B7B7B7] font-semibold">
                                Woman Collection
                            </p>
                        </div>
                        <div>
                            <p class="text-sm font-bold">Rp 250.000</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-center">
                    <img src="images/clothes-3.png" alt="clothes" class="bg-[#DCE2E7]" />
                    <div class="flex flex-col justify-between items-start bg-white px-2 pb-8 pt-2 w-full h-[198px]">
                        <div>
                            <h3 class="text-base font-semibold">
                                Cotton T-Shirt
                            </h3>
                            <p class="text-[10px] text-[#B7B7B7] font-semibold">
                                Woman Collection
                            </p>
                        </div>
                        <div>
                            <p class="text-sm font-bold">Rp 250.000</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-center">
                    <img src="images/clothes-4.png" alt="clothes" class="bg-[#DCE2E7]" />
                    <div class="flex flex-col justify-between items-start bg-white px-2 pb-8 pt-2 w-full h-[198px]">
                        <div>
                            <h3 class="text-base font-semibold">
                                Cotton T-Shirt
                            </h3>
                            <p class="text-[10px] text-[#B7B7B7] font-semibold">
                                Woman Collection
                            </p>
                        </div>
                        <div>
                            <p class="text-sm font-bold">Rp 250.000</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-center">
                    <img src="images/clothes-5.png" alt="clothes" class="bg-[#DCE2E7]" />
                    <div class="flex flex-col justify-between items-start bg-white px-2 pb-8 pt-2 w-full h-[198px]">
                        <div>
                            <h3 class="text-base font-semibold">
                                Cotton T-Shirt
                            </h3>
                            <p class="text-[10px] text-[#B7B7B7] font-semibold">
                                Woman Collection
                            </p>
                        </div>
                        <div>
                            <p class="text-sm font-bold">Rp 250.000</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Costumes -->
        <div class="flex flex-col justify-center gap-12 mt-20">
            <h2 class="text-4xl text-left text-[#497174] font-bold uppercase tracking-wider">
                Costumes
            </h2>
            <div class="flex flex-row justify-between items-center gap-10 w-11/12 mx-auto">
                <div class="flex flex-col items-center">
                    <img src="images/clothes-1.png" alt="clothes" class="bg-[#DCE2E7]" />
                    <div class="flex flex-col justify-between items-start bg-white px-2 pb-8 pt-2 w-full h-[198px]">
                        <div>
                            <h3 class="text-base font-semibold">
                                Cotton T-Shirt
                            </h3>
                            <p class="text-[10px] text-[#B7B7B7] font-semibold">
                                Woman Collection
                            </p>
                        </div>
                        <div>
                            <p class="text-sm font-bold">Rp 250.000</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-center">
                    <img src="images/clothes-2.png" alt="clothes" class="bg-[#DCE2E7]" />
                    <div class="flex flex-col justify-between items-start bg-white px-2 pb-8 pt-2 w-full h-[198px]">
                        <div>
                            <h3 class="text-base font-semibold">
                                Cotton T-Shirt
                            </h3>
                            <p class="text-[10px] text-[#B7B7B7] font-semibold">
                                Woman Collection
                            </p>
                        </div>
                        <div>
                            <p class="text-sm font-bold">Rp 250.000</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-center">
                    <img src="images/clothes-3.png" alt="clothes" class="bg-[#DCE2E7]" />
                    <div class="flex flex-col justify-between items-start bg-white px-2 pb-8 pt-2 w-full h-[198px]">
                        <div>
                            <h3 class="text-base font-semibold">
                                Cotton T-Shirt
                            </h3>
                            <p class="text-[10px] text-[#B7B7B7] font-semibold">
                                Woman Collection
                            </p>
                        </div>
                        <div>
                            <p class="text-sm font-bold">Rp 250.000</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-center">
                    <img src="images/clothes-4.png" alt="clothes" class="bg-[#DCE2E7]" />
                    <div class="flex flex-col justify-between items-start bg-white px-2 pb-8 pt-2 w-full h-[198px]">
                        <div>
                            <h3 class="text-base font-semibold">
                                Cotton T-Shirt
                            </h3>
                            <p class="text-[10px] text-[#B7B7B7] font-semibold">
                                Woman Collection
                            </p>
                        </div>
                        <div>
                            <p class="text-sm font-bold">Rp 250.000</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-center">
                    <img src="images/clothes-5.png" alt="clothes" class="bg-[#DCE2E7]" />
                    <div class="flex flex-col justify-between items-start bg-white px-2 pb-8 pt-2 w-full h-[198px]">
                        <div>
                            <h3 class="text-base font-semibold">
                                Cotton T-Shirt
                            </h3>
                            <p class="text-[10px] text-[#B7B7B7] font-semibold">
                                Woman Collection
                            </p>
                        </div>
                        <div>
                            <p class="text-sm font-bold">Rp 250.000</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Designers -->
    <section class="flex flex-col jsutify-center items-center mt-[5.2rem] pb-14">
        <h2 class="text-4xl text-[#BFB9B9] font-bold uppercase tracking-wider">
            Featured Designers
        </h2>
        <div class="mt-9">
            <img src="images/designers.png" alt="clothes" class="w-[1156px] h-[584px]" />
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</body>

</html>
