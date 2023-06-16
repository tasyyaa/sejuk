@extends('layouts.base')

@section('title')
    Accept Payment
@endsection
@section('child-sheet')
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: linear-gradient(rgba(73, 113, 116, 1), rgba(239, 245, 245, 1));
            background-attachment: fixed;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
    </style>
@endsection
@section('content')
    <nav class="">
        <div class="max-w-screen flex flex-wrap items-center justify-between mx-auto p-4">
            <div class="leftitem" style="display: flex; justify-content: center;">
                <a class="navbar-brand" href="/vendor/myorderlist">
                    <img src="{{ asset('images/backarrowvendor.svg') }}" width="60" height="65"
                        class="d-inline-block align-text-">
                </a>
                <a class="navbar-brand" href="/vendor">
                    <img src="{{ asset('images/sejuk1.png') }}" width="40" height="45"
                        class="d-inline-block align-text-">
                </a>
                <a class="navbar-brand">
                    <h4 class="d-inline-block align-text- mt-2 text-white ml-[8px] text-[26px]"> Accept Payment</h4>
                </a>
            </div>
            <div class="sideitem" style="display: flex; justify-content: center;margin-left:10px;">
                <a class="navbar-brand mr-[60px]" href="/vendor/profile">
                    <img src="{{ asset('images/3.png') }}" width="60" height="65">
                </a>
            </div>
        </div>
    </nav>
    <form action="{{ route('accept-payment', ['id' => $order->id]) }}" method="post">
        {{ csrf_field() }}
        <div class="flex  bg-[#FFFFFF] w-[1100px] h-[750px] ml-[225px] mr-[200px] mt-[60px]  rounded-sm">
            <div class="flex flex-col">
                <div class="flex flex-row mt-[15px]">
                    <div class="flex flex-col">
                        <div class="flex justify-center items-center bg-[#497174] w-[80px] h-[30px] ml-[8px]  mt-[4px] rounded-md">
                            <p class="d-inline-block font-bold text-[#FFFFFF] text-[14px] items-center justify-center">
                                #{{ $order->id }}</p>
                        </div>
                    </div>
                    <div class="flex flex-col ml-[12px]">
                        <p class="d-inline-block font-bold text-[#000000] text-[26px]">Accept Payment For Order
                            #{{ $order->id }}</p>
                    </div>
                </div>
                @if ($errors->any())
                    <div class="text-[20px] text-[#FE4A4A] text-extrabold ml-[20px] mt-[8px]">
                        Data is Invalid
                    </div>
                @endif
                <div class="flex flex-col mt-[20px] ml-[15px]">
                    <div class="flex flex-row">
                        <p class="d-inline-block font-bold text-[#675959] text-[26px]">Select Bank</p>
                    </div>
                    <div class="flex flex-row items-center mt-[30px] mb-[30px]">
                        <input id="default-radio-1" type="radio" value="Seabank" name="bank_name"
                            class="w-4 h-4 text-[#497174] bg-gray-100 border-gray-300 focus:ring-[#497174] dark:focus:ring-[#497174] ">
                        <img src="{{ asset('images/seabank.png') }}" class="ml-[20px]" width="25px" height="25px">

                        <label for="default-radio-1" class="ml-2 text-xl font-medium text-black">Seabank</label>
                    </div>
                    <div class="flex flex-row items-center mb-[30px]">
                        <input checked id="default-radio-2" type="radio" value="Bank BCA" name="bank_name"
                            class="w-4 h-4 text-[#497174] bg-gray-100 border-gray-300 focus:ring-[#497174] dark:focus:ring-[#497174] ">
                        <img src="{{ asset('images/bca.png') }}" class="ml-[20px]" width="25px" height="25px">
                        <label for="default-radio-2" class="ml-2 text-xl font-medium text-gray-900 dark:text-gray-300">Bank
                            BCA</label>
                    </div>
                    <div class="flex flex-row items-center mb-[30px]">
                        <input id="default-radio-3" type="radio" value="Bank Mandiri" name="bank_name"
                            class="w-4 h-4 text-[#497174] bg-gray-100 border-gray-300 focus:ring-[#497174] dark:focus:ring-[#497174] ">
                        <img src="{{ asset('images/mandiri.png') }}" class="ml-[20px]" width="25px" height="25px">
                        <label for="default-radio-3" class="ml-2 text-xl font-medium text-gray-900 dark:text-gray-300">Bank
                            Mandiri</label>
                    </div>
                    <div class="flex flex-row items-center mb-[30px]">
                        <input checked id="default-radio-4" type="radio" value="Bank BNI" name="bank_name"
                            class="w-4 h-4 text-[#497174] bg-gray-100 border-gray-300 focus:ring-[#497174] dark:focus:ring-[#497174] ">
                        <img src="{{ asset('images/bni.png') }}" class="ml-[20px]" width="25px" height="25px">
                        <label for="default-radio-4" class="ml-2 text-xl font-medium text-gray-900 dark:text-gray-300">Bank
                            BNI</label>
                    </div>
                    <div class="flex flex-row items-center mb-[30px]">
                        <input id="default-radio-5" type="radio" value="Bank BRI" name="bank_name"
                            class="w-4 h-4 text-[#497174] bg-gray-100 border-gray-300 focus:ring-[#497174] dark:focus:ring-[#497174] ">
                        <img src="{{ asset('images/bri.svg') }}" class="ml-[20px]" width="25px" height="25px">
                        <label for="default-radio-5" class="ml-2 text-xl font-medium text-gray-900 dark:text-gray-300">Bank
                            BRI</label>
                    </div>
                    <div class="flex flex-row items-center mb-[30px]">
                        <input checked id="default-radio-6" type="radio" value="Bank BSI" name="bank_name"
                            class="w-4 h-4 text-[#497174] bg-gray-100 border-gray-300 focus:ring-[#497174] dark:focus:ring-[#497174]">
                        <img src="{{ asset('images/bsi.jpg') }}" class="ml-[20px]" width="25px" height="25px">
                        <label for="default-radio-6"
                            class="ml-2 text-xl font-medium text-gray-900 dark:text-gray-300">BSI</label>
                    </div>
                    <div class="flex flex-row items-center mb-[30px]">
                        <input id="default-radio-7" type="radio" value="Bank Permata" name="bank_name"
                            class="w-4 h-4 text-[#497174] bg-gray-100 border-gray-300 focus:ring-[#497174] dark:focus:ring-[#497174] ">
                        <img src="{{ asset('images/permata.png') }}" class="ml-[20px]" width="25px" height="25px">
                        <label for="default-radio-7"
                            class="ml-2 text-xl font-medium text-gray-900 dark:text-gray-300">Bank
                            Permata</label>
                    </div>
                    <div class="flex flex-row items-center">
                        <input checked id="default-radio-8" type="radio" value="Other Bank" name="bank_name"
                            class="w-4 h-4 text-[#497174] bg-gray-100 border-gray-300 focus:ring-[#497174] dark:focus:ring-[#497174]">
                        <img src="{{ asset('images/bank.svg') }}" class="ml-[20px]" width="25px" height="25px">
                        <label for="default-radio-8"
                            class="ml-2 text-xl font-medium text-gray-900 dark:text-gray-300">Other Bank</label>
                    </div>
                    <div class="flex flex-row mt-[25px]">
                        <div class="flex flex-col ml-[12px]">
                            <p class="d-inline-block font-bold text-[#675959] text-[22px]">Bank Account Name</p>
                        </div>
                        <div class="flex flex-col ml-[38px]">
                            <input type="text" name="bank_account_name"
                                class="border-black w-[200px] h-[35px]" value="{{ old('bank_account_name') }}">
                        </div>
                    </div>
                    <div class="flex flex-row mt-[25px]">
                        <div class="flex flex-col ml-[12px]">
                            <p class="d-inline-block font-bold text-[#675959] text-[22px]">Bank Account Number</p>
                        </div>
                        <div class="flex flex-col ml-[15px]">
                            <input type="text" name="bank_account_number"
                                class="border-black w-[200px] h-[35px]" value="{{ old('bank_account_number') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-[#FFFFFF] w-[1100px] ml-[225px]  mr-[200px] mb-[60px] rounded-sm">
            <input type="Submit"
                class="bg-[#497174] text-[#d6e4e5] w-[250px] h-[50px] ml-[450px] mb-[30px] text-[20px] font-semibold rounded-sm"
                value="Submit">
        </div>
    </form>
@endsection
