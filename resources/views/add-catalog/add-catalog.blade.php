@extends('homepage-vendor.navbar')

@section('title')
    Add Catalog
@endsection

@section('additional-sheet')
<style>
    body {
        font-family: 'Plus Jakarta Sans', sans-serif;
        background: linear-gradient(rgba(73, 113, 116, 1), rgba(239, 245, 245, 1));
        background-attachment: fixed;
    }
</style>
@endsection

@section('content')
    <main>
    <!-- Title -->
    <div class="font-bold text-5xl text-white ml-[99px] mt-12 mb-[46px]">
        <h3>Add New Catalog</h3>
    </div>
    @if($errors->any())
        <div class="text-xl text-white ml-[99px] mt-12 mb-[46px]">
            {{$errors->all()}}
        </div>
    @endif
    <!-- Form  -->
    <form action="{{route('add-catalog')}}" class="" method="post" enctype="multipart/form-data">
        @csrf
        <div class="flex flex-row ml-[99px] gap-[119px] mr-[125px]">
            <div>
                <div class="flex flex-col gap-[10px] mb-2">
                    <label for="item_name" class="text-2xl text-white font-bold ">Costume Name</label>
                    <div class="">
                        <input class="w-[475px] rounded-md h-[33px] focus:ring-0 focus:border-transparent form-control" type="text" id="item_name"
                               aria-labelledby="required" name="item_name" value="{{old('item_name')}}">
                    </div>
                </div>
                <div class="flex flex-col gap-[10px] mb-2">
                    <h3 class="text-2xl text-white font-bold">Categories</h3>
                    <select class="w-[475px] rounded-md h-[33px] text-sm focus:ring-0 focus:border-transparent" aria-label="Default select example"
                            id="category_id" name="category_id">
                        @foreach($categories as $category)
                            <option value="{{$category->category_id}}" {{old('category_id') == $category->category_id ? 'selected' : ''}}>{{$category->category_type}}</option>
                        @endforeach
                    </select>

                </div>
                <div class="flex flex-col gap-[10px] mb-2">
                    <label for="item_price" class="text-2xl text-white font-bold">Price</label>
                    <div class="col-sm-6">
                        <input type="number" id="item_price" class="w-[475px] rounded-md h-[33px] focus:ring-0 focus:border-transparent"
                               aria-labelledby="required" name="item_price" min="0" value="{{old('item_price')}}">
                    </div>
                </div>

                <div class="flex flex-col gap-[10px] mb-2">

                    <h3 class="text-2xl text-white font-bold">Size</h3>
                    <select class="w-[475px] rounded-md h-[33px] text-sm focus:ring-0 focus:border-transparent" aria-label="Default select example"
                            for="size" id="size" name="size">
                        @foreach(['XXS', 'XS', 'S', 'M', 'L', 'XL', 'XXL', 'All Size'] as $size)
                            <option value="{{$size}}" {{old('size') == $size ? 'selected' : ''}}>{{$size}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="flex flex-col gap-[10px] mb-2">
                    <label for="stock" class="text-2xl text-white font-bold">Stock</label>
                    <div class="col-sm-6">
                        <input type="number" id="stock" class="w-[475px] rounded-md h-[33px] focus:ring-0 focus:border-transparent "
                               aria-labelledby="required" name="stock" min="0" value="{{old('stock')}}">
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
                <input id='catalogimage' type='file' name='catalog_image' onchange="loadFile(event)" hidden/>
                <input class="text-black font-bold ml-[150px]" id='buttonid' type='button' value='Add your photos here' />
            </div>
        </div>
        <div class="flex justify-center gap-[119px] mt-12 mb-[85px]">
            <button type="submit" class="bg-[#497174] text-[#d6e4e5] w-[196px] h-[51px] font-semibold rounded-md "
                   >Submit</button>
            <a href="{{route('homepage.vendor')}}"
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
    </main>
@endsection

