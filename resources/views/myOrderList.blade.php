<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- AlpineJS CDN -->
    <script src="//unpkg.com/alpinejs" defer></script>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet"
    />

    <style>
        body {
            font-family: "Plus Jakarta Sans", sans-serif;
        }
        [x-cloak] {
            display: none;
        }
    </style>

    <title>My Order List</title>
</head>
<body
    class="h-screen bg-fixed w-full bg-gradient-to-b from-[#497174] to-[#D6E4E5]"
>
    <nav
        class="relative flex flex-row w-full justify-between items-center h-24 mx-auto px-12 font-monserrat"
    >
        <div class="flex flex-row items-center gap-6">
            <a href="/vendor">
                <img
                src="{{ asset('images/backarrowvendor.svg') }}"
               alt="burger-logo"
                    class="w-[60px] h-[65px]"
                />
            </a>
            <a href="#">
                <img src="images/logo.png" alt="logo" class="w-2/3" />
            </a>
            <p
                class="text-white font-semibold text-[30px] -ml-6 border-l-4 border-white h-14 place-self-center pt-1 pl-4"
            >
                My Order List
            </p>
        </div>
    </nav>

    <!-- My Order List -->
    <section
        class="flex flex-col items-center justify-center w-10/12 text-center mx-auto mt-14 pb-24"
        x-data="{ tab: 'toPay' }"
        x-cloak
    >
        <div>
            <h1 class="text-[40px] font-semibold text-white">My Order List</h1>
        </div>

        <!-- Tab Option -->
        <div
            class="flex flex-row justify-between text-white font-medium text-3xl w-full mt-[116px] px-10"
        >
            <button
                class="h-20 w-28 border-b-[6px] border-transparent transition-all duration-200 ease-in-out"
                @click="tab = 'toPay'"
                x-bind:class="tab === 'toPay' ? 'border-white rounded-md' : ''"
            >
                To Pay
            </button>
            <button
                class="h-20 w-40 border-b-[6px] border-transparent transition-all duration-200 ease-in-out"
                @click="tab = 'toDeliver'"
                x-bind:class="tab === 'toDeliver' ? 'border-white rounded-md' : ''"
            >
                To Deliver
            </button>
            <button
                class="h-20 w-36 border-b-[6px] border-transparent transition-all duration-200 ease-in-out"
                @click="tab = 'toShip'"
                x-bind:class="tab === 'toShip' ? 'border-white rounded-md' : ''"
            >
                To Ship
            </button>
            <button
                class="h-20 w-40 border-b-[6px] border-transparent transition-all duration-200 ease-in-out"
                @click="tab = 'returned'"
                x-bind:class="tab === 'returned' ? 'border-white rounded-md' : ''"
            >
                Returned
            </button>
            <button
                class="h-20 w-48 border-b-[6px] border-transparent transition-all duration-200 ease-in-out"
                @click="tab = 'completed'"
                x-bind:class="tab === 'completed' ? 'border-white rounded-md' : ''"
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
                <img src="images/no-order.png" alt="no-order" />
            </div>

            <!-- To Deliver -->
            <div
                class="flex flex-col items-start justify-start px-14 2xl:px-28 py-16 2xl:py-24 w-full gap-16"
                x-show="tab === 'toDeliver'"
                x-transition
                x-cloak
            >
                <div class="flex flex-row justify-between items-center w-full">
                    <div class="flex flex-row items-center gap-8">
                        <img
                            src="images/order-1.png"
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
                            src="images/order-2.png"
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
                <div class="flex flex-row justify-between items-center w-full">
                    <div class="flex flex-row items-center gap-8">
                        <img
                            src="images/order-3.png"
                            alt="order-3"
                            class="w-[85px]"
                        />
                        <div
                            class="flex flex-col items-start text-[#675959] w-96 text-start gap-4"
                        >
                            <p class="text-lg font-medium">Kota Surabaya</p>
                            <h3 class="text-[22px] leading-none font-semibold">
                                Vampire Costume
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

            <!-- To Ship -->
            <div
                class="flex flex-col h-full items-center justify-center"
                x-show="tab === 'toShip'"
                x-transition
                x-cloak
            >
                <img src="images/no-order.png" alt="no-order" />
            </div>

            <!-- Returned -->
            <div
                class="flex flex-col h-full items-center justify-center"
                x-show="tab === 'returned'"
                x-transition
                x-cloak
            >
                <img src="images/no-order.png" alt="no-order" />
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
                            src="images/order-4.png"
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
                <div class="flex flex-row justify-between items-center w-full">
                    <div class="flex flex-row items-center gap-8">
                        <img
                            src="images/order-5.png"
                            alt="order-5"
                            class="w-[85px]"
                        />
                        <div
                            class="flex flex-col items-start text-[#675959] w-96 text-start gap-4"
                        >
                            <p class="text-lg font-medium">Kota Surabaya</p>
                            <h3 class="text-[22px] leading-none font-semibold">
                                One Piece Luffy Costume
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
</body>
</html>
