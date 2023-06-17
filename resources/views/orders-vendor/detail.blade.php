@extends('layouts.base')

@section('title')
    Order #{{$order->id}}
@endsection

@section('child-sheet')
<script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: linear-gradient(rgba(73, 113, 116, 1), rgba(239, 245, 245, 1));
            background-attachment: fixed;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
    </style>
@endsection

@section('content')
<nav class="">
    <div class="max-w-screen flex flex-wrap items-center justify-between mx-auto p-4">
        <div class="leftitem" style="display: flex; justify-content: center;">
            <a class="navbar-brand" href="/vendor/myorderlist">
                <img src="{{ asset('images/backarrowvendor.svg') }}" width="60" height="65"
                    class="d-inline-block align-text-">
            </a>
            <a class="navbar-brand" href="/vendor">
                <img src="{{ asset('images/sejuk1.png') }}" width="40" height="45"
                    class="d-inline-block align-text-">
            </a>
            <a class="navbar-brand">
                <h4 class="d-inline-block align-text- mt-2 text-white ml-[8px] text-[26px]"> Order Summary</h4>
            </a>
        </div>
        <div class="sideitem" style="display: flex; justify-content: center;margin-left:10px;">
            <a class="navbar-brand mr-[60px]" href="/vendor/profile">
                <img src="{{ asset('images/3.png') }}" width="60" height="65">
            </a>
        </div>
    </div>
