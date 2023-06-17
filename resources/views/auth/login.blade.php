@extends('layouts.base')

@section('title')
    Sign In
@endsection

@section('additional-sheet')
<script src="https://cdn.tailwindcss.com"></script>
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

        [x-cloak] {
            display: none;
        }
    </style>
@endsection

@section('child-layout')
<div class="bg-blackoverflow-hidden h-screen overflow-hidden" x-data="{ navOpen: false, faqOpen: false, faqNavOpen: false }">
    <nav>
        <div class="navbar">
            <div class="">
                <div class="container nav-container">
                    <input class="checkbox" type="checkbox" name="" id="" @click="navOpen = !navOpen" />
                    <div class="hamburger-lines">
                        <span class="line line1"></span>
                        <span class="line line2"></span>
                        <span class="line line3"></span>
                    </div>
                    <div class="logo">
                        <img class="w-12" src="/images/logo-singin.svg" alt="" />
                    </div>
                    <div class="menu-items h-screen relative overflow-visible">
                        <div class="flex flex-row">
                            <div class="relative w-full">
                                <div class="mt-">
                                    <div class="relative flex ml-12 justify-center">
                                        <input
                                            class="w-[700px] text-2xl h-[70px] rounded-full bg-[#e4e4e4] text-[#565656] font-bold pl-4 focus:outline-0 placeholder:text-[#565656]"
                                            placeholder="Search by product, category,  size, etc." type="text" />
                                        <i class="fa fa-search fa-2x absolute right-5 bottom-5" aria-hidden="true"></i>
                                    </div>
                                    <div class="flex flex-col gap-[78px]">
                                        <a class="text-semibold text-" href=""></a>
                                    </div>
                                </div>
                                <div
                                    class="flex font-bold text-left mt-10 items-start ml-20 justify-center text-[#565656] flex-col gap-[78px]">
                                    <div class="flex flex-col gap-[30px] justify-start text-left text-3xl">
                                        <div>
                                            <h1>Home</h1>
                                        </div>
                                        <div>
                                            <h1>My Purchases</h1>
                                        </div>
                                        <div @click="faqOpen=true" class="cursor-pointer">
                                            <h1>FAQ</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full">
                                <div class="logo flex ml-[780px] fill-[#4a7174] lg:ml-[700px]">
                                    <img class="w-20" src="/images/logo-side.svg" alt="" />
                                </div>
                                <img class="absolute top-0 right-0 w-[40%]" src="/images/sidebar.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="flex  flex-row">
        <div class="w-full">
            <img src="/images/bg-signin.jpg" alt="">
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

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div style="font-family: 'Montserrat', sans-serif;" class="flex flex-col gap-[39px]">
                            <!-- Email Address -->
                            <div>
                                <input type="email" name="email" value="{{old('email')}}" id="email"
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
                                <div>
                                <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox"
                                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                        name="remember">
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>
                            </div>
                            <div class="mr-0 2xl:mr-24">
                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-400 hover:text-black-900  text-[#000000] mr-16"
                                       href="{{ route('password.request') }}">
                                        Forgot Password
                                    </a>
                                @endif
                            </div>
                            </div>
                            <div>
                                <button type="submit" class="w-[594px] h-[49px] bg-black text-white font-bold mr-16 text-lg">Sign In</button>
                            </div>
                            <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                href="/choose-register">
                                Haven’t made an account?Create an account here!
                            </a>
                            <div>
                                <!-- Faq Toogle -->
                                <img x-show="navOpen===false" @click="faqOpen=true" x-transition x-cloak
                                    src="/images/faq-logo-dark.png" id="faq-dark" alt="faq"
                                    x-bind:class="faqOpen == true ? 'hidden' :
                                        ''"
                                    class="w-[5%] absolute bottom-16 right-14 cursor-pointer" />

                                <!-- Faq Open -->
                                <div x-show="faqOpen==true"
                                    class="absolute flex flex-col w-[500px] 2xl:w-[400px] h-[550px] 2xl:h-[500px] bg-white rounded-[10px] 2xl:bottom-20 bottom-10 right-10"
                                    x-data="{ tab: '' }">
                                    <div class="flex flex-row items-center justify-between bg-[#497174] py-4 px-6 rounded-[10px]">
                                        <img src="/images/faq-logo.png" alt="faq" class="w-[57px] h-[62px]" />
                                        <img src="/images/close-logo.png" alt="faq" class="w-[42px] h-[42px] cursor-pointer"
                                            @click="faqOpen=false" />
                                    </div>
                                    <div class="flex flex-col" x-show="tab === ''" x-cloak x-transition>
                                        <h1 class="text-[#050505] text-[40px] py-2 px-6">
                                            FAQs
                                        </h1>
                                        <hr class="w-full h-[1px] bg-black/10" />
                                        <div class="flex flex-row items-center gap-5 py-2 px-3 hover:bg-slate-200 cursor-pointer"
                                            @click="tab='general'">
                                            <img src="/images/logo-dark.png" alt="logo" class="w-[64px] h-[57px]" />
                                            <p class="text-[#050505] text-[28px] font-medium">
                                                General
                                            </p>
                                        </div>
                                        <hr class="w-full h-[1px] bg-black/10" />
                                        <div class="flex flex-row items-center gap-5 py-2 px-3 hover:bg-slate-200 cursor-pointer"
                                            @click="tab='shipping'">
                                            <img src="/images/shipping-logo.png" alt="logo" class="w-[58px] h-[57px]" />
                                            <p class="text-[#050505] text-[28px] font-medium">
                                                Shipping
                                            </p>
                                        </div>
                                        <hr class="w-full h-[1px] bg-black/10" />
                                        <div class="flex flex-row items-center gap-5 py-2 px-3 hover:bg-slate-200 cursor-pointer"
                                            @click="tab='payment'">
                                            <img src="/images/payment-logo.png" alt="logo" class="w-[58px] h-[57px]" />
                                            <p class="text-[#050505] text-[28px] font-medium">
                                                Payment
                                            </p>
                                        </div>
                                        <hr class="w-full h-[1px] bg-black/10" />
                                        <div class="flex flex-row items-center gap-5 py-2 px-3 hover:bg-slate-200 cursor-pointer"
                                            @click="tab='return'">
                                            <img src="/images/return-logo.png" alt="logo" class="w-[58px] h-[57px]" />
                                            <p class="text-[#050505] text-[28px] font-medium">
                                                Return
                                            </p>
                                        </div>
                                    </div>
                                    <!-- General -->
                                    <div x-show="tab === 'general'" class="flex flex-col" x-transition x-cloak>
                                        <div class="flex flex-row items-center gap-3 py-2 px-3 hover:bg-slate-200 cursor-pointer"
                                            @click="tab=''">
                                            <img src="/images/logo-dark.png" alt="logo" class="w-[64px] h-[57px]" />
                                            <p class="text-[#050505] text-[28px] font-medium">
                                                General
                                            </p>
                                        </div>
                                        <hr class="w-full h-[1px] bg-black/10" />
                                        <div class="flex flex-col px-8 py-4">
                                            <h3 class="text-xl font-semibold text-black">
                                                What is SEJUK?
                                            </h3>
                                            <p class="text-sm text-black mt-2">
                                                SEJUK is a web application software that offers a clothing rental feature. The Sejuk application providers a platform for vendors to list their rental products such as clothes, customes, and other types of clothing. For application users, they can use the SEJUK application as a medium to search for clothing rental and various types of clothing they want.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Shipping -->
                                    <div x-show="tab === 'shipping'" class="flex flex-col" x-transition x-cloak>
                                        <div class="flex flex-row items-center gap-4 py-2 px-8 hover:bg-slate-200 cursor-pointer"
                                            @click="tab=''">
                                            <img src="/images/shipping-logo.png" alt="logo" class="w-[58px] h-[57px]" />
                                            <p class="text-[#050505] text-[28px] font-medium">
                                                Shipping
                                            </p>
                                        </div>
                                        <hr class="w-full h-[1px] bg-black/10" />
                                        <div class="flex flex-row items-start px-8 pt-4 gap-2">
                                            <h3 class="text-xl font-semibold text-black">
                                                1.
                                            </h3>
                                            <div class="flex flex-col">
                                                <h3 class="text-xl font-semibold text-black">
                                                    How to use free delivery
                                                    feature?
                                                </h3>
                                                <p class="text-base text-black">
                                                    Free delivery can be
                                                    obtained by entering a free
                                                    shipping voucher code in the
                                                    voucher column with a
                                                    maximum discount of
                                                    Rp30,000.00.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flex flex-row items-start px-8 py-1 gap-2">
                                            <h3 class="text-xl font-semibold text-black">
                                                2.
                                            </h3>
                                            <div class="flex flex-col">
                                                <h3 class="text-xl font-semibold text-black">
                                                    What are the shipping
                                                    options that SEJUK provide?
                                                </h3>
                                                <p class="text-base text-black">
                                                    SEJUK provides regular
                                                    and economical shipping which can
                                                    be done using JNE, J&T,
                                                    SiCepat, and Anteraja. For instant shipping we provide GoSend.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flex flex-row items-start px-8 pb-1 gap-2">
                                            <h3 class="text-xl font-semibold text-black">
                                                3.
                                            </h3>
                                            <div class="flex flex-col">
                                                <h3 class="text-xl font-semibold text-black">
                                                    Can the shipping option be
                                                    changed?
                                                </h3>
                                                <p class="text-base text-black">
                                                    Shipping options cannot be
                                                    changed once the order has
                                                    been placed.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Payment -->
                                    <div x-show="tab === 'payment'" class="flex flex-col" x-transition x-cloak>
                                        <div class="flex flex-row items-center gap-2 py-2 px-8 hover:bg-slate-200 cursor-pointer"
                                            @click="tab=''">
                                            <img src="/images/payment-logo.png" alt="logo" class="w-[58px] h-[57px]" />
                                            <p class="text-[#050505] text-[28px] font-medium">
                                                Payment
                                            </p>
                                        </div>
                                        <hr class="w-full h-[1px] bg-black/10" />
                                        <div class="flex flex-row items-start px-8 pt-4 gap-2">
                                            <h3 class="text-lg font-semibold text-black">
                                                1.
                                            </h3>
                                            <div class="flex flex-col">
                                                <h3 class="text-lg font-semibold text-black">
                                                    What payment methods are
                                                    supported by SEJUK?
                                                </h3>
                                                <p class="text-sm text-black">
                                                    SEJUK supports 4 types of
                                                    payment methods, Bank Transfer (Virtual
                                                    Machine Account), and Credit
                                                    Card.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flex flex-row items-start px-8 py-1 gap-2">
                                            <h3 class="text-lg font-semibold text-black">
                                                2.
                                            </h3>
                                            <div class="flex flex-col">
                                                <h3 class="text-lg font-semibold text-black">
                                                    Can the payment method be
                                                    changed?
                                                </h3>
                                                <p class="text-sm text-black">
                                                    The payment method can be
                                                    changed at any time before
                                                    the payment is successfully
                                                    processed by SEJUK.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flex flex-row items-start px-8 pb-1 gap-2">
                                            <h3 class="text-lg font-semibold text-black">
                                                3.
                                            </h3>
                                            <div class="flex flex-col">
                                                <h3 class="text-lg font-semibold text-black">
                                                    What happens if payment is
                                                    not made by the end of the
                                                    payment deadline?
                                                </h3>
                                                <p class="text-sm text-black">
                                                    The payment deadline for
                                                    each payment method is 24
                                                    hours after the order is
                                                    placed. If the buyer has not
                                                    paid the order beyond that
                                                    time, the order will be
                                                    automatically canceled by
                                                    the system.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Return -->
                                    <div x-show="tab === 'return'" class="flex flex-col" x-transition x-cloak>
                                        <div class="flex flex-row items-center gap-4 py-2 px-8 hover:bg-slate-200 cursor-pointer"
                                            @click="tab=''">
                                            <img src="/images/return-logo.png" alt="logo" class="w-[58px] h-[57px]" />
                                            <p class="text-[#050505] text-[28px] font-medium">
                                                Return
                                            </p>
                                        </div>
                                        <hr class="w-full h-[1px] bg-black/10" />
                                        <div class="flex flex-row items-start px-8 pt-4 gap-2">
                                            <h3 class="text-lg font-semibold text-black">
                                                1.
                                            </h3>
                                            <div class="flex flex-col">
                                                <h3 class="text-lg font-semibold text-black">
                                                    How to submit a
                                                    product/money return
                                                    request?
                                                </h3>
                                                <p class="text-base text-black">
                                                    Product/money return
                                                    requests can be made in the
                                                    order status section by
                                                    selecting the "submit a
                                                    return request" option.

                                                </p>
                                            </div>
                                        </div>
                                        <div class="flex flex-row items-start px-8 py-1 gap-2">
                                            <h3 class="text-lg font-semibold text-black">
                                                2.
                                            </h3>
                                            <div class="flex flex-col">
                                                <h3 class="text-lg font-semibold text-black">
                                                    How to send a package for
                                                    product return?
                                                </h3>
                                                <p class="text-base text-black">
                                                    You can send the package
                                                    using the shipping option. Return shipping
                                                    can only be done using JNE,
                                                    J&T, SiCepat, and Anteraja,
                                                    it must be done within 5
                                                    days after the approval form
                                                    is received.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
