<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <script src="https://cdn.tailwindcss.com"></script>
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
        </style>

        <title>Owner Account</title>
    </head>
    <body
        class="flex flex-col w-full min-h-screen bg-gradient-to-b from-[#497174] to-[#D6E4E5]"
    >
        <nav
            class="relative flex flex-row w-full justify-between items-center h-24 mx-auto px-12"
        >
            <div class="flex flex-row items-center gap-6">
                <a href="#">
                    <img
                        src="images/burger-logo.png"
                        alt="burger-logo"
                        class="w-8"
                    />
                </a>
                <a href="#">
                    <img src="images/logo.png" alt="logo" class="w-12" />
                </a>
            </div>
            <div class="flex flex-row items-center gap-8">
                <div class="relative flex flex-row items-center mr-8">
                    <input
                        type="text"
                        placeholder="CariBaju"
                        class="bg-white rounded-l-lg px-2 h-9 placeholder:text-sm w-96"
                    />
                    <button
                        class="flex items-center justify-center bg-[#497174] h-9 rounded-lg w-16 px-2 absolute z-50 -right-4"
                    >
                        <img
                            src="images/search-logo.png"
                            alt="search-logo"
                            class="w-1/3"
                        />
                    </button>
                </div>
                <a href="#">
                    <img
                        src="images/cart-logo.png"
                        alt="cart-logo"
                        class="w-10"
                    />
                </a>
                <a href="#">
                    <img
                        src="images/notification-logo.png"
                        alt="notif-logo"
                        class="w-10"
                    />
                </a>
                <a href="#">
                    <img
                        src="images/user-logo-white.png"
                        alt="user-logo"
                        class="w-10"
                    />
                </a>
            </div>
        </nav>
        @foreach ($users as $u)
        <div
            class="flex flex-col text-[#565656] justify-center items-start w-full max-w-6xl bg-white rounded-lg mx-auto my-20 p-6 pr-36"
        >
            <!-- Profile Data -->
            <div class="flex flex-col">
                <div class="flex flex-row items-center gap-6">
                    <img
                        src="images/user-logo-gray.png"
                        alt="user-logo"
                        class="w-20"
                    />
                    <div class="flex flex-col gap-1">
                        <h1 class="text-[40px] leading-none font-bold">
                            Customer.id
                        </h1>
                        <a
                            href="/editcustsunting"
                            class="flex flex-row items-center gap-2"
                        >
                            <img
                                src="images/edit-logo.png"
                                alt="user-logo"
                                class="w-6"
                            />
                            <p class="text-sm">Edit Profile</p>
                        </a>
                    </div>
                </div>
                <div class="flex flex-col pt-10 pb-8 gap-1">
                    <h2 class="text-3xl font-semibold">MyProfile</h2>
                    <p class="text-lg">
                        Manage your profile information to control, protect, and
                        secure your account.
                    </p>
                </div>
                <div class="flex flex-col gap-3">
                    <div class="flex flex-row text-xl">
                        <p class="w-48 font-semibold">Full Name</p>
                        <p class="text-lg">{{ $u->cuts_nama }}</p>
                    </div>
                    <div class="flex flex-row text-xl">
                        <p class="w-48 font-semibold">Email</p>
                        <p class="text-lg">{{ $u->email }}</p>
                    </div>
                    <div class="flex flex-row text-xl">
                        <p class="w-48 font-semibold">Phone Number</p>
                        <p class="text-lg">{{ $u->cust_phonenumber }}</p>
                    </div>
                </div>
            </div>
            <!-- Profile Data -->
            <!-- Payment Data -->
            <div class="flex flex-col pt-10 pb-6 gap-1">
                <h2 class="text-3xl font-semibold">CreditCard (max 2)</h2>
                <p class="text-lg">Manage your Credit Card</p>
            </div>
            <div class="flex flex-row justify-between w-full items-center">
                <div class="flex flex-col gap-6 w-full">
                    <div class="flex flex-row text-lg items-center justify-between w-full">
                        <div class="flex flex-row items-center">
                            <img
                                src="images/mastercard-logo.png"
                                alt="master-logo"
                                class="w-16"
                            />
                            <p class="ml-10">Master Card</p>
                            <p class="px-5 bg-[#497174] text-white ml-10">
                                Main
                            </p>
                        </div>
                        <div class="flex flex-row text-lg pr-10">
                            <p class="w-64">{{ $u->cust_Creditcardtype1 }}</p>
                            <button class="underline font-light">Delete</button>
                        </div>
                    </div>
                    <div class="flex flex-row text-lg items-center justify-between w-full">
                        <div class="flex flex-row items-center">
                            <img
                                src="images/visa-logo.png"
                                alt="visa-logo"
                                class="w-16"
                            />
                            <p class="ml-10">Visa</p>
                        </div>
                        <div class="flex flex-row text-lg pr-10">
                            <p class="w-64">{{ $u->cust_Creditcardtype2 }}</p>
                            <button class="underline font-light">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Payment Data -->
            <!-- Address Data -->
            <div class="flex flex-col pt-10 pb-6 gap-1">
                <h2 class="text-3xl font-semibold">Address</h2>
                <p class="text-lg">
                    <span class="font-bold">{{ $u->cuts_nama }} | </span>{{ $u->cust_homephone }}
                </p>
                <p class="text-lg">
                    {{ $u->cust_address }}
                </p>
            </div>
            <!-- Address Data -->
        </div>
        @endforeach
    </body>
</html>
