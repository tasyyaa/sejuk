<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Return Package</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

        <!-- Styles -->
        <style>
             body {
                font-family: 'Plus Jakarta Sans', sans-serif;
                background: linear-gradient(rgba(214, 228, 229, 1), rgba(249, 245, 242, 1));
            background-attachment: fixed;
            }
</style>

    </head>
<body>
    <nav class="">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <div class="leftitem" style="display: flex; justify-content: center;">
                <a class="navbar-brand" href="/orderSummary">
                    <img src="{{ asset('images/backarrowcust.svg') }}" width="60" height="65"
                        class="d-inline-block align-text-">
                </a>
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('images/sejukcust.svg') }}" width="60" height="65"
                        class="d-inline-block align-text-">
                </a>
                <a class="navbar-brand">
                    <h4 class="d-inline-block align-text- mt-4">Apply For Return</h4>
                </a>
            </div>
            <div class="sideitem" style="display: flex; justify-content: center;">
                <a class="navbar-brand" href="#">
                    <h4 class="d-inline-block align-text- text-[#675959]"> Name </h4>
                </a>
            </div>
        </div>
    </nav>
    <div x-show="invalid" class="fixed top-[30px] left-[120px] right-[120px] h-36 bg-white z-50" x-transition x-cloak>
        <div class="flex flex-col px-12 pt-4 pb-2">
            <h2 class="text-3xl font-bold text-[#675959]">
                Apply for return completed
            </h2>
            <p class="text-lg font-medium">Click OK to continue</p>
            <p class="ml-auto mt-4 px-8 py-0.5 border-2 shadow-xl border-b-4 border-b-slate-300 hove:brightness-75 cursor-pointer"
                @click="invalid=false">
                Ok
            </p>
        </div>
    </div>
    <div class="bg-[#FFFFFF] ml-[15px] mr-[15px] rounded-md">
        <div class="flex flex-row ml-[28px]">
            <div class="flex flex-col gap-[20px] ml-[28px]">
                <img src="{{ asset('images/phimage.svg') }}" class="object-left mt-3" width=306px height=379px>
            </div>
            <div class="flex flex-col gap-x-[550px] ml-[28px]">
                <div class="flex flex-row">
                    <p class="d-inline-block align-text- mt-[45px] text-[16px]">location</p>
                </div>
                <div class="flex flex-row">
                    <p class="d-inline-block align-text- mt-[8px] text-[16px] font-extrabold">Store</p>
                </div>
                <div class="flex flex-row">
                    <p class="d-inline-block align-text- mt-[8px] text-[16px]">Product</p>
                </div>
            </div>
            <div class="flex flex-col ml-[475px] mt-[105px]">
                <div class="flex flex-row ml-[10px]">
                    <p class="d-inline-block align-text- text-[16px]">Qty</p>
                </div>
                <div class="flex flex-row mt-[20px]">
                    <p class="d-inline-block align-text- text-extrabold text-[#497174] text-[16px]">Total</p>
                </div>
            </div>
            <div class="flex flex-col ml-[120px] mt-[105px]">
                <div class="flex flex-row">
                    <p class="d-inline-block align-text- text-[16px]">Price</p>
                </div>
                <div class="flex flex-row mt-[20px]">
                    <p class="d-inline-block align-text- text-extrabold text-[#497174] text-[16px]">Total Price</p>
                </div>
            </div>
        </div>
    </div>
        <div class="bg-[#FFFFFF] mt-[15px] ml-[15px] mr-[15px] pt-[20px] pb-[20px] rounded-sm">
            <div class="flex flex-row">
                <div class="flex flex-col">
                    <div class="flex flex-row ml-[28px]">
                        <p class="d-inline-block align-text- font-bold text-[#675959] text-[18px]">Shipping Information
                        </p>
                    </div>
                    <div class="flex flex-row ml-[28px] mt-[12px]">
                        <p class="d-inline-block align-text- text-bold text-[#675959] text-[14px]">Reguler</p>
                    </div>
                    <div class="flex flex-row ml-[24px]">
                        <p class="d-inline-block align-text- text-bold text-[#675959] text-[14px]">JNE</p>
                    </div>
                    <div class="flex flex-row ml-[28px] mt-[6px]">
                        <p class="d-inline-block align-text- text-bold text-[#675959] text-[14px]">Nama Kurir</p>
                    </div>
                </div>
                <div class="flex flex-col ml-[575px]">
                    <div class="flex flex-row">
                        <p class="d-inline-block align-text- font-bold text-[#675959] text-[18px]">No. Resi</p>
                    </div>
                    <div class="flex flex-row mt-[22px]">
                        <p class="d-inline-block align-text- text-bold text-[#675959] text-[14px]">26437264</p>
                    </div>
                </div>
            </div>
            <div class="border-t-4"></div>
            <div class="flex flex-row ml-[28px] mt-[20px]">
                <p class="d-inline-block align-text- font-bold text-[#675959] text-[18px]">Shop Address</p>
            </div>
            <div class="flex flex-row ml-[28px] mb-[15px]">
                <p class="d-inline-block align-text- text-bold text-[#675959] text-[14px]">Jl. Pusing</p>
            </div>
        </div>
        <div class="bg-[#FFFFFF] ml-[15px] mr-[15px] mt-[15px] pt-[20px] pb-[20px] rounded-md">
            <div class="flex flex-row ml-[28px]">
                <p class="d-inline-block align-text- font-bold text-[#675959] text-[18px]">Reason for return
                </p>
            </div>
            <div class="flex flex-row ml-[28px]">
                <p class="d-inline-block align-text- text-bold text-[#675959] text-[14px]">rusak bro </p>
            </div>
            <div class="border-t-4"></div>
            <div class="flex flex-row ml-[28px] mt-[20px]">
                <p class="d-inline-block align-text- font-bold text-[#675959] text-[18px]">Product Image
                </p>
            </div>
            <div class="flex flex-row ml-[28px]">
                <img src="{{ asset('images/applyforreturn.svg') }}" class="h-[150px] w-[200px]">
            </div>
        </div>
        <div class="flex flex-row ml-[1050px] mb-[55px] mt-[100px] justify-center items-center">
            <a href="#send">
                <div
                    class="w-[196px] flex items-center justify-center text-xl font-semibold h-[51px] rounded-md bg-[#497174] text-[#D6E4E5]">
                    <h1>Confirm Package</h1>
                </div>
            </a>
        </div>
    </body>
</html>
