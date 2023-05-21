@extends('layout.navbarvendor1')
@section('title', 'Add Costume')
@section('content')
<body>
    <!-- navbar -->
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
</body>
@endsection
