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
        </div>
    </nav>

    <div class="flex flex-col my-12 mx-[88px]">
        <h1 class="font-semibold text-5xl text-white">Ongoing Rent</h1>
        <div class="flex flex-col gap-8 mt-12 ">
            <div class="w-full h-24 bg-white rounded-lg">
                <div class="flex flex-row gap-4 justify-start mx-6 h-full items-center">
                    <div class="w-32 h-12 text-white rounded-2xl flex justify-center items-center bg-[#497174]">
                        <h1 class="font-semibold text-xl">Order001</h1>
                    </div>
                    <h1 class="font-bold text-lg">One Piece Luffy Costume</h1>
                </div>
            </div>
            <div class="w-full h-24 bg-white rounded-lg">
                <div class="flex flex-row gap-4 justify-start mx-6 h-full items-center">
                    <div class="w-32 h-12 text-white rounded-2xl flex justify-center items-center bg-[#497174]">
                        <h1 class="font-semibold text-xl">Order002</h1>
                    </div>
                    <h1 class="font-bold text-lg">Dracula Hallowen Costume</h1>
                </div>
            </div>
            <div class="w-full h-24 bg-white rounded-lg">
                <div class="flex flex-row gap-4 justify-start mx-6 h-full items-center">
                    <div class="w-32 h-12 text-white rounded-2xl flex justify-center items-center bg-[#497174]">
                        <h1 class="font-semibold text-xl">Order003</h1>
                    </div>
                    <h1 class="font-bold text-lg">Princess Elsa Kid Costume</h1>
                </div>
            </div>
            <div class="w-full h-24 bg-white rounded-lg">
                <div class="flex flex-row gap-4 justify-start mx-6 h-full items-center">
                    <div class="w-32 h-12 text-white rounded-2xl flex justify-center items-center bg-[#497174]">
                        <h1 class="font-semibold text-xl">Order004</h1>
                    </div>
                    <h1 class="font-bold text-lg">Mario Bros Package Costume</h1>
                </div>
            </div>
        </div>
    </div>
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
        }
    </script>
</body>

</html>
