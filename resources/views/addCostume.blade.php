@extends('layout.navbarvendor1')
@section('title', 'Add Costume')
@section('urlbfr','addCostume')
@section('content')
<head>
    <script src="js/script.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<style>
    body {
            background: linear-gradient(rgba(73, 113, 116, 1), rgba(239, 245, 245, 1));
            background-attachment: fixed;
        }
</style>

<body>
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
                        <input class="w-[475px] rounded-md h-[33px] focus:ring-0 focus:border-transparent" type="text" id="item_name"
                            class="form-control" aria-labelledby="required" name="item_name">
                    </div>
                </div>
                <div class="flex flex-col gap-[10px] mb-2">

                    <h3 class="text-2xl text-white font-bold">Categories</h3>
                    <select class="w-[475px] rounded-md h-[33px] focus:ring-0 focus:border-transparent" aria-label="Default select example"
                        for="category_id" id="category_id" name="category_id">
                        <option value="CST">Costume</option>
                        <option value="ACS">Clothes</option>
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
                <img id="img-preview" class="h-[425px] w-[735px]" src="{{ asset('images/inputimg.svg') }}" alt="">
                <input id='catalogimage' type='file' name='catalogimage' onchange="loadFile(event)" hidden/>
                <input class="text-black font-bold ml-[150px]" id='buttonid' type='button' value='Add your photos here' />
            </div>
        </div>
        <div class="flex justify-center gap-[119px] mt-12 mb-[85px]">
            <input type="Submit" class="bg-[#497174] text-[#d6e4e5] w-[196px] h-[51px] font-semibold rounded-md "
                value="Submit">
            <a href="/homepageVendor"
                class="bg-[#bfb9b9] text-black w-[196px] h-[51px] font-semibold rounded-md flex justify-center items-center">Cancel</a>
        </div>
    </form>
    <script>
        document.getElementById('buttonid').addEventListener('click', openDialog);

        function openDialog() {
        document.getElementById('catalogimage').click();
        }



        let loadFile = function(e) {
            let image = document.getElementById('img-preview');
            image.src = URL.createObjectURL(e.target.files[0]);
        }

    </script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</body>
@endsection

