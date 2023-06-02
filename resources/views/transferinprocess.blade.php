<!DOCTYPE html>
<html>

<head>
    <title>Accept Payment</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600&display=swap" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
        integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous">
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Transfer in process</title>


    <!-- Styles -->
    <style>
        body {
            background: linear-gradient(rgba(73, 113, 116, 1), rgba(239, 245, 245, 1));
            background-attachment: fixed;
            font-family: 'Plus Jakarta Sans', sans-serif;
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
                <p
                class="text-white font-medium text-[30px] ml-6 border-l-4 border-white h-14 place-self-center pt-1 pl-4">Transfer In Progress
                </p>
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
    <div class="">
        <div class="flex flex-col mb-[30px]">
            <div class="flex flex-col justify-center items-center">
                <div class="flex flex-row">
                    <img src="{{ asset('images/transferillus.svg') }}" width="350" height="400">
                </div>
                <div class="justify-center bg-[#FFFFFF] rounded-sm pt-[15px] pl-[25px] pr-[25px] w-[350px]">
                    <div class="flex flex-row">
                        <p class="d-inline-block align-text- font-bold text-[#675959] text-[18px]">Transfer Payment</p>
                    </div>
                    <div class="flex flex-row mb-[25px]">
                        <div class="flex flex-col">
                            <p class="d-inline-block align-text- font-medium text-[#675959] text-[16px]">Total Price</p>
                        </div>
                        <div class="flex flex-col ml-[120px]">
                            <p class="d-inline-block align-text- font-medium text-[#675959] text-[16px]">*Total Price
                            </p>
                        </div>
                    </div>
                    <div class="border-t-4"></div>
                    <div class="flex flex-row mb-[25px] mt-[15px]">
                        <div class="flex flex-col">
                            <p class="d-inline-block align-text- font-extrabold text-[#675959] text-[16px]">Total
                                Payment</p>
                        </div>
                        <div class="flex flex-col ml-[90px]">
                            <p class="d-inline-block align-text- font-bold text-[#497174] text-[16px]">*Total Price</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col items-center">
                <div class="bg-[#FFFFFF] w-[850px] h-[85px] mt-[20px] border-black pt-[25px] pb-[25px] pl-[30px] rounded-sm">
                    <p class="d-inline-block align-text- font-extrabold text-[#000000] text-[26px]">Transfer in process
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col items-center justify-center mb-[45px]">
        <a href="/transfersuccess"
            class="bg-[#000000] text-[#FFFFFF] font-bold w-[500px] h-[45px] rounded-md flex justify-center items-center">Confirm</a>
    </div>
    </div>
</body>

</html>
