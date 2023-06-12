@extends('homepage.navbar')

@section('title')
    My Orders
@endsection

@section('content')
<div class="border-black rounded-md"></div>
<section
    class="flex flex-col items-center justify-center w-10/12 text-center mx-auto mt-14 pb-24"
    x-data="{ tab: 'toPay' }"
    x-cloak
>
    <div>
        <h1 class="text-[40px] font-semibold text-black">My Purchases</h1>
    </div>

    <!-- Tab Option -->
    <div
        class="flex flex-row justify-between text-black font-medium text-3xl w-full mt-[116px] px-10"
    >
        <button
            class="h-20 w-28 border-b-[6px] border-transparent transition-all duration-200 ease-in-out"
            @click="tab = 'toPay'"
            x-bind:class="tab === 'toPay' ? 'border-black rounded-md' : ''"
        >
            To Pay
        </button>
        <button
            class="h-20 w-36 border-b-[6px] border-transparent transition-all duration-200 ease-in-out"
            @click="tab = 'toShip'"
            x-bind:class="tab === 'toShip' ? 'border-black rounded-md' : ''"
        >
            To Ship
        </button>
        <button
            class="h-20 w-40 border-b-[6px] border-transparent transition-all duration-200 ease-in-out"
            @click="tab = 'toReturn'"
            x-bind:class="tab === 'toReturn' ? 'border-black rounded-md' : ''"
        >
            To Return
        </button>
        <button
            class="h-20 w-48 border-b-[6px] border-transparent transition-all duration-200 ease-in-out"
            @click="tab = 'completed'"
            x-bind:class="tab === 'completed' ? 'border-black rounded-md' : ''"
        >
            Completed
        </button>
    </div>

    <!-- Content -->
    <div
        class="flex flex-col w-full h-[1089px] rounded-[15px] bg-white mt-14"
        x-cloak
    >
        <!-- To Pay -->
        <div
            class="flex flex-col h-full items-center justify-center"
            x-show="tab === 'toPay'"
            x-transition
            x-cloak
        >
            <img src="/images/no-order.png" alt="no-order" />
        </div>

        <!-- To Ship -->
        <div
            class="flex flex-col items-start justify-start px-14 2xl:px-28 py-16 2xl:py-24 w-full gap-16"
            x-show="tab === 'toShip'"
            x-transition
            x-cloak
        >
            <div class="flex flex-row justify-between items-center w-full">
                <div class="flex flex-row items-center gap-8">
                    <img
                        src="/images/order-1.png"
                        alt="order-1"
                        class="w-[85px]"
                    />
                    <div
                        class="flex flex-col items-start text-[#675959] w-96 text-start gap-4"
                    >
                        <p class="text-lg font-medium">Kota Surabaya</p>
                        <h3 class="text-[22px] leading-none font-semibold">
                            Kostum Keqing Default Genshin Impact Cosplay
                        </h3>
                    </div>
                </div>
                <p class="text-lg font-extrabold text-[#675959] w-24">
                    luroidea
                </p>
                <p class="text-lg font-semibold text-[#675959] w-32">
                    Rp.875.600
                </p>
                <p class="text-lg font-semibold text-[#675959] w-12">1</p>
                <p class="text-lg font-bold text-[#497174] w-32">
                    Rp.875.600
                </p>
            </div>
            <div class="flex flex-row justify-between items-center w-full">
                <div class="flex flex-row items-center gap-8">
                    <img
                        src="/images/order-2.png"
                        alt="order-2"
                        class="w-[85px]"
                    />
                    <div
                        class="flex flex-col items-start text-[#675959] w-96 text-start gap-4"
                    >
                        <p class="text-lg font-medium">Kota Surabaya</p>
                        <h3 class="text-[22px] leading-none font-semibold">
                            Vintage Linen Shirt
                        </h3>
                    </div>
                </div>
                <p class="text-lg font-extrabold text-[#675959] w-24">
                    uniq
                </p>
                <p class="text-lg font-semibold text-[#675959] w-32">
                    Rp.200.000
                </p>
                <p class="text-lg font-semibold text-[#675959] w-12">1</p>
                <p class="text-lg font-bold text-[#497174] w-32">
                    Rp.200.000
                </p>
            </div>
        </div>

        <!-- To Return -->
        <div
            class="flex flex-col items-start justify-start px-14 2xl:px-28 py-16 2xl:py-24 w-full gap-16"
            x-show="tab === 'toReturn'"
            x-transition
            x-cloak
        >
            <div class="flex flex-row justify-between items-center w-full">
                <div class="flex flex-row items-center gap-8">
                    <img
                        src="/images/order-2.png"
                        alt="order-2"
                        class="w-[85px]"
                    />
                    <div
                        class="flex flex-col items-start text-[#675959] w-96 text-start gap-4"
                    >
                        <p class="text-lg font-medium">Kota Surabaya</p>
                        <h3 class="text-[22px] leading-none font-semibold">
                            Vintage Linen Shirt
                        </h3>
                    </div>
                </div>
                <p class="text-lg font-extrabold text-[#675959] w-24">
                    uniq
                </p>
                <p class="text-lg font-semibold text-[#675959] w-32">
                    Rp.200.000
                </p>
                <p class="text-lg font-semibold text-[#675959] w-12">1</p>
                <p class="text-lg font-bold text-[#497174] w-32">
                    Rp.200.000
                </p>
            </div>
        </div>

        <!-- Completed -->
        <div
            class="flex flex-col items-start justify-start px-14 2xl:px-28 py-16 2xl:py-24 w-full gap-16"
            x-show="tab === 'completed'"
            x-transition
            x-cloak
        >
            <div class="flex flex-row justify-between items-center w-full">
                <div class="flex flex-row items-center gap-8">
                    <img
                        src="/images/order-4.png"
                        alt="order-4"
                        class="w-[85px]"
                    />
                    <div
                        class="flex flex-col items-start text-[#675959] w-96 text-start gap-4"
                    >
                        <p class="text-lg font-medium">Kota Surabaya</p>
                        <h3 class="text-[22px] leading-none font-semibold">
                            Kostum Badut Tikus
                        </h3>
                    </div>
                </div>
                <p class="text-lg font-extrabold text-[#675959] w-24">
                    luroidea
                </p>
                <p class="text-lg font-semibold text-[#675959] w-32">
                    Rp.875.600
                </p>
                <p class="text-lg font-semibold text-[#675959] w-12">1</p>
                <p class="text-lg font-bold text-[#497174] w-32">
                    Rp.875.600
                </p>
            </div>
        </div>
    </div>
</section>
@endsection
