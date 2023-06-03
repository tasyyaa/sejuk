<!DOCTYPE html>
<html>

<head>
    <title>Accept Payment</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: linear-gradient(rgba(73, 113, 116, 1), rgba(239, 245, 245, 1));
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
                    <h4 class="d-inline-block align-text- mt-4 text-white ml-[8px]"> Accept Payment</h4>
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
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/acceptpayment/store" method="post">
        {{ csrf_field() }}
        <div class="flex  bg-[#FFFFFF] w-[950px] h-[675px] ml-[150px] mr-[150px] mt-[60px] rounded-sm">
            <div class="flex flex-col">
                <div class="flex flex-row mt-[15px]">
                    <div class="flex flex-col">
                        <div
                            class="flex justify-center items-center bg-[#497174] w-[80px] h-[30px] ml-[8px]  rounded-md">
                            <p class="d-inline-block font-bold text-[#FFFFFF] text-[14px] items-center justify-center">
                                001</p>
                        </div>
                    </div>
                    <div class="flex flex-col ml-[12px] mt-[4px]">
                        <p class="d-inline-block font-bold text-[#000000] text-[16px]">Costume Name</p>
                    </div>
                </div>
                <div class="flex flex-col mt-[20px] ml-[15px]">
                    <div class="flex flex-row">
                        <p class="d-inline-block font-bold text-[#675959] text-[16px]">Transfer Via Bank</p>
                    </div>
                    <div class="flex flex-row items-center mt-[30px] mb-[30px]">
                        <input id="default-radio-1" type="radio" value="BNK0001" name="bank_id"
                            class="w-4 h-4 text-[#497174] bg-gray-100 border-gray-300 focus:ring-[#497174] dark:focus:ring-[#497174] ">
                        <img src="{{ asset('images/seabank.png') }}" class="ml-[20px]" width="25px" height="25px">

                        <label for="default-radio-1" class="ml-2 text-sm font-medium text-black">Seabank</label>
                    </div>
                    <div class="flex flex-row items-center mb-[30px]">
                        <input checked id="default-radio-2" type="radio" value="BNK0002" name="bank_id"
                            class="w-4 h-4 text-[#497174] bg-gray-100 border-gray-300 focus:ring-[#497174] dark:focus:ring-[#497174] ">
                        <img src="{{ asset('images/bca.png') }}" class="ml-[20px]" width="25px" height="25px">
                        <label for="default-radio-2"
                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Bank BCA</label>
                    </div>
                    <div class="flex flex-row items-center mb-[30px]">
                        <input id="default-radio-3" type="radio" value="BNK0003" name="bank_id"
                            class="w-4 h-4 text-[#497174] bg-gray-100 border-gray-300 focus:ring-[#497174] dark:focus:ring-[#497174] ">
                        <img src="{{ asset('images/mandiri.png') }}" class="ml-[20px]" width="25px" height="25px">
                        <label for="default-radio-3"
                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Bank Mandiri</label>
                    </div>
                    <div class="flex flex-row items-center mb-[30px]">
                        <input checked id="default-radio-4" type="radio" value="BNK0004" name="bank_id"
                            class="w-4 h-4 text-[#497174] bg-gray-100 border-gray-300 focus:ring-[#497174] dark:focus:ring-[#497174] ">
                        <img src="{{ asset('images/bni.png') }}" class="ml-[20px]" width="25px" height="25px">
                        <label for="default-radio-4"
                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Bank BNI</label>
                    </div>
                    <div class="flex flex-row items-center mb-[30px]">
                        <input id="default-radio-5" type="radio" value="BNK0005" name="bank_id"
                            class="w-4 h-4 text-[#497174] bg-gray-100 border-gray-300 focus:ring-[#497174] dark:focus:ring-[#497174] ">
                        <img src="{{ asset('images/bri.svg') }}" class="ml-[20px]" width="25px" height="25px">
                        <label for="default-radio-5"
                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Bank BRI</label>
                    </div>
                    <div class="flex flex-row items-center mb-[30px]">
                        <input checked id="default-radio-6" type="radio" value="BNK0006" name="bank_id"
                            class="w-4 h-4 text-[#497174] bg-gray-100 border-gray-300 focus:ring-[#497174] dark:focus:ring-[#497174]">
                        <img src="{{ asset('images/bsi.jpg') }}" class="ml-[20px]" width="25px" height="25px">
                        <label for="default-radio-6"
                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">BSI</label>
                    </div>
                    <div class="flex flex-row items-center mb-[30px]">
                        <input id="default-radio-7" type="radio" value="BNK0007" name="bank_id"
                            class="w-4 h-4 text-[#497174] bg-gray-100 border-gray-300 focus:ring-[#497174] dark:focus:ring-[#497174] ">
                        <img src="{{ asset('images/permata.png') }}" class="ml-[20px]" width="25px"
                            height="25px">
                        <label for="default-radio-7"
                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Bank Permata</label>
                    </div>
                    <div class="flex flex-row items-center">
                        <input checked id="default-radio-8" type="radio" value="BNK0008" name="bank_id"
                            class="w-4 h-4 text-[#497174] bg-gray-100 border-gray-300 focus:ring-[#497174] dark:focus:ring-[#497174]">
                        <img src="{{ asset('images/bank.svg') }}" class="ml-[20px]" width="25px" height="25px">
                        <label for="default-radio-8"
                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Other Bank</label>
                    </div>
                    <div class="flex flex-row mt-[25px]">
                        <div class="flex flex-col ml-[15px]">
                            <p class="d-inline-block font-bold text-[#675959] text-[16px]">Bank Account</p>
                        </div>
                        <div class="flex flex-col ml-[15px]">
                            <input type="text" name="bank_account" required="required"
                                class="border-black w-[200px] h-[25px]" value="{{ old('bank_account') }}">
                        </div>
                    </div>
                    <div class="flex flex-row mt-[25px]">
                        <div class="flex flex-col ml-[15px]">
                            <p class="d-inline-block font-bold text-[#675959] text-[16px]">Amount</p>
                        </div>
                        <div class="flex flex-col ml-[15px]">
                            <input type="text" name="amount" required="required"
                                class="border-black w-[200px] h-[25px] ml-[42px]" value="{{ old('amount') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-[#FFFFFF] w-[950px] ml-[150px] mr-[150px] mb-[60px] rounded-sm">
            <input type="Submit"
                class="bg-[#497174] text-[#d6e4e5] w-[196px] h-[40px] ml-[375px] mb-[30px] font-semibold rounded-sm"
                value="Submit">
        </div>
    </form>

</body>

</html>
