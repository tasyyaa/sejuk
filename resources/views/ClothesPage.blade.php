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
            background: linear-gradient(rgba(214, 228, 229, 1), rgba(249, 245, 242, 1));
            background-attachment: fixed;
        }
    </style>

    <body>
        <!-- Title -->
        <div class="font-semibold text-2xl text-[#565656] ml-[99px] mt-12 mb-[46px]">
            <h3>Clothes</h3>
        </div>
        <!-- Form  -->
        @foreach ($vendorcatalogs as $c)
            <div class="flex flex-row">
                <div class="flex flex-col ml-[99px] w-[200px] h-[250px] rounded-sm">
                    <img src="{{ asset('storage/' . $c->catalog_image) }}" class="img-fluid h-[150px] rounded-sm">
                    <div class="flex flex-col bg-[#FFFFFF] pb-[10px]">
                        <div class="flex-flex row ml-[10px]">
                            <p class="d-inline-block  font-semibold text-[#050505] text-[18px]">{{ $c->item_name }}</p>
                        </div>
                        <div class="flex flex-row ml-[10px]">
                            <p class="d-inline-block  font-semibold text-[#B7B7B7] text-[14px]">{{ $c->store }}</p>
                        </div>
                        <div class="flex flex-row mt-[20px] ml-[10px]">
                            <p class="d-inline-block  font-bold text-[#050505] text-[18px]">
                                Rp{{ number_format($c->item_price) }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </body>
@endsection
