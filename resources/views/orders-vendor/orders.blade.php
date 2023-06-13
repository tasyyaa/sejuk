@extends('homepage-vendor.navbar')

@section('title')
    My Orders
@endsection

@section('body-class')
    h-screen bg-fixed w-full bg-gradient-to-b from-[#497174] to-[#D6E4E5]
@endsection

@section('content')
<section
    class="flex flex-col items-center justify-center w-10/12 text-center mx-auto mt-14 pb-24"
    x-data="{ tab: 'paid' }"
    x-cloak
>
    <div>
        <h1 class="text-[40px] font-semibold text-white">My Order List</h1>
    </div>

    <!-- Tab Option -->
    <div
        class="flex flex-row justify-between text-white font-medium text-3xl w-full mt-[116px] px-10"
    >
        <button
            class="h-20 w-28 border-b-[6px] border-transparent transition-all duration-200 ease-in-out"
            @click="tab = 'paid'"
            x-bind:class="tab === 'paid' ? 'border-white rounded-md' : ''"
        >
            To Deliver
        </button>
        <button
            class="h-20 w-40 border-b-[6px] border-transparent transition-all duration-200 ease-in-out"
            @click="tab = 'shipped'"
            x-bind:class="tab === 'shipped' ? 'border-white rounded-md' : ''"
        >
            On Shipment
        </button>
        <button
            class="h-20 w-40 border-b-[6px] border-transparent transition-all duration-200 ease-in-out"
            @click="tab = 'returned'"
            x-bind:class="tab === 'returned' ? 'border-white rounded-md' : ''"
        >
            Returned
        </button>
        <button
            class="h-20 w-48 border-b-[6px] border-transparent transition-all duration-200 ease-in-out"
            @click="tab = 'completed'"
            x-bind:class="tab === 'completed' ? 'border-white rounded-md' : ''"
        >
            Completed
        </button>
    </div>

    <!-- Content -->
    <div
        class="flex flex-col w-full h-[1089px] rounded-[15px] bg-white mt-14"
        x-cloak
    >
        <x-orders-vendor.order-row :tab="'paid'" :orders="$ordersPaid"/>

        <x-orders-vendor.order-row :tab="'shipped'" :orders="$ordersShipped"/>

        <x-orders-vendor.order-row :tab="'returned'" :orders="$ordersReturn"/>

        <x-orders-vendor.order-row :tab="'completed'" :orders="$ordersCompleted"/>
    </div>
</section>
@endsection
