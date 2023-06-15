@extends('homepage.navbar')

@section('title')
    My Orders
@endsection

@section('content')
<div class="border-black rounded-md"></div>
<section
    class="flex flex-col items-center justify-center w-10/12 text-center mx-auto mt-14 pb-24"
    x-data="{ tab: 'paid' }"
    x-cloak
>
    <div>
        <h1 class="text-[40px] font-semibold text-black">My Purchases</h1>
    </div>

    <!-- Tab Option -->
    <div
        class="flex flex-row justify-between text-black font-medium text-3xl w-full mt-[116px] px-10"
    >
        <button
            class="h-20 w-28 border-b-[6px] border-transparent transition-all duration-200 ease-in-out"
            @click="tab = 'paid'"
            x-bind:class="tab === 'paid' ? 'border-black rounded-md' : ''"
        >
            Confirmed
        </button>
        <button
            class="h-20 w-36 border-b-[6px] border-transparent transition-all duration-200 ease-in-out"
            @click="tab = 'shipped'"
            x-bind:class="tab === 'shipped' ? 'border-black rounded-md' : ''"
        >
            Shipped
        </button>
        <button
            class="h-20 w-40 border-b-[6px] border-transparent transition-all duration-200 ease-in-out"
            @click="tab = 'returned'"
            x-bind:class="tab === 'returned' ? 'border-black rounded-md' : ''"
        >
            Returned
        </button>
        <button
            class="h-20 w-48 border-b-[6px] border-transparent transition-all duration-200 ease-in-out"
            @click="tab = 'completed'"
            x-bind:class="tab === 'completed' ? 'border-black rounded-md' : ''"
        >
            Completed
        </button>
    </div>

    <!-- Content -->
    <div
        class="flex flex-col w-full h-[1089px] rounded-[15px] bg-white mt-14"
        x-cloak
    >
        <x-orders.order-row :tab="'paid'" :orders="$ordersPaid"/>

        <x-orders.order-row :tab="'shipped'" :orders="$ordersShipped"/>

        <x-orders.order-row :tab="'returned'" :orders="$ordersReturn"/>

        <x-orders.order-row :tab="'completed'" :orders="$ordersCompleted"/>
    </div>
</section>
@endsection
