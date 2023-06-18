<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.cdnfonts.com/css/cormorant-2" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600&display=swap"
        rel="stylesheet" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet" />
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <title>LOG IN</title>
    <style>
        body {
            width: 100%;
            height: 100vh;
            font-family: "Plus Jakarta Sans", sans-serif;
        }

        .dropbtn {
            background-color: #D6E4E5;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            outline-style: outset;
            outline-color: #000000;
            width: 500px;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 400px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>

<body class="bg-blackoverflow-hidden h-screen overflow-hidden">

    <div class="flex flex-row">
        <div class="w-full">
            <img src="images/bg-signin.jpg" alt="">
        </div>
        <div class="w-full h-screen bg-[#fbf8f6]">
            <div class=" h-screen ml-[40px] mt-[-60px] mr-[20px]">
                <div class="flex gap-[30px] z-0  h-screen justify-center flex-col pb-1">
                    <h1 class="text-4xl font-semibold  text-[#050505] text-[60px] text-center">
                        FAQs
                    </h1>
                    <P class="text-center text-[25px]">Frequently Asked Questions</p>
                    <br>
                    <div class="dropdown">
                        <div class="flex flex-row items-center gap-3">
                            <img src="images/logo-dark.png" alt="logo" class="w-[54px] h-[47px]" />
                            <p class="text-[#050505] text-[20px] font-medium">
                                General
                            </p>
                        </div>
                        <div class="dropdown-content">
                            <h3 class="text-xl font-semibold text-black">
                                What is SEJUK?
                            </h3>
                            <p class="text-sm text-black">
                                SEJUK is a web application software that offers a clothing rental feature. The Sejuk
                                application providers a platform for vendors to list their rental products such as
                                clothes, customes, and other types of clothing. For application users, they can use the
                                SEJUK application as a medium to search for clothing rental and various types of
                                clothing they want.
                            </p>
                        </div>
                    </div>
                    <hr class="h-[2px] bg-black/10" />


                    <div class="dropdown">
                        <div class="flex flex-row items-center gap-5">
                            <img src="images/shipping-logo.png" alt="logo" class="w-[54px] h-[47px]" />
                            <p class="text-[#050505] text-[20px] font-medium">
                                Shipping
                            </p>
                        </div>
                        <div class="dropdown-content">
                            <h3 class="text-xl font-semibold text-black">
                                1. What are the shipping
                                options that SEJUK provide?
                            </h3>
                            <p class="text-sm text-black">
                                SEJUK provides regular
                                and economical shipping which can
                                be done using JNE, J&T,
                                SiCepat, and for instant shipping we provide GoSend.
                            </p>
                            <br>
                            <h3 class="text-xl font-semibold text-black">
                                2. Can the shipping option be
                                changed?
                            </h3>
                            <p class="text-sm text-black">
                                Shipping options cannot be
                                changed once the order has
                                been placed.
                            </p>
                        </div>
                    </div>
                    <hr class="h-[2px] bg-black/10" />


                    <div class="dropdown">
                        <div class="flex flex-row items-center gap-7">
                            <img src="images/payment-logo.png" alt="logo" class="w-[44px] h-[37px]" />
                            <p class="text-[#050505] text-[20px] font-medium">
                                Payment
                            </p>
                        </div>
                        <div class="dropdown-content">
                            <h3 class="text-xl font-semibold text-black">
                                1. What payment methods are
                                supported by SEJUK?
                            </h3>
                            <p class="text-sm text-black">
                                SEJUK supports 4 types of
                                payment methods, Bank Transfer (Virtual
                                Machine Account), and Credit
                                Card.
                            </p>
                            <br>
                            <h3 class="text-xl font-semibold text-black">
                                2. Can the payment method be
                                changed?
                            </h3>
                            <p class="text-sm text-black">
                                The payment method can be
                                changed at any time before
                                the payment is successfully
                                processed by SEJUK.
                            </p>
                            <br>
                            <h3 class="text-xl font-semibold text-black">
                                3. What happens if payment is
                                not made by the end of the
                                payment deadline?
                            </h3>
                            <p class="text-sm text-black">
                                The payment deadline for
                                each payment method is 24
                                hours after the order is
                                placed.
                            </p>
                        </div>
                    </div>
                    <hr class="h-[2px] bg-black/10" />

                    <div class="dropdown">
                        <div class="flex flex-row items-center gap-7">
                            <img src="images/return-logo.png" alt="logo" class="w-[44px] h-[37px]" />
                            <p class="text-[#050505] text-[20px] font-medium">
                                Return
                            </p>
                        </div>
                        <div class="dropdown-content">
                            <h3 class="text-xl font-semibold text-black">
                                1. How to submit a
                                product/money return
                                request?
                            </h3>
                            <p class="text-sm text-black">
                                Product/money return
                                requests can be made in the
                                order status section by
                                selecting the "submit a
                                return request" option.

                            </p>
                            <br>
                            <h3 class="text-xl font-semibold text-black">
                                2. How to send a package for
                                product return?
                            </h3>
                            <p class="text-sm text-black">
                                You can send the package
                                using the shipping option. Return shipping
                                can only be done using JNE,
                                J&T, SiCepat, and Anteraja,
                                it must be done within 5
                                days after the approval form
                                is received.
                            </p>
                        </div>
                    </div>
                    <hr class="h-[2px] bg-black/10" />
                </div>
            </div>
        </div>
</body>
