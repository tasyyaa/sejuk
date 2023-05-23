@extends('layout.navbarcust1')
@section('title', 'Add Costume')
@section('urlbfr','addCostume')
@section('content')
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
        <h3>Costume</h3>
    </div>
    <!-- Form  -->
    @foreach($vendorcatalogs as $c)
    <div class="flex flex-row">
        <div class="flex flex-col ml-[99px] w-[348px] h-[511px]">
            <img src="{{ asset('storage/'.$c->catalog_image) }}" class="img-fluid w-[348px] h-[303px]">
        </div>
    </div>
    @endforeach
</body>
@endsection