</nav>
<div class="flex flex-col my-12 mx-[88px]">
    @if($order->order_status === \App\Models\Order::PAID)
    <form action="{{route('order.vendor.ship', ['id' => $order->id])}}" method="POST">
        @csrf
    @endif
    <div class="w-full pt-4 pb-12 mt-12 bg-white rounded-lg">
        <div class="flex items-center gap-4  m-8">
            <div class="w-32 h-12 text-white rounded-2xl flex justify-center items-center bg-[#497174]">
                <h1 class="font-semibold text-xl">Order #{{$order->id}}</h1>
            </div>
{{--            <h1 class="font-bold text-xl">Dracula Halloween Costume</h1>--}}
        </div>
        <div class="flex flex-row mx-7 mt-8 mb-8 justify-between">
            <div class="flex flex-col text-[22px]">
                <div class="flex flex-row">
                <h1 class="font-bold text-[26px]">
                    Order Detail
                </h1>
                </div>
                <div class="flex flex-row mt-[20px]">
                    <h1 class="w-[215px] font-semibold text-[22px]">
                        Customer Name
                    </h1>
                    <h1>: {{$order->user->name}}</h1>
                </div>
                <div class="flex flex-row mt-[5px]">
                    <h1 class="w-[215px] font-semibold">
                        Customer Email
                    </h1>
                    <h1 >: {{$order->user->email}}</h1>
                </div>
                <div class="flex flex-row mt-[5px]">
                    <h1 class="w-[215px] font-semibold">
                        Payment Method
                    </h1>
                    <h1>: {{$order->transaction->paymentMethod->type}}</h1>
                </div>
                <div class="flex flex-row mt-[5px]">
                    <h1 class="w-[215px] font-semibold">
                        Total Paid
                    </h1>
                    <h1>: Rp{{$order->total_price}}</h1>
                </div>
                <div class="flex flex-row mt-[5px]">
                    <h1 class="w-[215px] font-semibold">
                        Status
                    </h1>
                    <h1>: {{$order->order_status}}</h1>
                </div>
            </div>
            {{-- <div class="flex flex-col w-full ml-12">
                <h1 class="font-bold text-2xl">
                    Order Detail
                </h1>
                @foreach($order->items as $item)
                <div class="flex flex-row mt-8">
                    {{$item->catalog->item_name}} - {{$item->catalog->category->category_type}} - {{$item->amount}} pcs
                </div>
                @endforeach
            </div> --}}

        </div>
        <div class="flex flex-col mx-7 text-[22px]">
            <h1 class="font-bold text-[26px]">Package Details</h1>
            <div class="flex flex-row mt-[20px]">
                <h1 class="w-[215px] font-semibold">
                    Customer Address
                </h1>
                <h1>: {{$order->shipping->customer_address}}</h1>
            </div>
            <div class="flex flex-row ">
                <h1 class="w-[215px] font-semibold">
                    Shipment Type </h1>
                <h1>: {{$order->shipping->shippingMethod->name}}</h1>
            </div>

            <div class="flex flex-row">
                @if($order->order_status === \App\Models\Order::PAID)
                    <label class="w-[278px]" for="cust_res">No. Resi</label>
                    <input class="w-[400px] h-[47px] ring-1 ring-black text-xl px-2 placeholder:text-gray-700"
                           type="text" name="no_resi" required placeholder="no resi">
                @else
                    <h1 class="w-[215px] font-semibold">
                        No Resi </h1>
                    <h1>: {{$order->shipping->no_resi}}</h1>
                @endif
            </div>
        </div>
        @if($order->order_status === \App\Models\Order::SHIPPED_BACK_APPLY_RETURN || $order->order_status === \App\Models\Order::COMPLETD_APPLY_RETURN)
            <div class="flex flex-col mx-7 gap-10 text-xl mt-8">
                <h1 class="ml-4 font-bold">Apply Return Package Details</h1>
                <div class="flex flex-row">
                    <h1 class="w-[215px]">
                        Reason
                    </h1>
                    <h1>: {{$order->applyReturn->reason}}</h1>
                </div>
                <div class="flex flex-row">
                    <img class="max-w-[400px]" src="{{asset('storage/' . $order->applyReturn->product_image)}}"/>
                </div>
                <div class="flex flex-row">
                    <h1 class="w-[215px]">
                        Customer Address
                    </h1>
                    <h1>: {{$order->applyReturn->customer_address}}</h1>
                </div>
                <div class="flex flex-row">
                    <h1 class="w-[215px]">
                        Vendor Address
                    </h1>
                    <h1>: {{$order->applyReturn->vendor_address}}</h1>
                </div>
                <div class="flex flex-row ">
                    <h1 class="w-[215px]">
                        Shipment Type </h1>
                    <h1>: {{$order->applyReturn->shippingMethod->name}}</h1>
                </div>

                <div class="flex flex-row gap-4 items-center">
                        <h1 class="w-[215px]">
                            No Resi </h1>
                        <h1>: {{$order->applyReturn->no_resi}}</h1>
                </div>

                <div class="flex flex-row gap-4 items-center">
                    <h1 class="w-[215px]">
                        Nama kurir </h1>
                    <h1>: {{$order->applyReturn->nama_kurir}}</h1>
                </div>
            </div>
        @endif
        @if($order->order_status === \App\Models\Order::SHIPPED_BACK_RETURN || $order->order_status === \App\Models\Order::COMPETED_RETURN)
            <div class="flex flex-col mx-7 gap-10 text-xl mt-8">
                <h1 class="ml-4 font-bold">Return Package Details</h1>
                <div class="flex flex-row">
                    <h1 class="w-[215px]">
                        Customer Address
                    </h1>
                    <h1>: {{$order->returnPackage->customer_address}}</h1>
                </div>
                <div class="flex flex-row">
                    <h1 class="w-[215px]">
                        Vendor Address
                    </h1>
                    <h1>: {{$order->returnPackage->vendor_address}}</h1>
                </div>
                <div class="flex flex-row ">
                    <h1 class="w-[215px]">
                        Shipment Type </h1>
                    <h1>: {{$order->returnPackage->shippingMethod->name}}</h1>
                </div>

                <div class="flex flex-row gap-4 items-center">
                    <h1 class="w-[215px]">
                        No Resi </h1>
                    <h1>: {{$order->returnPackage->no_resi}}</h1>
                </div>

                <div class="flex flex-row gap-4 items-center">
                    <h1 class="w-[215px]">
                        Nama kurir </h1>
                    <h1>: {{$order->returnPackage->nama_kurir}}</h1>
                </div>
            </div>
        @endif
        @if($order->order_status === \App\Models\Order::COMPLETD_APPLY_RETURN)
            <div class="flex flex-col mx-7 gap-10 text-xl mt-8">
                <h1 class="ml-4 font-bold">Form Apply Return Payment Details</h1>
                <div class="flex flex-row">
                    <h1 class="w-[215px]">
                        Bank Name
                    </h1>
                    <h1>: {{$order->formReturnPayment->sejukBankAccountOutcome->bank_name}}</h1>
                </div>
                <div class="flex flex-row">
                    <h1 class="w-[215px]">
                        Bank Account Name
                    </h1>
                    <h1>: {{$order->formReturnPayment->sejukBankAccountOutcome->bank_account_name}}</h1>
                </div>
                <div class="flex flex-row">
                    <h1 class="w-[215px]">
                        Bank Account Number
                    </h1>
                    <h1>: {{$order->formReturnPayment->sejukBankAccountOutcome->bank_account_number}}</h1>
                </div>
                <div class="flex flex-row">
                    <h1 class="w-[215px]">
                        Transfer Amount
                    </h1>
                    <h1>: Rp{{$order->formReturnPayment->sejukBankAccountOutcome->transfer_amount}}</h1>
                </div>
            </div>
        @endif
        @if($order->order_status === \App\Models\Order::COMPETED_RETURN)
            <div class="flex flex-col mx-7 gap-10 text-xl mt-8">
                <h1 class="ml-4 font-bold">Accept Payment Details</h1>
                <div class="flex flex-row">
                    <h1 class="w-[215px]">
                        Bank Name
                    </h1>
                    <h1>: {{$order->formAcceptPayment->sejukBankAccountOutcome->bank_name}}</h1>
                </div>
                <div class="flex flex-row">
                    <h1 class="w-[215px]">
                        Bank Account Name
                    </h1>
                    <h1>: {{$order->formAcceptPayment->sejukBankAccountOutcome->bank_account_name}}</h1>
                </div>
                <div class="flex flex-row">
                    <h1 class="w-[215px]">
                        Bank Account Number
                    </h1>
                    <h1>: {{$order->formAcceptPayment->sejukBankAccountOutcome->bank_account_number}}</h1>
                </div>
                <div class="flex flex-row">
                    <h1 class="w-[215px]">
                        Transfer Amount
                    </h1>
                    <h1>: Rp{{$order->formAcceptPayment->sejukBankAccountOutcome->transfer_amount}}</h1>
                </div>
            </div>
        @endif
    </div>
    <div class="flex flex-row gap-16 mt-12 justify-center items-center">
        @if($order->order_status === \App\Models\Order::PAID)
            <button class="w-[196px] flex items-center justify-center text-xl font-semibold h-[51px] rounded-lg bg-[#497174] text-[#D6E4E5]" type="submit">
                Send
            </button>
            <a href="#">
                <div
                    class="w-[196px] flex items-center justify-center text-xl font-semibold h-[51px] rounded-lg bg-gray-400 ">
                    <h1>Cancel</h1>
                </div>
            </a>
        @elseif($order->order_status === \App\Models\Order::SHIPPED_BACK_APPLY_RETURN)
            <a href="{{route('return-payment', ['id' => $order->id])}}">
                <div
                    class="w-[196px] flex items-center justify-center text-xl font-semibold h-[51px] rounded-lg bg-gray-400 ">
                    <h1>Return Payment</h1>
                </div>
            </a>
        @elseif($order->order_status === \App\Models\Order::SHIPPED_BACK_RETURN)
            <a href="{{route('accept-payment', ['id' => $order->id])}}">
                <div
                    class="w-[196px] flex items-center justify-center text-xl font-semibold h-[51px] rounded-lg bg-gray-400 ">
                    <h1>Accept Payment</h1>
                </div>
            </a>
        @endif
    </div>
    </form>
</div>
@endsection
