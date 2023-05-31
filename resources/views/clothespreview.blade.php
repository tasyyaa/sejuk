@extends('layout.navbarcust1')
@section('title', 'Add Costume')
@section('urlbfr', 'addCostume')
@section('content')

    <head>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background: linear-gradient(rgba(214, 228, 229, 1), rgba(239, 245, 245, 1));
            background-attachment: fixed;
        }
    </style>

    <body>
        <!-- Title -->
        <!-- Form  -->
        @foreach ($vendorcatalogs as $c)
            <div class="flex flex-row">
                <div class="flex flex-col ml-[99px]">
                    <img  src="{{ asset('storage/' . $c->catalog_image) }}" class="mt-[80px] w-[550px] h-[700px]">
                </div>
                <div class="flex flex-col rounded-sm bg-[#F9F5F2] w-[500px] h-[460px] ml-[45px] mt-[200px]">
                    <div class="flex flex-row ml-[25px] mt-[32px]">
                        <p class="d-inline-block  font-bold text-[#050505] text-[46px]">{{ $c->item_name }}</p>
                    </div>
                    <div class="flex flex-row ml-[25px]">
                        <p class="d-inline-block  font-semibold text-[#B7B7B7] text-[24px]">{{ $c->store }}</p>
                    </div>
                    <div class="flex flex-row ml-[25px]">
                        <div class="flex flex-col">
                            <div class="flex flex-row">
                                <p class="d-inline-block  font-semibold text-[#B7B7B7] text-[24px]">Size-</p>
                                <p class="d-inline-block  font-bold text-[#050505] text-[24px]">{{ $c->size }}</p>
                            </div>
                            <div class="flex flex-row">
                                <p class="d-inline-block  font-semibold text-[#B7B7B7] text-[24px]">Price-</p>
                                <p class="d-inline-block  font-bold text-[#050505] text-[24px]">{{ $c->item_price }}</p>
                            </div>
                        </div>
                        <div class="flex flex-col ml-[200px]">
                            <a href="/sizeguide" class="text-[#9B9B9B] font-semibold w-[196px] h-[51px] text-[18px]">(Size
                                Guide)</a>
                        </div>
                    </div>
                    <div class="flex flex-row ml-[15px]">
                        <form action="/cart/store" class="" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input class="rounded-md h-[33px] focus:ring-0 focus:border-transparent bg-[#F9F5F2] border-none" type="text" id="quantity"
                            class="form-control" aria-labelledby="required" name="quantity" placeholder="Enter your quantity">
                    </div>
                    <div class="flex flex-row ml-[25px] mt-[20px]">
                        <img src="{{ asset('storage/' . $c->catalog_image) }}"  width="100px" height="150px">
                    </div>
                    <div class="flex flex-row ml-[40px] mt-[15px] mb-[15px] justify-center">
                        <input type="Submit" class="bg-[#497174] text-[#d6e4e5] w-[196px] h-[51px] font-semibold rounded-md"
                        value="Add to cart">
                    </div>
                </div>
            </div>
        @endforeach
    </body>
@endsection
