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
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600&display=swap" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap');

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: linear-gradient(#D6E4E5, #F9F5F2); */
            background-attachment: fixed;
        }
        .container {
            max-width: 1050px;
            width: 100%;
        }

        .navbar {
            position: absolute;
            width: 100%;
            background-color: transparent;
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 62px;
        }

        .navbar .menu-items {
            display: flex;
            background-color: whitesmoke;
        }

        .navbar .nav-container li {
            list-style: none;
        }

        .navbar .nav-container a {
            text-decoration: none;
            color: #0e2431;
            font-weight: 500;
            font-size: 1.2rem;
            padding: 0.7rem;
        }

        .navbar .nav-container a:hover {
            font-weight: bolder;
        }

        .nav-container {
            display: block;
            position: relative;
            height: 60px;
        }

        .nav-container .checkbox {
            position: absolute;
            display: block;
            height: 32px;
            width: 32px;
            top: 30px;
            left: 30px;
            z-index: 5;
            opacity: 0;
            cursor: pointer;
        }

        .nav-container .hamburger-lines {
            display: block;
            height: 26px;
            width: 32px;
            position: absolute;
            top: 30px;
            left: 30px;
            z-index: 2;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .nav-container .hamburger-lines .line {
            display: block;
            height: 5px;
            width: 100%;
            border-radius: 10px;
            background: black;
        }

        .nav-container .hamburger-lines .line1 {
            transform-origin: 0% 0%;
            transition: transform 0.4s ease-in-out;
        }

        .nav-container .hamburger-lines .line2 {
            transition: transform 0.2s ease-in-out;
        }

        .nav-container .hamburger-lines .line3 {
            transform-origin: 0% 100%;
            transition: transform 0.4s ease-in-out;
        }

        .navbar .menu-items {
            position: absolute;
            padding-top: 120px;
            height: 100vh;
            width: 100vw;
            transform: translate(-200%);
            display: flex;
            flex-direction: column;
            transition: transform 0.5s ease-in-out;
            text-align: center;
            overflow: hidden;
        }

        .navbar .menu-items li {
            margin-bottom: 1.2rem;
            font-size: 1.5rem;
            font-weight: 500;
        }

        .logo {
            position: absolute;
            top: 15px;
            left: 90px;
            font-size: 1.2rem;
            width: 90px;
            color: #0e2431;
        }

        .nav-container input[type="checkbox"]:checked~.menu-items {
            transform: translateX(0);
        }

        .nav-container input[type="checkbox"]:checked~.hamburger-lines .line1 {
            transform: rotate(45deg);
            background: #497174;
        }

        .nav-container input[type="checkbox"]:checked~.hamburger-lines .line2 {
            transform: scaleY(0);
            background: #497174;
        }

        .nav-container input[type="checkbox"]:checked~.hamburger-lines .line3 {
            transform: rotate(-45deg);
            background: #497174;
        }

        .nav-container input[type="checkbox"]:checked~.logo {
            display: none;
        }
    </style>
    {{-- start --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    {{-- tambah ini buat tailwind (mulai dari start) --}}
</head>

<body>
    <nav class="sticky">
        <div class="navbar">
            <div class="">
                <div class="container  nav-container">
                    <input class="checkbox" type="checkbox" name="" id="" />
                    <div class="hamburger-lines">
                        <span class="line line1"></span>
                        <span class="line line2"></span>
                        <span class="line line3"></span>
                    </div>
                    <div class="logo">
                        <img class="w-12" src="images/logo-singin.svg" alt="">
                    </div>
                    <div class="menu-items h-screen relative overflow-visible">
                        <div class="flex flex-row ">
                            <div class=" relative w-full">
                                <div class=" mt-">
                                    <div class="relative flex ml-12 justify-center">
                                        <input
                                            class="w-[700px]  text-2xl h-[70px] rounded-full bg-[#e4e4e4] text-[#565656] font-bold pl-4 focus:outline-0 placeholder:text-[#565656]"
                                            placeholder="Search by product, category,  size, etc." type="text">
                                        <i class="fa fa-search fa-2x absolute right-5 bottom-5" aria-hidden="true"></i>
                                    </div>
                                    <div class="flex flex-col gap-[78px]">
                                        <a class="text-semibold text-" href=""></a>
                                    </div>
                                </div>
                                <div
                                    class="flex font-bold text-left mt-10  items-start ml-20  justify-center text-[#565656] flex-col gap-[78px]">
                                    <div class="flex flex-col gap-[30px] justify-start text-left text-3xl">
                                        <div>
                                            <h1>Home</h1>
                                        </div>
                                        <div>
                                            <h1>My Purchases</h1>
                                        </div>
                                        <div>
                                            <h1>FAQ</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="mx-auto">
                                    <button
                                        class="bg-[#497174] mt-[100px] w-[333px] text-white text-2xl font-semibold h-[55px]">
                                        SIGN IN
                                    </button>
                                </div>
                            </div>
                            <div class="w-full">
                                <div class="logo flex ml-[780px] fill-[#4a7174] lg:ml-[700px]">
                                    <img class="w-20" src="images/logo-side.svg" alt="">
                                </div>
                                <img class="absolute top-0 right-0 w-[40%]" src="images/sidebar.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    @yield('content')
</body>

</html>
