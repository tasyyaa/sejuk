@extends('layout.main')
@section('title', 'Addresses')
@section('content')
    <!-- <div id="gradient1"> -->

        <div class="bg-white rounded-md flex flex-col py-4 mx-[30px]">
            @foreach ($add_addresses as $address)
            <div class="mx-[76px] text-left py-2">
                <h1 class="text-xl text-[#675959] font-bold mb-1">{{ $address->custaddress_name }}</h1>
                <p class="text-[#675959]">{{ $address->cust_address }}</p>
                <p class="text-[#675959]">{{ $address->cust_phonenumber }}</p>
            </div>
            <hr class="h-[4px] bg-gray-200">
            @endforeach
    <a href="{{ url('addaddress') }}">
<div href="" class="flex flex-row justify-between py-2 mx-[76px]">
    <h1 class="text-lg text-[#675959]">Add Address</h1>
    <h1 class="text-xl text-[#497174] font-bold">+</h1>
</div>
</a>
    </div>
    </div>

    <!-- </div> -->

@endsection
