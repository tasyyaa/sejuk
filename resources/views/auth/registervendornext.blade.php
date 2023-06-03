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

        .input-label {
        font-weight: 500;
        font-size: 1.2rem;
        margin-bottom: 0.5rem;
    }
    
    .input-container {
        position: relative;
        width: 100%;
    }
    
    .custom-input {
        width: 600px;
        height: 102px;
        margin-top: 12px;
        border: 1px solid #000;
        color: #000;
        font-size: 1rem;
        padding: 0.8rem;
        outline: none;
        background-color: #FFF;
    }
    </style>
</head>

<body>
    <!-- nav start -->
    <nav>
        <div class="flex flex-row justify-between px-4 py-1">
            <div class="flex flex-row items-center">
                <i class="fa-solid fa-bars fa-2xl"></i>
                <img class="w-24" src="img/logo.svg" alt="">
            </div>
            <div class="flex flex-row items-center gap-4 mr-32">
                <div class="flex items-center gap-3">
                    <div class="w-16 h-16 flex items-center justify-center rounded-full bg-[#497174] ring-1 ring-black">
                        <h1 class="text-2xl font-semibold">1</h1>
                    </div>
                    <h1 class="font-semibold">Welcome</h1>
                </div>
                <hr class="border-none h-1 bg-[#BFB9B9] w-8">
                <<div class="flex flex-row items-center gap-4 mr-32">
                <div class="flex items-center gap-3">
                    <div class="w-16 h-16 flex items-center justify-center rounded-full bg-[#497174] ring-1 ring-black">
                        <h1 class="text-2xl font-semibold">2</h1>
                    </div>
                    <h1 class="font-semibold">About You</h1>
                </div>
            </div>
        </div>
    </nav>
    <!-- nav end -->

    <form style="background: linear-gradient(180deg, #FFFFFF 0%, #F9F5F2 100%);" class="" x-on:submit="handleSubmit"
      x-data="{
        vendorname: '',
        vendortype: '',
        isValidVendorname: false,
        startTime: '',
        endTime: '',
        isValidVendoroprhours: false,
        isValidVendorstoreaddress: false,
        vendorstoreaddress: '',
        phone: '',
        minVendoroprhoursLength: 8,
        invalid: false,
        incomplete: false,
      }" method="POST">
      @csrf
    <div x-show="invalid" class="fixed top-0 left-0 right-0 h-36 bg-white z-50" x-transition x-cloak>
        <div class="flex flex-col px-12 pt-4 pb-2">
            <h2 class="text-3xl font-bold text-[#FE4A4A]">
                Data is Invalid / Belum Lengkap
            </h2>
            <p class="text-lg font-medium">Click OK to continue</p>
            <p class="ml-auto mt-4 px-8 py-0.5 border-2 shadow-xl border-b-4 border-b-slate-300 hove:brightness-75 cursor-pointer"
                @click="invalid = false">
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
            <input x-model="vendorname" x-on:input="isValidVendorname = vendorname.trim() !== ''"
                class="w-[600px] h-[102px] mt-12 ring-1 text-black focus:border-none ring-black bg-white focus:outline-none  placeholder:text-[#BFB9B9] text-xl pl-8"
                placeholder="VENDORNAME">
            <p class="text-red-500 mt-1" x-show="!isValidVendorname">Vendor name is required.</p>
        </div>
        <div>
            <select name="vendortype" id="vendortype"
                class="w-[600px] h-[102px] mt-12 ring-1 appearance-none focus:border-none ring-black bg-white focus:outline-none  text-xl pl-8"
                x-model="vendortype">
                <option value="" disabled selected>Select Vendor Type</option>
                <option value="Retail">Retail</option>
                <option value="Rental">Rental</option>
                <option value="Seller">Seller</option>
            </select>
            <p class="text-red-500 mt-1" x-show="!vendortype">Vendor type is required.</p>
        </div>
        <div>
            <label for="start_time" class="input-label">Start Time:</label>
            <div class="input-container">
                <input type="time" id="start_time" x-model="startTime" class="custom-input">
            </div>
            <p class="text-red-500 mt-1" x-show="!startTime">Start time is required.</p>
        </div>
        <div>
            <label for="end_time" class="input-label">End Time:</label>
            <div class="input-container">
                <input type="time" id="end_time" x-model="endTime" class="custom-input">
            </div>
            <p class="text-red-500 mt-1" x-show="!endTime">End time is required.</p>
        </div>
        <div>
            <input x-model="vendorstoreaddress" x-on:input="isValidVendorstoreaddress = vendorstoreaddress.trim() !== ''"
                class="w-[600px] h-[102px] mt-12 ring-1 text-black focus:border-none ring-black bg-white focus:outline-none  placeholder:text-[#BFB9B9] text-xl pl-8"
                placeholder="vendorstoreaddress">
            <p class="text-red-500 mt-1" x-show="!isValidVendorstoreaddress">Vendor store address is required.</p>
        </div>
        <p class="mt-12 text-xl">
            By entering your phone number, you agree to our <a class="font-bold hover:underline" href="#">Terms and Conditions.</a>
        </p>
        <div class="flex flex-row gap-48 my-16">
            <button type="submit" class="w-[310px] h-[62px] hover:bg-slate-200 bg-white ring-1 ring-black text-3xl flex justify-center text-black placeholder:text-[#BFB9B9] items-center"
                :disabled="!isValidVendorname || !vendortype || !startTime || !endTime || !isValidVendorstoreaddress">
                SIGN UP
            </button>
        </div>
    </div>
</form>

<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.js" defer></script>

<script>
    function handleSubmit(event) {
        const isValid =
            this.isValidVendorname &&
            this.vendortype !== '' &&
            this.startTime !== '' &&
            this.endTime !== '' &&
            this.isValidVendorstoreaddress;

        if (!isValid) {
            this.invalid = true;
            event.preventDefault();
        } else {
            const formElement = event.target.closest("form");
            // Define where the data will be sent here
            formElement.action = "/dashboard";
            window.location.href = "/dashboard";
        }
    }
</script>
