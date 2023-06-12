@extends('homepage.navbar')

@section('title')
    {{$product->item_name}}
@endsection

@section('child-sheet')
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: linear-gradient(rgba(214, 228, 229, 1), rgba(239, 245, 245, 1)) fixed;
        }
    </style>
@endsection

@section('content')
    <main>
        <div class="flex flex-row">
            <div class="flex flex-col ml-[99px]">
                <img  src="{{ asset('storage/' . $product->catalog_image) }}" class="mt-[80px] w-[550px] h-[700px]">
            </div>
            <div class="flex flex-col rounded-sm bg-[#F9F5F2] w-[500px] h-[460px] ml-[45px] mt-[200px]">
                <div class="flex flex-row ml-[25px] mt-[32px]">
                    <p class="d-inline-block  font-bold text-[#050505] text-[46px]">{{ $product->item_name }}</p>
                </div>
                <div class="flex flex-row ml-[25px]">
                    <p class="d-inline-block  font-semibold text-[#B7B7B7] text-[24px]">{{ $product->vendor->vendor_store }}</p>
                </div>
                <div class="flex flex-row ml-[25px]">
                    <div class="flex flex-col">
                        <div class="flex flex-row">
                            <p class="d-inline-block  font-semibold text-[#B7B7B7] text-[24px]">Size-</p>
                            <p class="d-inline-block  font-bold text-[#050505] text-[24px]">{{ $product->size }}</p>
                        </div>
                        <div class="flex flex-row">
                            <p class="d-inline-block  font-semibold text-[#B7B7B7] text-[24px]">Price-</p>
                            <p class="d-inline-block  font-bold text-[#050505] text-[24px]">Rp{{ $product->item_price }}</p>
                        </div>
                        <div class="flex flex-row">
                            <p class="d-inline-block  font-semibold text-[#B7B7B7] text-[24px]">Stok-</p>
                            <p class="d-inline-block  font-bold text-[#050505] text-[24px]">{{ $product->stock }}</p>
                        </div>
                    </div>
                    <div class="flex flex-col ml-[150px]">
                        <a href="#" class="text-[#9B9B9B] font-semibold w-[196px] h-[51px] text-[18px]">(Size Guide)</a>
                    </div>
                </div>
                <form action="{{route('cart.add')}}" class="" method="post">
                    @csrf
                    <div class="flex flex-row ml-[15px]">
                        <input name="catalog_id" value="{{$product->catalog_id}}" hidden required/>
                        <input class="rounded-md h-[33px] focus:ring-0 focus:border-transparent bg-[#F9F5F2] border-none form-control" type="number" id="quantity"
                               aria-labelledby="required" name="amount" required min="0" placeholder="Enter your quantity"/>

                </div>
                <div class="flex flex-row ml-[25px] mt-[20px]">
                    <img src="{{ asset('storage/' . $product->catalog_image) }}"  width="100px" height="150px">
                </div>
                <div class="flex flex-row ml-[40px] mt-[15px] mb-[15px] justify-center">
                    <input type="submit" class="bg-[#497174] text-[#d6e4e5] w-[196px] h-[51px] font-semibold rounded-md"
                           value="Add to cart" />
                </div>
                </form>
            </div>
        </div>
    </main>
@endsection
