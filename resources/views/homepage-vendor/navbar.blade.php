@extends('layouts.base')

@section('precede-sheet')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap');

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: linear-gradient(#D6E4E5, #F9F5F2) fixed;
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
            overflow-y: auto; /* Add this line to enable scrolling */
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
            z-index: 10;
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

        .navbar-scrolled {
            background-color: rgba(0, 0, 0, .25);
            height: 80px;
            z-index: 0;/* Replace with your desired background color */
        }
        .navbar .menu-items li {
            margin-bottom: 1.2rem;
            font-size: 1.5rem;
            font-weight: 500;
        }

        .navbar .menu-items a {
            font-size: 25px;
            margin-left: -10px;
            font-weight: 900;
        }


        .logo {
            position: absolute;
            top: 5px;
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
@endsection

@section('navigation')
    <nav class="sticky top-0 z-50">
        <div class="navbar relative z-10">
            <div class="container nav-container">
                <input class="checkbox" type="checkbox" name="" id="" />
                <div class="hamburger-lines">
                    <span class="line line1"></span>
                    <span class="line line2"></span>
                    <span class="line line3"></span>
                </div>
                <a class="logo" href="{{route('homepage.vendor')}}">
                    <img class="w-12" src="/images/logo.png" alt="">
                </a>
                <div class="absolute top-6 left-[40%]">
                    <div class="relative">
                        <form action="/vendor">
                            <div
                                class="flex justify-center  w-[104px] absolute right-0 items-center h-[40px] bg-[#497174] rounded-md">
                                <button type="submit"><i class="fas fa-search text-xl font-medium text-white"></i></button>
                            </div>
                            <input type="text" name="q"
                                   class="w-[508px] h-[40px] pl-3 rounded-lg  focus:ring-0 focus:border-transparent"
                                   placeholder="Search" value="{{request()->query('q')}}">
                        </form>
                    </div>
                </div>
                @if(auth()->guard('rentals')->check())
                    <div class="absolute top-6 right-12" style="display: flex; justify-content: center;margin-left:10px;">
                        <a class="navbar-brand" href="{{route('orders.vendor')}}">
                            <img src="{{ asset('/images/cart.svg') }}" width="30" height="24">
                        </a>
                        <a class="navbar-brand" href="{{route('profile.vendor')}}" style="margin:0px 0px 0px 20px;">
                            <img src="{{ asset('/images/3.png') }}" width="30" height="24">
                        </a>
                    </div>
                @else
                    <div class="absolute top-6 right-12 ">
                        <a href="{{route('loginvendor')}}" class="text-xl font-medium text-black mr-10">LOG IN</a>
                        <a href="{{route('registervendor')}}"  class="text-xl font-medium text-white bg-[#3C9379] rounded-lg py-2 px-8 mr-5 ml-[20px]">REGISTER</a>
                    </div>
                @endif


                <div class="menu-items h-screen relative overflow-y-hidden overflow-visible">
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
                                        <a style="font-weight: 600; color:#565656;" href="/vendor">HOME</a>
                                    </div>
                                    <div>
                                        <a style="font-weight: 600; color:#565656;" href="/FAQ">FAQ</a>
                                    </div>
                                    @if(auth()->guard('rentals')->check())
                                    <div>
                                        <a style="font-weight: 600; color:#565656;" href="{{route('orders.vendor')}}">My Order List</a>
                                    </div>
                                    <div>
                                        <a style="font-weight: 600; color:#565656;" href="/vendor/profile">My Account</a>
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <div class="mx-auto">
                                @if(auth()->guard('rentals')->check())
                                    <form action="{{route('logout.vendor')}}" method="POST">
                                        @csrf
                                        <button type="submit"
                                                class="bg-[#497174] mt-[20px] w-[333px] text-white text-2xl font-semibold h-[55px]">
                                           LOG OUT
                                        </button>
                                    </form>
                                @else
                                    <a href="/signin"
                                       class="bg-[#497174] mt-[20px] w-[333px] text-white text-2xl font-semibold h-[55px]">
                                       LOG IN
                                    </a>
                                @endif
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="logo flex ml-[780px] fill-[#4a7174] lg:ml-[700px]">
                                <img class="w-20" src="/images/logo-side.svg" alt="">
                            </div>
                            <img class="absolute top-0 right-0 w-[40%]" src="/images/sidebar.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
@endsection

@section('child-script')
    <script>
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            const scrollDistance = 800; // Replace with your desired scroll distance in pixels

            if (window.pageYOffset > scrollDistance) {
                navbar.classList.add('navbar-scrolled');
            } else {
                navbar.classList.remove('navbar-scrolled');
            }
        });
    </script>
@endsection
