@extends('homepage-vendor.navbar')

@section('title')
    Homepage Vendor
@endsection

@section('child-sheet')
    <style>
        body {
            width: 100%;
            height: 100vh;
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: linear-gradient(rgba(73, 113, 116, 1), rgba(239, 245, 245, 1));
            background-attachment: fixed;
        }
    </style>
@endsection

@section('content')
    <body class="overflow-x-hidden">
    <!-- Hero -->
    <section class="flex flex-col justify-center items-start w-11/12 mx-auto mt-36 text-white">
        <div class="flex flex-col text-7xl">
            <h1 class="font-black">Welcome Back,</h1>
            <h1 class="font-medium">{{ auth()->guard('rentals')->user()->name }}</h1>
        </div>
        <div class="flex items-center text-center mx-auto gap-4 mt-[277px]">
            <p class="font-medium text-2xl">
                Scroll Down to see your Catalog
            </p>
            <img src="/images/arrow-down.png" alt="arrow-down" class="" />
        </div>
    </section>

    <!-- Catalog -->
    <section class="flex flex-col justify-center items-center w-11/12 mx-auto mt-[329px]">
        <!-- Clothes -->
        <div class="flex flex-col justify-center gap-20">
            <div
                class="flex flex-row text-white justify-between items-center gap-10 font-medium text-xl w-[75%] mx-auto">
                <div class="flex flex-row items-center gap-3">
                    <p class="whitespace-nowrap">Costume.id Categories</p>
                    <img src="/images/chevron-down.png" alt="chevron-down" class="mt-2 w-[20px]" />
                </div>
                <p>Haloween</p>
                <p>Promo</p>
                <p>Cosplay</p>
                <p>Kids Costume</p>
                <p>Edit</p>
                <p>
                    <img src="/images/add.png" alt="add" class="mt-[2px] w-[20px]" />
                </p>
            </div>
            <div class="flex flex-row justify-center flex-wrap items-center gap-8 mx-auto">
                <div class="flex flex-col items-center">
                    <img src="/images/shirt-1.png" alt="shirt" class="bg-[#DCE2E7] w-[348px] h-[303px]" />
                    <div class="flex flex-col justify-between items-start bg-white px-4 pb-6 pt-3 w-full h-[207px]">
                        <div>
                            <h3 class="text-3xl font-semibold">
                                Cotton T-Shirt
                            </h3>
                            <p class="text-xl mt-2 text-[#B7B7B7] font-semibold">
                                Woman Collection
                            </p>
                        </div>
                        <div>
                            <p class="text-2xl font-bold">Rp 250.000</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-center">
                    <img src="/images/shirt-1.png" alt="shirt" class="bg-[#DCE2E7] w-[348px] h-[303px]" />
                    <div class="flex flex-col justify-between items-start bg-white px-4 pb-6 pt-3 w-full h-[207px]">
                        <div>
                            <h3 class="text-3xl font-semibold">
                                Cotton T-Shirt
                            </h3>
                            <p class="text-xl mt-2 text-[#B7B7B7] font-semibold">
                                Woman Collection
                            </p>
                        </div>
                        <div>
                            <p class="text-2xl font-bold">Rp 250.000</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-center">
                    <img src="/images/shirt-1.png" alt="shirt" class="bg-[#DCE2E7] w-[348px] h-[303px]" />
                    <div class="flex flex-col justify-between items-start bg-white px-4 pb-6 pt-3 w-full h-[207px]">
                        <div>
                            <h3 class="text-3xl font-semibold">
                                Cotton T-Shirt
                            </h3>
                            <p class="text-xl mt-2 text-[#B7B7B7] font-semibold">
                                Woman Collection
                            </p>
                        </div>
                        <div>
                            <p class="text-2xl font-bold">Rp 250.000</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-center">
                    <img src="/images/shirt-1.png" alt="shirt" class="bg-[#DCE2E7] w-[348px] h-[303px]" />
                    <div class="flex flex-col justify-between items-start bg-white px-4 pb-6 pt-3 w-full h-[207px]">
                        <div>
                            <h3 class="text-3xl font-semibold">
                                Cotton T-Shirt
                            </h3>
                            <p class="text-xl mt-2 text-[#B7B7B7] font-semibold">
                                Woman Collection
                            </p>
                        </div>
                        <div>
                            <p class="text-2xl font-bold">Rp 250.000</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-center">
                    <img src="/images/shirt-1.png" alt="shirt" class="bg-[#DCE2E7] w-[348px] h-[303px]" />
                    <div class="flex flex-col justify-between items-start bg-white px-4 pb-6 pt-3 w-full h-[207px]">
                        <div>
                            <h3 class="text-3xl font-semibold">
                                Cotton T-Shirt
                            </h3>
                            <p class="text-xl mt-2 text-[#B7B7B7] font-semibold">
                                Woman Collection
                            </p>
                        </div>
                        <div>
                            <p class="text-2xl font-bold">Rp 250.000</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-center">
                    <img src="/images/shirt-1.png" alt="shirt" class="bg-[#DCE2E7] w-[348px] h-[303px]" />
                    <div class="flex flex-col justify-between items-start bg-white px-4 pb-6 pt-3 w-full h-[207px]">
                        <div>
                            <h3 class="text-3xl font-semibold">
                                Cotton T-Shirt
                            </h3>
                            <p class="text-xl mt-2 text-[#B7B7B7] font-semibold">
                                Woman Collection
                            </p>
                        </div>
                        <div>
                            <p class="text-2xl font-bold">Rp 250.000</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-center">
                    <img src="/images/shirt-1.png" alt="shirt" class="bg-[#DCE2E7] w-[348px] h-[303px]" />
                    <div class="flex flex-col justify-between items-start bg-white px-4 pb-6 pt-3 w-full h-[207px]">
                        <div>
                            <h3 class="text-3xl font-semibold">
                                Cotton T-Shirt
                            </h3>
                            <p class="text-xl mt-2 text-[#B7B7B7] font-semibold">
                                Woman Collection
                            </p>
                        </div>
                        <div>
                            <p class="text-2xl font-bold">Rp 250.000</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-center">
                    <img src="/images/shirt-1.png" alt="shirt" class="bg-[#DCE2E7] w-[348px] h-[303px]" />
                    <div class="flex flex-col justify-between items-start bg-white px-4 pb-6 pt-3 w-full h-[207px]">
                        <div>
                            <h3 class="text-3xl font-semibold">
                                Cotton T-Shirt
                            </h3>
                            <p class="text-xl mt-2 text-[#B7B7B7] font-semibold">
                                Woman Collection
                            </p>
                        </div>
                        <div>
                            <p class="text-2xl font-bold">Rp 250.000</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-center">
                    <img src="/images/shirt-1.png" alt="shirt" class="bg-[#DCE2E7] w-[348px] h-[303px]" />
                    <div class="flex flex-col justify-between items-start bg-white px-4 pb-6 pt-3 w-full h-[207px]">
                        <div>
                            <h3 class="text-3xl font-semibold">
                                Cotton T-Shirt
                            </h3>
                            <p class="text-xl mt-2 text-[#B7B7B7] font-semibold">
                                Woman Collection
                            </p>
                        </div>
                        <div>
                            <p class="text-2xl font-bold">Rp 250.000</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-center">
                    <img src="/images/shirt-1.png" alt="shirt" class="bg-[#DCE2E7] w-[348px] h-[303px]" />
                    <div class="flex flex-col justify-between items-start bg-white px-4 pb-6 pt-3 w-full h-[207px]">
                        <div>
                            <h3 class="text-3xl font-semibold">
                                Cotton T-Shirt
                            </h3>
                            <p class="text-xl mt-2 text-[#B7B7B7] font-semibold">
                                Woman Collection
                            </p>
                        </div>
                        <div>
                            <p class="text-2xl font-bold">Rp 250.000</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-center">
                    <img src="/images/shirt-1.png" alt="shirt" class="bg-[#DCE2E7] w-[348px] h-[303px]" />
                    <div class="flex flex-col justify-between items-start bg-white px-4 pb-6 pt-3 w-full h-[207px]">
                        <div>
                            <h3 class="text-3xl font-semibold">
                                Cotton T-Shirt
                            </h3>
                            <p class="text-xl mt-2 text-[#B7B7B7] font-semibold">
                                Woman Collection
                            </p>
                        </div>
                        <div>
                            <p class="text-2xl font-bold">Rp 250.000</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-center">
                    <img src="/images/shirt-1.png" alt="shirt" class="bg-[#DCE2E7] w-[348px] h-[303px]" />
                    <div class="flex flex-col justify-between items-start bg-white px-4 pb-6 pt-3 w-full h-[207px]">
                        <div>
                            <h3 class="text-3xl font-semibold">
                                Cotton T-Shirt
                            </h3>
                            <p class="text-xl mt-2 text-[#B7B7B7] font-semibold">
                                Woman Collection
                            </p>
                        </div>
                        <div>
                            <p class="text-2xl font-bold">Rp 250.000</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex felx-row gap-6 justify-center items-center">
                <a href="#">
                    <img src="/images/arrow-left-dark.png" alt="arrow-left" class="" />
                </a>
                <p class="text-black text-2xl font-semibold">1</p>
                <a href="#">
                    <img src="/images/arrow-right-dark.png" alt="arrow-right" class="" />
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <section
        class="flex flex-col items-center justify-center w-full bg-[#D9D9D9] text-2xl font-semibold pt-12 pb-24 text-center mt-[161px]">
        <img src="/images/logo-dark.png" alt="logo" class="" />
        <p class="max-w-5xl mt-5">
            Konsep Sejuk adalah menawarkan produk sewa baju dari berbagai
            toko dari seluruh Indonesia. Didirikan sejak 2022, Sejuk
            bertujuan untuk membantu bisnis sewa baju di Indonesia dengan
            memberikan layanan untuk mempermudah proses sewa baju.
        </p>
        <hr class="w-[500px] h-[2px] bg-black mt-9 mb-10" />
        <p>Made by Tasya, Indira, Nafisa, Nisa, and Mirza</p>
    </section>
    </body>
@endsection