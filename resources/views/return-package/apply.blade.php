@extends('layouts.base')

@section('child-sheet')
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: linear-gradient(rgba(214, 228, 229, 1), rgba(249, 245, 242, 1));
            background-attachment: fixed;
        }

        /*
                        #gradient1{
                        background: linear-gradient(rgba(73, 113, 116, 1), rgba(239, 245, 245, 1));
                        background-attachment: fixed;
                        } */
        table {
            border-collapse: collapse;
            border-radius: 20px;
            box-shadow: 7px 7px 7px 3px;
            background-color: #ffffff;
            width: 100%;
            text-align: left;

        }

        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: #6b7280;
                color: rgba(107, 114, 128, var(--tw-text-opacity))
            }
        }
    </style>
@endsection

@section('title')
    Return Package Order #{{ $order->id }}
@endsection

@section('content')
    <nav class="">
        <div class="max-w-screen flex flex-wrap items-center justify-between mx-auto p-4">
            <div class="leftitem" style="display: flex; justify-content: center;">
                <a class="navbar-brand" href="/mypurchases">
                    <img src="{{ asset('images/backarrowcust.svg') }}" width="80" height="85"
                        class="d-inline-block align-text-">
                </a>
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('images/sejukcust.svg') }}" width="80" height="85"
                        class="d-inline-block align-text-">
                </a>
                <a class="navbar-brand">
                    <h4 class="d-inline-block align-text- font-semibold mt-4 text-[26px] text-[#675959]">Return Package</h4>
                </a>
            </div>
            <div class="sideitem" style="display: flex; justify-content: center;">
                <a class="navbar-brand" href="/profile">
                    <h4 class="d-inline-block align-text- text-[#675959] mr-[40px] text-[26px]"> {{ auth()->user()->name }}
                    </h4>
                </a>
            </div>
        </div>
    </nav>
    @foreach ($order->items as $item)
        <div class="mt-12 mx-8">
            <div class="bg-[#FFFFFF] ml-[15px] mr-[15px] rounded-md">
                <div class="flex flex-row ml-[28px]">
                    <div class="flex flex-col gap-[20px] ml-[28px]">
                        <img src="{{ asset('storage/' . $item->catalog->catalog_image) }}"
                            class="object-left mt-3" width=306px>
                    </div>
                    <div class="flex flex-col gap-x-[550px] ml-[28px]">
                        <div class="flex flex-row">
                            <p class="d-inline-block align-text- mt-[45px] text-[22px]">{{ $order->vendor->city }}</p>
                        </div>
                        <div class="flex flex-row">
                            <p class="d-inline-block align-text- mt-[8px] text-[22px] font-extrabold">
                                {{ $order->vendor->vendor_store }}</p>
                        </div>
                        <div class="flex flex-row">
                            <p class="d-inline-block align-text- mt-[8px] text-[26px] font-bold text-[#675959]">
                                {{ $item->catalog->item_name }}</p>
                        </div>
                    </div>
                    <div class="flex flex-col ml-[450px] mt-[105px]">
                        <div class="flex flex-row ml-[10px]">
                            <p class="d-inline-block align-text- text-[22px]">{{ $item->amount }}</p>
                        </div>
                        <div class="flex flex-row ml-[10px] mt-[175px]">
                            <p class="d-inline-block align-text- text-[22px] text-[#497174] font-bold">Total</p>
                        </div>
                    </div>
                    <div class="flex flex-col ml-[30px] mt-[105px]">
                        <div class="flex flex-row">
                            <p class="d-inline-block align-text- text-[22px]">Rp{{ $item->amount * $item->price }}</p>
                        </div>
                        <div class="flex flex-row mt-[175px]">
                            <p class="d-inline-block align-text- text-[22px] text-[#497174] font-bold">
                                Rp{{ $item->amount * $item->price }}</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row ml-[28px]">
                    <div class="flex flex-col gap-[20px] ml-[28px]">
                        <div class="w-[306px]"></div>
                    </div>

                </div>
    @endforeach
    </div>
    <div class="bg-[#FFFFFF] mt-[15px] ml-[15px] mr-[15px] pt-[20px] pb-[20px] rounded-sm">
        <div class="flex flex-row">
            <div class="flex flex-col ml-[28px]">
                <div class="flex flex-row">
                    <p class="d-inline-block align-text- font-bold text-[#675959] text-[26px]">Shipping Information</p>
                </div>
                <div class="flex flex-row mt-[12px]">
                    <p class="d-inline-block align-text- text-bold text-[#675959] text-[22px]">
                        {{ $order->shipping->shippingMethod->type }}</p>
                </div>
                <div class="flex flex-row">
                    <p class="d-inline-block align-text- text-bold text-[#675959] text-[22px]">
                        {{ $order->shipping->shippingMethod->name }}</p>
                </div>
                <div class="flex flex-row mt-4 font-semibold">
                    <p class="d-inline-block align-text- text-bold text-[#675959] text-[26px] mt-[30px]">Shop Address</p>
                </div>
                <div class="flex flex-row">
                    <p class="d-inline-block align-text- text-bold text-[#675959] text-[22px]">
                        {{ $order->shipping->customer_address }}</p>
                </div>
            </div>
            <div class="flex flex-col ml-[650px]">
                <div class="flex flex-row">
                    <p class="d-inline-block align-text- font-bold text-[#675959] text-[26px]">No. Resi</p>
                </div>
                <div class="flex flex-row mt-[22px]">
                    <p class="d-inline-block align-text- text-bold text-[#675959] text-[22px]">
                        {{ $order->shipping->no_resi }}</p>
                </div>
            </div>
        </div>
    </div>
    <form action="{{ route('order.return-package', ['id' => $order->id]) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="bg-[#FFFFFF] mt-[15px] ml-[15px] mr-[15px] pt-[20px] pb-[20px] rounded-sm">
            <div class="flex flex-row">
                <div class="flex flex-col my-8">
                    <div class="flex flex-row ml-[28px]">
                        <p class="d-inline-block align-text- font-bold text-[#675959] text-[26px]">Shipping Information
                        </p>
                    </div>
                    @if ($errors->has('no_resi'))
                        <div class="text-xl text-[#FE4A4A] text-extrabold ml-[28px] mt-2 mb-2">
                            <p>No. Resi is invalid</p>
                        </div>
                    @endif
                    @if ($errors->has('nama_kurir'))
                        <div class="text-xl text-[#FE4A4A] text-extrabold ml-[28px] mt-2 mb-2">
                            <p> Data is invalid</p>
                        </div>
                    @endif
                    <div class="flex flex-row ml-[28px] mt-[12px]">
                        <p class="d-inline-block align-text- font-bold text-[#675959] text-[22px]">Reguler</p>
                    </div>
                    <div class="flex flex-row ml-[28px]">
                        <select class="w-[450px] h-[33px] focus:outline-0 text-[18px]" aria-label="Default select example"
                            for="shipping_methods" id="shipping_methods" name="shipping_method_id">
                            <option selected disabled required>Choose your shipping methods</option>
                            @foreach ($shippingMethods as $shippingMethod)
                                <option value="{{ $shippingMethod->id }}">{{ $shippingMethod->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="flex flex-row ml-[28px] mt-4">
                        <input type="text" id="name_kurir" class=" w-[450px] h-[33px] focus:outline-0 text-[18px]"
                            name="nama_kurir" placeholder="Courrier Name">
                    </div>
                    <div class="flex flex-row ml-[28px] mt-4">
                        <input type="text" id="no_resi" class=" w-[450px] h-[33px] focus:outline-0 text-[18px]"
                            name="no_resi" placeholder="No. Resi">
                    </div>
                </div>
            </div>
        </div>
        <input type="submit"
            class="bg-[#497174] text-[#D6E4E5] font-semibold w-[250px] h-[75px] rounded-md ml-[950px] mt-[50px] mb-[55px] text-[20px] "
            value="Submit">
    </form>
    </div>
@endsection
