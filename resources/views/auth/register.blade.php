<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.cdnfonts.com/css/cormorant-2" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>signup</title>
</head>
<style>
    body {
        font-family: 'Plus Jakarta Sans', sans-serif;
        width: 100%;
        height: 100vh;
        background: linear-gradient(180deg, #FFFFFF 0%, #F9F5F2 100%);
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
</head>
<body class="bg-blackoverflow-hidden h-screen overflow-x-hidden">
    <!-- nav start -->
     <nav class="sticky top-0 z-50">
        <div class="navbar relative z-10">
            <div class="">
                <div class="container  nav-container">
                    <input class="checkbox" type="checkbox" name="" id="" />
                    <div class="hamburger-lines">
                        <span class="line line1"></span>
                        <span class="line line2"></span>
                        <span class="line line3"></span>
                    </div>
                    <div class="logo">
                        <img class="w-12" src="images/logo-side.svg" alt="">
                    </div>
                    <div class="flex flex-row items-center absolute top-2 -right-12 gap-4 mr-32">
                <div class="flex items-center gap-3">
                    <div class="w-16 h-16 flex items-center justify-center rounded-full bg-[#497174] ring-1 ring-black">
                        <h1 class="text-2xl font-semibold">1</h1>
                    </div>
                    <h1 class="font-semibold">Welcome</h1>
                </div>
                <hr class="border-none h-1 bg-[#BFB9B9] w-8">
                <div class="flex items-center gap-3">
                    <div
                        class="w-16 h-16 flex items-center justify-center rounded-full bg-[#497174] ring-1 ring-[#BFB9B9]">
                        <h1 class="text-2xl text-[#BFB9B9] font-semibold">2</h1>
                    </div>
                    <h1 class="text-[#BFB9B9] font-semibold">About You</h1>
                </div>
            </div>
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
    <!-- nav end -->


    <form style="background: linear-gradient(180deg, #FFFFFF 0%, #F9F5F2 100%);" class="" x-on:submit="handleSubmit" x-data="{
    password: '',
    confirmPassword: '',
    passwordsMatch: false,
    fullname: '',
    isValidFullname: false,
    isValidPhone: false,
    isValidEmail: false,
    email: '',
    phone: '',
    minPhoneLength: 8,
    invalid: false,
    incomplete: false,
}">
    <div x-show="invalid" class="fixed top-0 left-0 right-0 h-36 bg-white z-50" x-transition x-cloak>
        <div class="flex flex-col px-12 pt-4 pb-2">
            <h2 class="text-3xl font-bold text-[#FE4A4A]">
                Data is Invalid / Belum Lengkap
            </h2>
            <p class="text-lg font-medium">Click OK to continue</p>
            <p class="ml-auto mt-4 px-8 py-0.5 border-2 shadow-xl border-b-4 border-b-slate-300 hove:brightness-75 cursor-pointer"
                @click="invalid=false">
                Ok
            </p>
        </div>
    </div>
    <div class="flex flex-col items-center justify-center">
        <div class="flex flex-col mt-16 items-center text-center gap-12 justify-center">
            <h1 class="text-3xl font-semibold">COMPLETE YOUR ACCOUNT</h1>
            <p class="text-[#BFB9B9] text-2xl w-[460px]">Please fill in a few details below about your business!</p>
        </div>
        <div>
            <input x-model="fullname" x-on:input="isValidFullname = fullname.trim() !== ''"
                class="w-[600px] h-[102px] mt-12 ring-1 text-black focus:border-none ring-black bg-white focus:outline-none  placeholder:text-[#BFB9B9] text-xl pl-8"
                placeholder="FULLNAME">
        </div>
        <div>
            <select name="city" id="city"
                class="w-[600px] h-[102px] mt-12 ring-1 appearance-none focus:border-none ring-black bg-white focus:outline-none  text-xl pl-8">
                <option value="Surabaya">Surabaya</option>
                <option value="Jakarta">Jakarta</option>
                <option value="Medan">Medan</option>
            </select>
        </div>
        <div>
            <input x-model="email" x-on:input="isValidEmail = email.trim() !== ''"
                class="w-[600px] h-[102px] mt-12 ring-1 text-black focus:border-none ring-black bg-white focus:outline-none  placeholder:text-[#BFB9B9] text-xl pl-8"
                placeholder="email">
        </div>
        <div class="z-0 mt-12 flex flex-row">
            <select
                class="p-2 border border-r-0 z-0 relative  text-xl h-[102px] border-black focus:outline-none bg-white text-gray-600 ">
                <option>🇮🇩 +62</option>
                <option>🇩🇪 +44</option>
                <option>🇺🇸 +91</option>
            </select>
            <input x-model="phone" x-on:input="isValidPhone = phone.trim() !== '' && phone.length >= minPhoneLength"
                type="text" class="border-l-0 p-2 border w-[503px] text-3xl h-[102px] relative z-0 border-black " />
        </div>
        <input placeholder="PASSWORD"
            class="w-[600px] h-[102px] mt-12 ring-1 focus:border-none ring-black bg-white focus:outline-none text-[#BFB9B9] text-xl pl-8"
            type="password" name="password" id="password" x-model="password"
            x-on:input="passwordsMatch = (password === confirmPassword)">
        <input type="password" placeholder="VERIFY PASSWORD"
            class="w-[600px] h-[102px] mt-12 ring-1 focus:border-none ring-black bg-white focus:outline-none text-[#BFB9B9] text-xl pl-8"
            type="password" name="confirmPassword" id="confirmPassword" x-model="confirmPassword"
            x-on:input="passwordsMatch = (password === confirmPassword)">

        <div x-show="password !== '' && confirmPassword !== '' && !passwordsMatch"
            class="text-red-500 text-3xl mt-12 font-semibold">
            Passwords do not match
        </div>
        <p class="mt-12 text-xl " href="">By entering your phone number, you agree to
            our <a class="font-bold hover:underline" href="#">Terms
                and Conditions.</a></p>


        <div class="flex flex-row gap-48 my-16">
            <button type="submit"
                class="w-[310px] h-[62px] hover:bg-slate-200 bg-white ring-1 ring-black text-3xl flex justify-center text-black placeholder:text-[#BFB9B9] items-center"
                x-bind:disabled="!isValidFullname || !isValidEmail || !isValidPhone || password !== confirmPassword">
                SIGN UP
            </button>
        </div>
    </div>
</form>

<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.js" defer></script>
<script>
    function handleSubmit(event) {
        const isValid =
            this.isValidFullname &&
            this.isValidPhone &&
            this.isValidEmail &&
            this.password === this.confirmPassword;

        if (!isValid) {
            this.invalid = true;
            event.preventDefault();
        } else {
            const formElement = event.target.closest("form");
            formElement.action = "/dashboard";
            window.location.href = "/dashboard";
        }
    }
</script>

