<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.cdnfonts.com/css/cormorant-2" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>signup</title>
</head>
<style>
    body {
        font-family: 'Plus Jakarta Sans', sans-serif;
        width: 100%;
        height: 100vh;
        background: linear-gradient(180deg, #FFFFFF 0%, #F9F5F2 100%);
    }
</style>

<body>
    <!-- nav start -->
    <nav>
        <div class="flex flex-row justify-between px-4 py-1">
            <div class="flex flex-row items-center">
                <i class="fa-solid fa-bars fa-2xl"></i>
                <img class="w-24" src="img/logo.svg" alt="">
            </div>
            <div class="flex flex-row items-center gap-4 mr-32">
                <div class="flex items-center gap-3">
                    <div class="w-16 h-16 flex items-center justify-center rounded-full bg-[#497174] ring-1 ring-black">
                        <h1 class="text-2xl font-semibold">1</h1>
                    </div>
                    <h1 class="font-semibold">Welcome</h1>
                </div>
                <hr class="border-none h-1 bg-[#BFB9B9] w-8">
                <div class="flex items-center gap-3">
                    <div
                        class="w-16 h-16 flex items-center justify-center rounded-full bg-[#497174] ring-1 ring-[#BFB9B9]">
                        <h1 class="text-2xl text-[#BFB9B9] font-semibold">2</h1>
                    </div>
                    <h1 class="text-[#BFB9B9] font-semibold">About You</h1>
                </div>
            </div>
        </div>
    </nav>
    <!-- nav end -->

    <form style="background: linear-gradient(180deg, #FFFFFF 0%, #F9F5F2 100%);" class="" x-on:submit="handleSubmit"
        x-data="{ 
             password: '',
            confirmPassword: '',
            passwordsMatch: false,
            fullname: '',
            isValidFullname: false,
            isValidPhone: false,
            phone: '',
            minPhoneLength: 8,
            invalid: false,
            incomplete: false,
                }" method="POST">
        <div x-show="invalid" class="fixed top-0 left-0 right-0 h-36 bg-white z-50" x-transition x-cloak>
            <div class="flex flex-col px-12 pt-4 pb-2">
                <h2 class="text-3xl font-bold text-[#FE4A4A]">
                    Data is Invalid / Belum Lengkap
                </h2>
                <p class="text-lg font-medium">Click OK to continue</p>
                <p class="ml-auto mt-4 px-8 py-0.5 border-2 shadow-xl border-b-4 border-b-slate-300 hove:brightness-75 cursor-pointer"
                    @click="invalid=false">
                    Ok
                </p>
            </div>
        </div>
        <div class="flex flex-col items-center justify-center">
            <div class="flex flex-col mt-16 items-center text-center gap-12 justify-center">
                <h1 class="text-3xl font-semibold">COMPLETE YOUR ACCOUNT</h1>
                <p class="text-[#BFB9B9] text-2xl w-[460px]">Please fill in a few details below about your business!</p>
            </div>
            <div>
                <input x-model="fullname" x-on:input="isValidFullname = fullname.trim() !== ''"
                    class="w-[600px] h-[102px] mt-12 ring-1 text-black focus:border-none ring-black bg-white focus:outline-none  placeholder:text-[#BFB9B9] text-xl pl-8"
                    placeholder="FULLNAME">
            </div>
            <div>
                <select name="city" id="city"
                    class="w-[600px] h-[102px] mt-12 ring-1 appearance-none focus:border-none ring-black bg-white focus:outline-none  text-xl pl-8">
                    <option value="Surabaya">Surabaya</option>
                    <option value="Jakarta">Jakarta</option>
                    <option value="Medan">Medan</option>
                </select>
            </div>
            <div class="relative mt-12 flex flex-row">
                <select
                    class="p-2 border border-r-0 text-xl h-[102px] border-black focus:outline-none bg-white text-gray-600 ">
                    <option>🇮🇩 +62</option>
                    <option>🇩🇪 +44</option>
                    <option>🇺🇸 +91</option>
                </select>
                <input x-model="phone" x-on:input="isValidPhone = phone.trim() !== '' && phone.length >= minPhoneLength"
                    type="text" class="border-l-0 p-2 border w-[503px] text-3xl h-[102px] border-black " />
            </div>
            <input placeholder="PASSWORD"
                class="w-[600px] h-[102px] mt-12 ring-1 focus:border-none ring-black bg-white focus:outline-none text-[#BFB9B9] text-xl pl-8"
                type="password" name="password" id="password" x-model="password"  x-on:input="passwordsMatch = (password === confirmPassword)">
            <input type="password" placeholder="VERIFY PASSWORD"
                class="w-[600px] h-[102px] mt-12 ring-1 focus:border-none ring-black bg-white focus:outline-none text-[#BFB9B9] text-xl pl-8"
                type="password" name="confirmPassword" id="confirmPassword" x-model="confirmPassword" x-on:input="passwordsMatch = (password === confirmPassword)">

            <div x-show="password !== '' && confirmPassword !== '' && !passwordsMatch" class="text-red-500 text-3xl mt-12 font-semibold">
                Passwords do not match
            </div>
            <p class="mt-12 text-xl">By entering your phone number, you agree to our
                <a class="font-bold hover:underline" href="#">Terms and Conditions.</a>
            </p>

<div class="flex flex-row gap-48 my-16">
    <button type="submit"
        class="w-[310px] h-[62px] hover:bg-slate-200 bg-white ring-1 ring-black text-3xl flex justify-center text-black placeholder:text-[#BFB9B9] items-center mr-4">
        NEXT
    </button>
</div>

        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.js" defer></script>

    <script>
        function handleSubmit(event) {
            const isValid =
                this.isValidFullname &&
                this.isValidPhone &&
                this.password === this.confirmPassword;

            if (!isValid) {
                this.invalid = true;
                event.preventDefault();
            } else {
                const formElement = event.target.closest("form");

                <!-- !Define where the data will be send here -->
                formElement.action = "/registervendornext";
                window.location.href = "/registervendornext";
            }
        }
    </script>

</body>

</html>