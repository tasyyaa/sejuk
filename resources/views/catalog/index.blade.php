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
            <div class="flex flex-col rounded-sm bg-[#F9F5F2] w-[500px] h-[480px] ml-[45px] mt-[200px]">
                <div class="flex flex-row ml-[25px] mt-[25px]">
                    <h1 class="text-5xl pt-[36px] mb-[20px] whitespace-nowrap text-[#497174] font-bold">{{ $product->item_name }}</h1>
                </div>
                <div class="flex flex-row ml-[25px]">
                    <p class="d-inline-block  font-semibold text-[#B7B7B7] text-[24px]">{{ $product->vendor->vendor_store }}</p>
                </div>
                <div class="ml-[20px]">

                <table class= "border-separate border-spacing-2 border-slate-400 font-bold text-xl">
                    <tbody class="pl-20">
                        <tr >
                            <td >Price</td>
                            <td>:</td>
                            <td class="d-inline-block  font-bold text-[#050505] text-[24px]" >Rp.{{ $product->item_price }} <!-- <-Harga Dummy;Harga sesuai database--></td>
                        </tr>
                        <tr>
                            <td > Stok</td>
                            <td>:</td>
                            <td class="d-inline-block  font-bold text-[#050505] text-[24px]">{{ $product->stock }} <!-- <-Harga Dummy;Harga sesuai database--></td>
                        </tr>
                        <tr>
                            <td >Size Guide</td>
                            <td>:</td>
                            <td class="d-inline-block  font-bold text-[#050505] text-[24px]" >{{ $product->size }}<!-- <-Ukuran Dummy;Ukuran sesuai database--></td>
                        </tr>

                        <tr>
                            <td >Order Quantity</td>
                            <td>:</td>



                        </tr>
                    </tbody>


                </table>


            </div>
                <form action="{{route('cart.add')}}" class="" method="post">
                    @csrf
                    <div class="flex flex-row ml-[20px]">
                        <input name="catalog_id" value="{{$product->catalog_id}}" hidden required/>
                        <input class="rounded-md h-[33px] focus:ring-0 focus:border-transparent   form-control" type="number" id="quantity"
                               aria-labelledby="required" name="amount" required min="0" placeholder="Enter your quantity"/>

                    </div>

                <div class="flex flex-row ml-[25px] mt-[25px]">
                    <img src="{{ asset('storage/' . $product->catalog_image) }}"  width="100px" height="150px">
                </div>
                <div class="flex flex-row ml-[40px] mt-[15px] mb-[15px] justify-center">
                    <button type="submit" class=" text-white btn bg-[#497174] hover:bg-[#497174]-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"><i class="fa fa-shopping-cart"></i>
                        Add To Cart</button>
                </div>
                </form>
            </div>
        </div>
    </main>

@endsection
