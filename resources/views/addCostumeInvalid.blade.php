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
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
        integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous">
    </script>
    <style>
        body {
            background: linear-gradient(rgba(73, 113, 116, 1), rgba(239, 245, 245, 1));
            background-attachment: fixed;
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
                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;
                    </a>
                    <a href="#Home">Home</a>
                    <a href="#Promotion">Promotion</a>
                    <a href="#Our Service">Our Services</a>
                    <a href="#Contact">Contact</a>
                </div>
                <div id="main" style="margin:0px 20px 0px 0px">
                    <span style="font-size:20px;cursor:pointer" onclick="openNav()"> &#9776;
                    </span>
                </div>

                <a class="navbar-brand" href="#">
                    <img src="{{ asset('storage/buatapp/sejuk1.png') }}" width="24" height="30"
                        class="d-inline-block align-text-">
                </a>
            </div>
            <div class="">
                <div class="relative">
                    <div
                        class="flex justify-center  w-[104px] absolute right-0 items-center h-[40px] bg-[#497174] rounded-md">
                        <i class="fas fa-search text-xl font-medium text-white"></i>
                    </div>
                    <input type="text" class="w-[508px] h-[40px] pl-3 rounded-lg  focus:outline-0"
                        placeholder="Cari Baju">
                </div>
            </div>
            <div class="sideitem" style="display: flex; justify-content: center;margin-left: 10px;">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('storage/buatapp/Cart owner.png') }}" width="30" height="24">
                </a>
                <a class="navbar-brand" href="#" style="margin:0px 0px 0px 10px;">
                    <img src="{{ asset('storage/buatapp/Notifications owner.png') }}" width="30" height="24">
                </a>
                <a class="navbar-brand" href="#" style="margin:0px 0px 0px 10px;">
                    <img src="{{ asset('storage/buatapp/3.png') }}" width="30" height="24">
                </a>
            </div>
        </div>
    </nav>
    <div
    data-te-modal-init
    class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
    id="exampleModalFullscreen"
    tabindex="-1"
    aria-labelledby="exampleModalFullscreenLabel"
    aria-hidden="true">
    <div
      data-te-modal-dialog-ref
      class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[0px]:m-0 min-[0px]:h-full min-[0px]:max-w-none">
      <div
        class="pointer-events-auto relative flex w-full flex-col rounded-md bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600 min-[0px]:h-full min-[0px]:rounded-none min-[0px]:border-0">
        <div
          class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50 min-[0px]:rounded-none">
          <!-- Modal title -->
          <h5
            class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200"
            id="exampleModalFullscreenLabel">
            Modal title
          </h5>
          <!-- Close button -->
          <button
            type="button"
            class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
            data-te-modal-dismiss
            aria-label="Close">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              class="h-6 w-6">
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="relative p-4 min-[0px]:overflow-y-auto">
            <p class="px-10 text-center leading-[3rem]">
             Data is Invalid
            </p>
        </div>
    <!-- Title -->
    <div class="font-bold text-5xl text-white ml-[99px] mt-12 mb-[46px]">
        <h3>Add New Catalog</h3>
    </div>

    <!-- <a href="/vendorCatalog"> < </a> -->

    <br />
    <br />
    <!-- Form  -->
    <form action="/vendorCatalog/store" class="" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="flex flex-row ml-[99px] gap-[119px] mr-[125px]">
            <div>
                <div class="flex flex-col gap-[10px] mb-2">
                    <label for="item_name" class="text-2xl text-white font-bold ">Costume Name</label>
                    <div class="">
                        <input class="w-[475px] rounded-md h-[33px] focus:outline-0" type="text" id="item_name"
                            class="form-control" aria-labelledby="required" name="item_name">
                    </div>
                </div>
                <div class="flex flex-col gap-[10px] mb-2">

                    <h3 class="text-2xl text-white font-bold">Categories</h3>
                    <select class="w-[475px] rounded-md h-[33px] focus:outline-0" aria-label="Default select example"
                        for="category_id" id="category_id" name="category_id">
                        <option value="CST">Costume</option>
                        <option value="ACS">Accessories</option>
                    </select>

                </div>
                <div class="flex flex-col gap-[10px] mb-2">
                    <label for="item_price" class="text-2xl text-white font-bold">Price</label>
                    <div class="col-sm-6">
                        <input type="number" id="item_price" class="w-[475px] rounded-md h-[33px] focus:outline-0" aria-labelledby="required" name="item_price">
                    </div>
                </div>

                <div class="flex flex-col gap-[10px] mb-2">

                    <h3 class="text-2xl text-white font-bold">Size</h3>
                    <select class="w-[475px] rounded-md h-[33px] focus:outline-0" aria-label="Default select example" for="size" id="size" name="size">
                            <option value="XXS">XXS</option>
                            <option value="XS">XS</option>
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                            <option value="XXL">XXL</option>
                            <option value="All Size">All Size</option>
                        </select>
                </div>

                <div class="flex flex-col gap-[10px] mb-2">
                    <label for="stock" class="text-2xl text-white font-bold">Stock</label>
                    <div class="col-sm-6">
                        <input type="number" id="stock" class="w-[475px] rounded-md h-[33px] focus:outline-0"
                            aria-labelledby="required" name="stock">
                    </div>
                </div>

                <div class="flex flex-col gap-[10px] mb-2">
                    <label for="store" class="text-2xl text-white font-bold">Store</label>
                    <div class="col-sm-6">
                        <input type="text" id="store" class="w-[475px] rounded-md h-[33px] focus:outline-0"
                            aria-labelledby="required" name="store">
                    </div>
                </div>

                <div class="row">
                    <!-- <div class="col-md-6 col-md-offset-3 center">
    <div class="btn-container">
     <h1 class="imgupload"><i class="fa fa-file-image-o"></i></h1>
     <h1 class="imgupload ok"><i class="fa fa-check"></i></h1>
     <h1 class="imgupload stop"><i class="fa fa-times"></i></h1>
     <p id="namefile">Only pics allowed! (jpg,jpeg,bmp,png)</p>
     <button type="button" id="btnup" class="btn btn-primary btn-lg">Browse for your pic!</button>
     <input type="file" value="" name="fileup" id="fileup">
                </div>
        </div> -->
                </div>
            </div>

            <div class="w-[735px] mt-7 h-[455px] bg-white after:">
                <img class="flex justify-center items-center" src="{{ asset('images/phimage.svg') }}" alt="">
                <input hidden class="appearance-none" type="file" id="catalogimage" name="catalogimage">
            </div>
        </div>
        <div class="flex justify-center gap-[119px] mt-12 mb-24">
            <input type="Submit" class="bg-[#497174] text-[#d6e4e5] w-[196px] h-[51px] font-semibold rounded-md "
                value="Simpan Data">
            <a href="{}"
                class="bg-[#bfb9b9] text-black w-[196px] h-[51px] font-semibold rounded-md flex justify-center items-center">Cancel</a>
        </div>

    </form>

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
