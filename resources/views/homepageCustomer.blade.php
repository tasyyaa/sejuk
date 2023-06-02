<!DOCTYPE html>
@extends('layout.navbarcust1')
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="https://cdn.tailwindcss.com"></script>

        <!-- Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
            rel="stylesheet"
        />
        <link
            href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet"
        />

        <style>
            nav {
                font-family: "Montserrat", sans-serif;
            }
            body {
                font-family: "Plus Jakarta Sans", sans-serif;
            }
        </style>

        <title>Home Page</title>
    </head>
    @section('content')
    <body
        class="h-screen bg-fixed w-full bg-gradient-to-b from-[#D6E4E5] to-[#F9F5F2]"
    >

        <!-- Hero -->
        <section class="flex flex-col justify-center items-center">
            <div class="flex flex-row justify-between mx-auto items-center">
                <div
                    class="flex flex-col items-center justify-center gap-16 w-1/3 pl-72 pb-32"
                >
                    <h1 class="text-5xl text-center whitespace-nowrap">
                        Wear new clothes every <br />
                        week without regret
                    </h1>
                </div>
                <div>
                    <img
                        src="images/hero.png"
                        alt="hero-logo"
                        class="w-[625px] 2xl:w-[825px] h-[800px] 2xl:h-[1000px]"
                    />
                </div>
            </div>
            <div
                class="flex flex-row justify-between items-center w-10/12 mx-auto bg-[#D6E4E5] rounded-t-[50px] px-32 py-4 -translate-y-[9.2rem]"
            >
                <div class="flex flex-row items-center justify-center gap-12">
                    <img
                        src="images/truck-logo.png"
                        alt="truck"
                        class="w-[135px] h-[130px]"
                    />
                    <h2
                        class="text-3xl text-[#497174] font-bold uppercase tracking-wide"
                    >
                        Free Delivery
                    </h2>
                </div>
                <div class="w-1 h-28 bg-[#497174]"></div>
                <div class="flex flex-row items-center justify-center gap-12">
                    <img
                        src="images/washing-logo.png"
                        alt="washing"
                        class="w-[128px] h-[129px]"
                    />
                    <h2
                        class="text-3xl text-[#497174] font-bold uppercase tracking-wide"
                    >
                        Free Dry Cleaning
                    </h2>
                </div>
            </div>
        </section>
        <!-- Catalog -->
        <section
            class="flex flex-col justify-center items-center w-11/12 mx-auto"
        >
            <!-- How it works -->
            <div class="flex flex-col justify-center items-center gap-20">
                <h2
                    class="text-4xl text-[#497174] font-bold uppercase tracking-wider"
                >
                    How It Works
                </h2>
                <div class="flex flex-row justify-between items-center gap-10">
                    <div class="flex flex-col items-center gap-6">
                        <img src="images/hit-1.png" alt="hit" class="" />
                        <p class="text-xl font-medium">Rent / Buy</p>
                    </div>
                    <div class="flex flex-col items-center gap-6">
                        <img src="images/hit-2.png" alt="hit" class="" />
                        <p class="text-xl font-medium">Wear</p>
                    </div>
                    <div class="flex flex-col items-center gap-6">
                        <img src="images/hit-3.png" alt="hit" class="" />
                        <p class="text-xl font-medium">Repeat</p>
                    </div>
                </div>
            </div>

            <!-- Clothes -->
            <div class="flex flex-col justify-center gap-12 mt-20">
                <h2
                    class="text-4xl text-left text-[#497174] font-bold uppercase tracking-wider"
                >
                    Clothes
                </h2>
                <div
                    class="flex flex-row justify-between items-center gap-10 w-11/12 mx-auto"
                >
                    <div class="flex flex-col items-center">
                        <img
                            src="images/clothes-1.png"
                            alt="clothes"
                            class="bg-[#DCE2E7]"
                        />
                        <div
                            class="flex flex-col justify-between items-start bg-white px-2 pb-8 pt-2 w-full h-[198px]"
                        >
                            <div>
                                <h3 class="text-base font-semibold">
                                    Cotton T-Shirt
                                </h3>
                                <p
                                    class="text-[10px] text-[#B7B7B7] font-semibold"
                                >
                                    Woman Collection
                                </p>
                            </div>
                            <div>
                                <p class="text-sm font-bold">Rp 250.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col items-center">
                        <img
                            src="images/clothes-2.png"
                            alt="clothes"
                            class="bg-[#DCE2E7]"
                        />
                        <div
                            class="flex flex-col justify-between items-start bg-white px-2 pb-8 pt-2 w-full h-[198px]"
                        >
                            <div>
                                <h3 class="text-base font-semibold">
                                    Cotton T-Shirt
                                </h3>
                                <p
                                    class="text-[10px] text-[#B7B7B7] font-semibold"
                                >
                                    Woman Collection
                                </p>
                            </div>
                            <div>
                                <p class="text-sm font-bold">Rp 250.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col items-center">
                        <img
                            src="images/clothes-3.png"
                            alt="clothes"
                            class="bg-[#DCE2E7]"
                        />
                        <div
                            class="flex flex-col justify-between items-start bg-white px-2 pb-8 pt-2 w-full h-[198px]"
                        >
                            <div>
                                <h3 class="text-base font-semibold">
                                    Cotton T-Shirt
                                </h3>
                                <p
                                    class="text-[10px] text-[#B7B7B7] font-semibold"
                                >
                                    Woman Collection
                                </p>
                            </div>
                            <div>
                                <p class="text-sm font-bold">Rp 250.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col items-center">
                        <img
                            src="images/clothes-4.png"
                            alt="clothes"
                            class="bg-[#DCE2E7]"
                        />
                        <div
                            class="flex flex-col justify-between items-start bg-white px-2 pb-8 pt-2 w-full h-[198px]"
                        >
                            <div>
                                <h3 class="text-base font-semibold">
                                    Cotton T-Shirt
                                </h3>
                                <p
                                    class="text-[10px] text-[#B7B7B7] font-semibold"
                                >
                                    Woman Collection
                                </p>
                            </div>
                            <div>
                                <p class="text-sm font-bold">Rp 250.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col items-center">
                        <img
                            src="images/clothes-5.png"
                            alt="clothes"
                            class="bg-[#DCE2E7]"
                        />
                        <div
                            class="flex flex-col justify-between items-start bg-white px-2 pb-8 pt-2 w-full h-[198px]"
                        >
                            <div>
                                <h3 class="text-base font-semibold">
                                    Cotton T-Shirt
                                </h3>
                                <p
                                    class="text-[10px] text-[#B7B7B7] font-semibold"
                                >
                                    Woman Collection
                                </p>
                            </div>
                            <div>
                                <p class="text-sm font-bold">Rp 250.000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Costumes -->
            <div class="flex flex-col justify-center gap-12 mt-20">
                <h2
                    class="text-4xl text-left text-[#497174] font-bold uppercase tracking-wider"
                >
                    Costumes
                </h2>
                <div
                    class="flex flex-row justify-between items-center gap-10 w-11/12 mx-auto"
                >
                    <div class="flex flex-col items-center">
                        <img
                            src="images/clothes-1.png"
                            alt="clothes"
                            class="bg-[#DCE2E7]"
                        />
                        <div
                            class="flex flex-col justify-between items-start bg-white px-2 pb-8 pt-2 w-full h-[198px]"
                        >
                            <div>
                                <h3 class="text-base font-semibold">
                                    Cotton T-Shirt
                                </h3>
                                <p
                                    class="text-[10px] text-[#B7B7B7] font-semibold"
                                >
                                    Woman Collection
                                </p>
                            </div>
                            <div>
                                <p class="text-sm font-bold">Rp 250.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col items-center">
                        <img
                            src="images/clothes-2.png"
                            alt="clothes"
                            class="bg-[#DCE2E7]"
                        />
                        <div
                            class="flex flex-col justify-between items-start bg-white px-2 pb-8 pt-2 w-full h-[198px]"
                        >
                            <div>
                                <h3 class="text-base font-semibold">
                                    Cotton T-Shirt
                                </h3>
                                <p
                                    class="text-[10px] text-[#B7B7B7] font-semibold"
                                >
                                    Woman Collection
                                </p>
                            </div>
                            <div>
                                <p class="text-sm font-bold">Rp 250.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col items-center">
                        <img
                            src="images/clothes-3.png"
                            alt="clothes"
                            class="bg-[#DCE2E7]"
                        />
                        <div
                            class="flex flex-col justify-between items-start bg-white px-2 pb-8 pt-2 w-full h-[198px]"
                        >
                            <div>
                                <h3 class="text-base font-semibold">
                                    Cotton T-Shirt
                                </h3>
                                <p
                                    class="text-[10px] text-[#B7B7B7] font-semibold"
                                >
                                    Woman Collection
                                </p>
                            </div>
                            <div>
                                <p class="text-sm font-bold">Rp 250.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col items-center">
                        <img
                            src="images/clothes-4.png"
                            alt="clothes"
                            class="bg-[#DCE2E7]"
                        />
                        <div
                            class="flex flex-col justify-between items-start bg-white px-2 pb-8 pt-2 w-full h-[198px]"
                        >
                            <div>
                                <h3 class="text-base font-semibold">
                                    Cotton T-Shirt
                                </h3>
                                <p
                                    class="text-[10px] text-[#B7B7B7] font-semibold"
                                >
                                    Woman Collection
                                </p>
                            </div>
                            <div>
                                <p class="text-sm font-bold">Rp 250.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col items-center">
                        <img
                            src="images/clothes-5.png"
                            alt="clothes"
                            class="bg-[#DCE2E7]"
                        />
                        <div
                            class="flex flex-col justify-between items-start bg-white px-2 pb-8 pt-2 w-full h-[198px]"
                        >
                            <div>
                                <h3 class="text-base font-semibold">
                                    Cotton T-Shirt
                                </h3>
                                <p
                                    class="text-[10px] text-[#B7B7B7] font-semibold"
                                >
                                    Woman Collection
                                </p>
                            </div>
                            <div>
                                <p class="text-sm font-bold">Rp 250.000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Featured Designers -->
        <section
            class="flex flex-col jsutify-center items-center mt-[5.2rem] pb-14"
        >
            <h2
                class="text-4xl text-[#BFB9B9] font-bold uppercase tracking-wider"
            >
                Featured Designers
            </h2>
            <div class="mt-9">
                <img
                    src="images/designers.png"
                    alt="clothes"
                    class="w-[1156px] h-[584px]"
                />
            </div>
        </section>
    </body>
    @endsection
</html>
