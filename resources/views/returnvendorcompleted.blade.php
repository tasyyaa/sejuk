<!DOCTYPE html>
<html>

<head>
    <title>Add Costume</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
    </script> -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600&display=swap" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
        integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous">
    </script>
    <style>
        body {
            background: linear-gradient(rgba(73, 113, 116, 1), rgba(239, 245, 245, 1));
            background-attachment: fixed;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: rgb(252, 226, 226);
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 20px;
            color: #605d5d;
            display: block;
            transition: 0.2s;
        }

        .sidenav a:hover {
            color: #ffffff;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }


        @media screen and (max-height: 475px) {
            .sidenav {
                padding-top: 15px;
            }

            .sidenav a {
                font-size: 18px;
            }
        }
    </style>

</head>

<body>
    <!-- navbar -->
    <nav class="">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <div class="leftitem" style="display: flex; justify-content: center;">
                <a class="navbar-brand" href="">
                    <img src="{{ asset('images/backarrowvendor.svg') }}" width="60" height="65"
                        class="d-inline-block align-text-">
                </a>
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('images/logo.png') }}" width="40" height="45"
                        class="d-inline-block align-text-">
                </a>
                <p
                    class="text-white font-medium text-[30px] ml-6 border-l-4 border-white h-14 place-self-center pt-1 pl-4">
                    Return
                </p>
            </div>
            <div class="sideitem" style="display: flex; justify-content: center;margin-left:10px;">
                <a class="navbar-brand" href="/notifications" style="margin:0px 0px 0px 20px;">
                    <img src="{{ asset('images/notifications.svg') }}" width="30" height="24">
                </a>
                <a class="navbar-brand" href="/vendorAccount" style="margin:0px 0px 0px 20px;">
                    <img src="{{ asset('images/3.png') }}" width="30" height="24">
                </a>
            </div>
        </div>
    </nav>

    <div class="flex flex-col my-12 mx-[88px]">
        <div class="w-full h-[650px] mt-12 bg-white rounded-r-lg rounded-t-lg">
            <div class="flex items-center gap-4  m-8">
                <div class="w-32 h-12 text-white rounded-2xl flex justify-center items-center bg-[#497174]">
                    <h1 class="font-semibold text-xl">Order002</h1>
                </div>
                <h1 class="font-bold text-xl">Dracula Halloween Costume</h1>
            </div>
            <div class="flex flex-row mx-7 mt-16 mb-8 justify-between">
                <div class="flex flex-col gap-1  text-2xl">
                    <div class="flex flex-row font-bold ">
                        <h1 class="w-[215px]">
                            Customer Name
                        </h1>
                        <h1>: Nissa Sabyan</h1>
                    </div>
                    <div class="flex flex-row font-bold ">
                        <h1 class="w-[215px]">
                            Customer id
                        </h1>
                        <h1>: realnissabyan@gmail.com</h1>
                    </div>
                    <div class="flex flex-row font-bold ">
                        <h1 class="w-[215px]">
                            Address
                        </h1>
                        <h1>: Jl.Kosongan deh No.2</h1>
                    </div>
                    <div class="flex flex-row font-bold ">
                        <h1 class="w-[215px]">
                            Shipment Type </h1>
                        <h1>: JNE</h1>
                    </div>
                    <div class="flex flex-row font-bold ">
                        <h1 class="w-[215px]">
                            Payment Method
                        </h1>
                        <h1>: Credit Card</h1>
                    </div>
                    <div class="flex flex-row font-bold ">
                        <h1 class="w-[215px]">
                            Rent for
                        </h1>
                        <h1>: 10 days</h1>
                    </div>
                    <div class="flex flex-row font-bold ">
                        <h1 class="w-[215px]">
                            Status
                        </h1>
                        <h1>: Returned</h1>
                    </div>
                    <div class="flex flex-row font-bold ">
                        <h1 class="w-[215px]">
                            Time Remaining
                        </h1>
                        <h1>: 1 days 3 hours</h1>
                    </div>
                    <div class="flex flex-row mt-20 font-bold ">
                        <h1 class="w-[215px]">
                            Package Received
                        </h1>
                    </div>
                </div>
                <div class="flex flex-col">
                    <h1 class="font-bold text-2xl">
                        Costume Detail
                    </h1>
                    <div class="flex flex-row mt-8">
                        <img class="w-1/2" src="{{ asset('images\vampir-custome.png') }}" alt="test">
                        <img class="w-1/2" src="{{ asset('images\vampire-costume-full.png') }}" alt="test">
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-row justify-center items-center bg-[#FFFFFF] w-full h-[100px]">
            <a>
                <div class="w-[196px] flex items-center justify-center text-xl font-semibold h-[51px] rounded-lg bg-[#c4c4c4] text-black">
                    <h1>Order Completed</h1>
                </div>
            </a>
        </div>
    </div>
</body>

</html>
