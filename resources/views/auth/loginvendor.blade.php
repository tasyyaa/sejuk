<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.cdnfonts.com/css/cormorant-2" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Sign In</title>
    <style>
        body {
            width: 100%;
            height: 100vh;
            font-family: 'Plus Jakarta Sans', sans-serif;
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
            background: white;
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
            transform: translate(-150%);
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
</head>

<body class="bg-blackoverflow-hidden h-screen overflow-hidden">
    <nav>
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
                                            <h1>Your Catalogue</h1>
                                        </div>
                                        <div>
                                            <h1>My Order List</h1>
                                        </div>
                                        <div>
                                            <h1>FAQ</h1>
                                        </div>
                                        <div>
                                            <h1>My Account</h1>
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
                                <div class="logo flex ml-[780px] fill-[#4a7174]">
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
    <div class="flex  flex-row">
        <div class="w-full">
            <img src="images/bg-signin.jpg" alt="">
        </div>
        <div class="w-full h-screen bg-[#fbf8f6]">
            <div class=" h-screen ml-[71px]  ">
                <div class="flex gap-[30px] z-0  h-screen justify-center flex-col pb-1">
                    <h1 class="text-4xl font-semibold  text-[#050505]">
                        Welcome Back!
                    </h1>

                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('loginvendor') }}">
                        @csrf
                        <div style="font-family: 'Montserrat', sans-serif;" class="flex flex-col gap-[39px]">
                            <!-- Email Address -->
                            <div>
                                <input type="email" name="email" :value="old('email')" id="email"
                                    placeholder="EMAIL"
                                    class="w-[594px] h-[55px] placeholder:text-black text-black pl-6 text-1xl font-light bg-white ring-1 ring-black focus:outline-0">
                            </div>


                            <!-- Password -->
                            <div class="mt-4">
                                <input type="password" name="password" id="password" placeholder="PASSWORD" required
                                    autocomplete="current-password"
                                    class="w-[594px] h-[55px] placeholder:text-black text-black pl-6 text-1xl font-light bg-white ring-1 ring-black focus:outline-0">
                            </div>

                            <!-- Remember Me -->
                            <div class="flex items-center mt-4 justify-between flex-row">
                                <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox"
                                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                        name="remember">
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>

                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-400 hover:text-black-900"
                                        href="{{ route('password.request') }}">
                                        <div>
                                            <a href="forgot-password" class="text-[#000000] mr-16">Forgot Password</a>
                                        </div>
                                    </a>
                                @endif
                            </div>
                            <div class="flex justify-center">
                                <button
                                    href=""class="w-[594px] h-[49px] bg-black text-white font-bold mr-16 text-lg">Sign
                                    In</button>
                            </div>
                            <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                href="{{ route('register') }}">
                                {{ __('Haven’t made an account?Create an account here!') }}
                            </a>

                            <div class="text-[#565656] text-[15px]">

                                <div class="flex flex-row justify-end absolute right-14 z-0 ">
                                    <a href="">
                                        <button><img class="w-[80px]" src="images/bubble-chat.svg" alt=""
                                                onclick="document.getElementById('id01').style.display='block'"
                                                class="w3-button w3-black"></button>
                                        {{-- <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">Open Modal</button> --}}

                                        <div id="id01" class="w3-modal">
                                            <div class="w3-modal-content w3-animate-right"
                                                style="width: 600px; height: 300px; margin-left: 780px; margin-top: 300px;">
                                                <header class="w3-container" style="color:#497174">
                                                    <img src="images/faq.png" alt="" style="width: 70px;">
                                                    <span
                                                        onclick="document.getElementById('id01').style.display='none'"
                                                        class="w3-button w3-display-topright">&times;</span>

                                                </header>
                                                <div class="w3-container">

                                                    <p>FAQs</p>
                                                    <p>General</p>
                                                    <p>Shipping</p>
                                                    <p>Payment</p>
                                                    <p>Return</p>
                                                </div>
                                            </div>
                                        </div>

                                </div>


                                </a>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
</body>
