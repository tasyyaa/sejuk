<!DOCTYPE html>
<html>

<head>
    <title>Return Payment</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
        integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous">
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Return in process</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background: linear-gradient(rgba(73, 113, 116, 1), rgba(249, 245, 242, 1));
            background-attachment: fixed;
        }
    </style>
</head>

<body>
    <nav class="">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <div class="leftitem" style="display: flex; justify-content: center;">
                <a class="navbar-brand" href="">
                    <img src="{{ asset('images/backarrowvendor.svg') }}" width="60" height="65"
                        class="d-inline-block align-text-">
                </a>
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('images/sejuk1.png') }}" width="40" height="45"
                        class="d-inline-block align-text-">
                </a>
                <a class="navbar-brand">
                    <h4 class="d-inline-block align-text- mt-4 text-white ml-[8px]"> Return Payment Success</h4>
                </a>
            </div>
            <div class="sideitem" style="display: flex; justify-content: center;margin-left:10px;">
                <a class="navbar-brand" href="/notifications" style="margin:0px 0px 0px 20px;">
                    <img src="{{ asset('images/notifications.svg') }}" width="30" height="24">
                </a>
                <a class="navbar-brand" href="/vendorAccount" style="margin:0px 0px 0px 20px;">
                    <img src="{{ asset('images/3.png') }}" width="30" height="24">
                </a>
            </div>
        </div>
    </nav>
    <div class="flex justify-center ml-[315px] bg-[#FFFFFF] h-[650px] w-[650px] mb-[60px] rounded-sm">
        <div class="flex flex-col items-center">
            <div class="flex flex-row mt-[28px] ml-[5px]">
                <img class="w-[120px] h-[100px]"src="{{ asset('images/successpayment.svg') }}">
            </div>
            <div class="flex flex-row  mt-[10px]">
                <p class="d-inline-block align-text- font-extrabold text-[#030319] text-[20px]">Return Payment Success</p>
            </div>
            <div class="flex flex-row mt-[10px]">
                <p class="d-inline-block align-text- font-regular text-[#8F92A1] text-[18px]">Your Payment has been
                    successfully and your</p>
            </div>
            <div class="flex flex-row">
                <p class="d-inline-block align-text- font-regular text-[#8F92A1] text-[18px]">order will be proccess</p>
            </div>
            <div class="flex flex-row mt-[10px]">
                <p class="d-inline-block align-text- font-bold text-[#8F92A1] text-[16px]">Total Payment</p>
            </div>
            <div class="flex flex-row mt-[25px]">
                <p class="d-inline-block align-text- font-bold text-[#030319] text-[20px]">db Total payment</p>
            </div>
            <div class="flex flex-row mt-[28px] ml-[5px]">
                <img src="{{ asset('images/line11.svg') }}">
            </div>
            <div class="flex flex-row bg-[#FFFFFF] w-[625px] h-[38px] mt-[15px]">
                <div class="flex flex-col ml-[28px]">
                    <p class="font-bold text-[#8F92A1] text-[18px]">Recipient</p>
                </div>
            </div>
            <div class="flex flex-row bg-[#F2F2F2] w-[625px] h-[60px] rounded-md">
                <div class="flex flex-col ml-[22px] mt-[3px]">
                    <img class="w-[50px] h-[55px]"src="{{ asset('images/user2.svg') }}">
                </div>
                <div class="flex flex-col ml-[22px] mt-[3px]">
                    <div class="flex flex-row mt-[3px]">
                        <p class="d-inline-block font-bold text-[#030319] text-[18px]">*username</p>
                    </div>
                    <div class="flex flex-row">
                        <p class="d-inline-block font-medium text-[#8F92A1] text-[18px]">*norek</p>
                    </div>
                </div>
            </div>
            <div class="flex flex-row mt-[65px]">
                <a href="/homepagevendor"
                    class="bg-[#497174] text-[#FFFFFF] font-bold w-[625px] h-[45px] rounded-md flex justify-center items-center">Done</a>
            </div>
        </div>
    </div>

</body>

</html>
