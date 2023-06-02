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
        rel="stylesheet" />

    <style>
        body {
            font-family: "Plus Jakarta Sans", sans-serif;
        }

        [x-cloak] {
            display: none;
        }
    </style>

    <title>Edit Owner Account Invalid</title>
</head>

<body class="flex flex-col w-full min-h-screen bg-gradient-to-b from-[#497174] to-[#D6E4E5]">
    <nav class="relative flex flex-row w-full justify-between items-center h-24 mx-auto px-12">
        <div class="flex flex-row items-center gap-6">
            <a href="#">
                <img src="images/burger-logo.png" alt="burger-logo" class="w-8" />
            </a>
            <a href="#">
                <img src="images/logo.png" alt="logo" class="w-12" />
            </a>
        </div>
        <div class="flex flex-row items-center gap-8">
            <div class="relative flex flex-row items-center mr-8">
                <input type="text" placeholder="CariBaju"
                    class="bg-white rounded-l-lg px-2 h-9 placeholder:text-sm w-96" />
                <button
                    class="flex items-center justify-center bg-[#497174] h-9 rounded-lg w-16 px-2 absolute z-50 -right-4">
                    <img src="images/search-logo.png" alt="search-logo" class="w-1/3" />
                </button>
            </div>
            <a href="#">
                <img src="images/cart-logo.png" alt="cart-logo" class="w-10" />
            </a>
            <a href="#">
                <img src="images/notification-logo.png" alt="notif-logo" class="w-10" />
            </a>
            <a href="#">
                <img src="images/user-logo-white.png" alt="user-logo" class="w-10" />
            </a>
        </div>
    </nav>
    @foreach ($users as $u)
        <form x-on:submit="handleSubmit" action="/editcustsunting/store" method="POST"
            class="flex flex-col text-[#565656] justify-center items-start w-full max-w-6xl bg-white rounded-lg mx-auto my-20 pb-12"
            x-data="{
                fullname: '',
                isValidFullname: false,
                email: '',
                isValidEmail: false,
                phone: '',
                isValidPhone: false,
                minPhoneLength: 10,
                visa: '',
                isValidVisa: false,
                minVisaLength: 16,
                mastercard: '',
                isValidMastercard: false,
                minMastercardLength: 16,
                homephone: '',
                isValidHomephone: false,
                minHomephoneLength: 8,
                address: '',
                isValidAddress: false,
                incomplete: false,
                invalid: false,
            }">
            {{ csrf_field() }}
            <!-- Invalid -->
            <div x-show="invalid" class="fixed top-0 left-0 right-0 h-36 bg-white z-50" x-transition x-cloak>
                <div class="flex flex-col px-12 pt-4 pb-2">
                    <h2 class="text-3xl font-bold text-[#FE4A4A]">
                        Data is Invalid
                    </h2>
                    <p class="text-lg font-medium">Click OK to continue</p>
                    <p class="ml-auto mt-4 px-8 py-0.5 border-2 shadow-xl border-b-4 border-b-slate-300 hove:brightness-75 cursor-pointer"
                        @click="invalid=false">
                        Ok
                    </p>
                </div>
            </div>
            <!-- Invalid -->

            <div class="flex flex-col w-full pr-36 p-6">
                <!-- Profile Data -->
                <div class="flex flex-col">
                    <div class="flex flex-row items-center gap-6">
                        <img src="images/user-logo-gray.png" alt="user-logo" class="w-20" />
                        <div class="flex flex-col gap-1">
                            <h1 class="text-[40px] leading-none font-bold">
                                Customer.id
                            </h1>
                        </div>
                    </div>
                    <div class="flex flex-col pt-10 pb-8 gap-1">
                        <h2 class="text-3xl font-semibold">MyProfile</h2>
                        <p class="text-lg">
                            Manage your profile information to control, protect,
                            and secure your account.
                        </p>
                    </div>
                    <div class="flex flex-col gap-3 text-xl">
                        <div class="flex flex-row items-center">
                            <label for="fullname" class="w-48 font-semibold">Full Name</label>
                            <input type="text" name="fullname" id="fullname" value="{{ old('name') }}"
                                class="border-[1px] border-black px-2 w-96 text-lg" x-model="fullname"
                                x-on:input="isValidFullname = fullname.trim() !== ''" />
                            <img src="images/edit-logo-light.png" alt="edit-logo" class="w-4 ml-4" />
                        </div>
                        <div class="flex flex-row items-center">
                            <label for="email" class="w-48 font-semibold">Email</label>
                            <input type="email" name="email" id="email" placeholder="Customerid@gmail.com"
                                class="border-[1px] border-black px-2 w-96 text-lg" x-model="email"
                                x-on:input="isValidEmail = email.trim() !== ''" />
                            <img src="images/edit-logo-light.png" alt="edit-logo" class="w-4 ml-4" />
                        </div>
                        <div class="flex flex-row items-center">
                            <label for="phone" class="w-48 font-semibold">Phone Number</label>
                            <input type="text" name="phone" id="phone" placeholder="+62812778348"
                                class="border-[1px] border-black px-2 w-96 text-lg" x-model="phone"
                                x-on:input="isValidPhone = phone.trim() !== '' && phone.length >= minPhoneLength" />
                            <img src="images/edit-logo-light.png" alt="edit-logo" class="w-4 ml-4" />
                        </div>
                    </div>
                </div>
                <!-- Profile Data -->

                <!-- Payment Data -->
                <div class="flex flex-col pt-10 pb-6 gap-1">
                    <h2 class="text-3xl font-semibold">CreditCard (max 2)</h2>
                    <p class="text-lg">Manage your Credit Card</p>
                </div>
                <div class="flex flex-row justify-between w-full">
                    <div class="flex flex-col gap-6 w-full">
                        <div class="flex flex-row text-lg items-center justify-between w-full">
                            <div class="flex flex-row items-center">
                                <img src="images/mastercard-logo.png" alt="master-logo" class="w-16" />
                                <label for="master" class="ml-10">Master Card</label>
                                <p class="px-5 bg-[#497174] text-white ml-10">
                                    Main
                                </p>
                            </div>
                            <div class="flex flex-row text-lg pr-10 items-center">
                                <input type="text" name="mastercard" id="mastercard"
                                    placeholder="**** **** **** 7778"
                                    class="border-[1px] border-black px-2 w-48 text-lg" x-model="mastercard"
                                    x-on:input="isValidMastercard = mastercard.trim() !== '' && mastercard.length >= minMastercardLength" />
                                <img src="images/edit-logo-light.png" alt="edit-logo" class="w-4 ml-4" />
                                <button class="underline font-light ml-12">
                                    Done
                                </button>
                            </div>
                        </div>
                        <div class="flex flex-row text-lg items-center justify-between w-full">
                            <div class="flex flex-row items-center">
                                <img src="images/visa-logo.png" alt="visa-logo" class="w-16" />
                                <label for="visa" class="ml-10">Visa</label>
                            </div>
                            <div class="flex flex-row text-lg pr-10 items-center">
                                <input type="text" name="visa" id="visa"
                                    placeholder="**** **** **** 1010"
                                    class="border-[1px] border-black px-2 w-48 text-lg" x-model="visa"
                                    x-on:input="isValidVisa = visa.trim() !== '' && visa.length >= minVisaLength" />
                                <img src="images/edit-logo-light.png" alt="edit-logo" class="w-4 ml-4" />
                                <button class="underline font-light ml-12">
                                    Done
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Payment Data -->
                <!-- Address Data -->
                <div class="flex flex-col pt-10 pb-6 gap-1">
                    <h2 class="text-3xl font-semibold">Address</h2>
                    <div class="flex flex-row items-center">
                        <input type="text" name="homephone" id="homephone" placeholder="+6281277346724"
                            class="border-[1px] border-black px-2 w-[550px] text-lg" x-model="homephone"
                            x-on:input="isValidHomephone = homephone.trim() !== '' && homephone.length >= minHomephoneLength" />
                        <img src="images/edit-logo-light.png" alt="edit-logo" class="w-4 ml-4" />
                    </div>
                    <div class="flex flex-row items-center">
                        <input type="text" name="address" id="address"
                            placeholder="Jalan Teknik Sipil, Keputih, Sukolilo, Surabaya, Jawa Timur, 60111"
                            class="border-[1px] border-black px-2 w-[550px] text-lg" x-model="address"
                            x-on:input="isValidAddress = address.trim() !== ''" />
                        <img src="images/edit-logo-light.png" alt="edit-logo" class="w-4 ml-4" />
                    </div>
                    <button class="flex flex-row items-center pt-4">
                        <img src="images/add-logo.png" alt="add-logo" class="w-8" />
                        <p class="font-semibold ml-3">Add More</p>
                    </button>
                </div>
            </div>
            <!-- Address Data -->

            <button type="submit"
                class="font-bold text-xl uppercase text-white px-12 py-1 bg-[#497174] mx-auto mt-20 hover:brightness-75">
                Submit
            </button>
        </form>
    @endforeach
</body>
<script>
    function handleSubmit(event) {
        const isValid =
            this.isValidFullname &&
            this.isValidEmail &&
            this.isValidPhone &&
            this.isValidHomephone &&
            this.isValidAddress;

        if (!isValid) {
            this.invalid = true;
            event.preventDefault();
        } else {
            const formElement = event.target.closest("form");

            <
            !--!Define where the data will be send here-- >
            formElement.action = "/editcustsunting/store";
        }
    }
</script>

</html>
