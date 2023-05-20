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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <style>
        body {
            background: linear-gradient(rgba(73, 113, 116, 1), rgba(239, 245, 245, 1));
            background-attachment: fixed;
        }
    </style>

</head>

<body>
    <!-- navbar -->
    <nav class="">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <div class="leftitem" style="display: flex; justify-content: center;">
                <div id="main" style="margin:0px 20px 0px 0px">
                    <span style="font-size:20px;cursor:pointer" data-drawer-target="drawer-navigation"
                        data-drawer-show="drawer-navigation" aria-controls="drawer-navigation"> &#9776;
                    </span>
                </div>
                <div id="drawer-navigation"
                    class="fixed top-0 left-0 z-40 w-screen h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white dark:bg-gray-800"
                    tabindex="-1" aria-labelledby="drawer-navigation-label">
                    <div class="flex flex-row">
                        <div class="flex flex-col bg-[#FFFFFF] w-[650px] relative">
                            <div class="flex flex-row">
                                <div class="flex flex-col ml-[25px]">
                                    <img src="{{ asset('images/sejukcust2.svg') }}" width="60" height="80"
                                        class="d-inline-block align-text-">
                                </div>
                                <div class="flex flex-col">
                                    <button type="button" data-drawer-hide="drawer-navigation"
                                        aria-controls="drawer-navigation"
                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
                                        <svg aria-hidden="true" class="w-10 h-10" fill="#497174" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="sr-only">Close menu</span>
                                    </button>
                                </div>
                            </div>
                            <div class="flex flex-row ml-[45px] mt-[20px]">
                                <div class="relative w-[500px] ml-[25px]">
                                    <input type="search" id="search-dropdown"
                                        class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-[50px] bo border border-gray-300 dark:bg-gray-700 dark:border-l-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white focus:ring-0 focus:border-transparent"
                                        placeholder="Search by product, category,  size, etc." required>
                                    <button type="submit"
                                        class="bg-gray-50 absolute top-0 right-0 p-2.5 text-sm font-medium text-white  rounded-r-[50px] border focus:ring-0 focus:border-transparent">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="#000000"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                        </svg>
                                        <span class="sr-only">Search</span>
                                    </button>
                                </div>
                            </div>
                            <div class="flex flex-row ml-[80px] mt-[30px]">
                                <a href="/homepageVendor"
                                    class="text-[#565656] font-semibold w-[196px] h-[51px] text-[18px]">Home</a>
                            </div>
                            <div class="flex flex-row ml-[80px] mt-[6px]">
                                <a href="/vendorCatalog"
                                    class="text-[#565656] font-semibold w-[196px] h-[51px] text-[18px]">Your Catalogue</a>
                            </div>
                            <div class="flex flex-row ml-[80px] mt-[6px]">
                                <a href="/orderList"
                                    class="text-[#565656] font-semibold w-[196px] h-[51px] text-[18px]">My Order List</a>
                            </div>
                            <div class="flex flex-row ml-[80px] mt-[6px]">
                                <a href="/faq"
                                    class="text-[#565656] font-semibold w-[196px] h-[51px] text-[18px]">FAQ</a>
                            </div>
                            <div class="flex flex-row ml-[80px] mt-[6px]">
                                <a href="/vendorAccount"
                                    class="text-[#565656] font-semibold w-[196px] h-[51px] text-[18px]">My Account</a>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <img src="{{ asset('storage/buatapp/sidebar.jpg') }}" class="w-[650px] h-screen">
                        </div>
                    </div>
                </div>

                {{-- navbar --}}
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
                    <input type="text" class="w-[508px] h-[40px] pl-3 rounded-lg  focus:ring-0 focus:border-transparent"
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
                        <input class="w-[475px] rounded-md h-[33px] focus:ring-0 focus:border-transparent" type="text" id="item_name"
                            class="form-control" aria-labelledby="required" name="item_name">
                    </div>
                </div>
                <div class="flex flex-col gap-[10px] mb-2">

                    <h3 class="text-2xl text-white font-bold">Categories</h3>
                    <select class="w-[475px] rounded-md h-[33px] focus:ring-0 focus:border-transparent" aria-label="Default select example"
                        for="category_id" id="category_id" name="category_id">
                        <option value="CST">Costume</option>
                        <option value="ACS">Accessories</option>
                    </select>

                </div>
                <div class="flex flex-col gap-[10px] mb-2">
                    <label for="item_price" class="text-2xl text-white font-bold">Price</label>
                    <div class="col-sm-6">
                        <input type="number" id="item_price" class="w-[475px] rounded-md h-[33px] focus:ring-0 focus:border-transparent"
                            aria-labelledby="required" name="item_price">
                    </div>
                </div>

                <div class="flex flex-col gap-[10px] mb-2">

                    <h3 class="text-2xl text-white font-bold">Size</h3>
                    <select class="w-[475px] rounded-md h-[33px] focus:ring-0 focus:border-transparent" aria-label="Default select example"
                        for="size" id="size" name="size">
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
                        <input type="number" id="stock" class="w-[475px] rounded-md h-[33px] focus:ring-0 focus:border-transparent "
                            aria-labelledby="required" name="stock">
                    </div>
                </div>

                <div class="flex flex-col gap-[10px] mb-2">
                    <label for="store" class="text-2xl text-white font-bold">Store</label>
                    <div class="col-sm-6">
                        <input type="text" id="store" class="w-[475px] rounded-md h-[33px] focus:ring-0 focus:border-transparent"
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
        <div class="flex justify-center gap-[119px] mt-12 mb-[85px]">
            <input type="Submit" class="bg-[#497174] text-[#d6e4e5] w-[196px] h-[51px] font-semibold rounded-md "
                value="Simpan Data">
            <a href="{}"
                class="bg-[#bfb9b9] text-black w-[196px] h-[51px] font-semibold rounded-md flex justify-center items-center">Cancel</a>
        </div>

    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</body>

</html>
