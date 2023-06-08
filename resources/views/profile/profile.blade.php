@extends('profile.profile-layout')

@section('title')
    Profile
@endsection

@section('content')
<main class="">
    <div
        class="flex flex-col text-[#565656] justify-center items-start w-full max-w-6xl bg-white rounded-lg mx-auto my-20 p-6 pr-36"
    >
        <!-- Profile Data -->
        <div class="flex flex-col">
            <div class="flex flex-row items-center gap-6">
                <img
                    src="/images/user-logo-gray.png"
                    alt="user-logo"
                    class="w-20"
                />
                <div class="flex flex-col gap-1">
                    <h1 class="text-[40px] leading-none font-bold">
                        {{ $user->name }}
                    </h1>
                    <a
                        href="{{route('profile.edit')}}"
                        class="flex flex-row items-center gap-2"
                    >
                        <img
                            src="/images/edit-logo.png"
                            alt="user-logo"
                            class="w-6"
                        />
                        <p class="text-sm">Edit Profile</p>
                    </a>
                </div>
            </div>
            <div class="flex flex-col pt-10 pb-8 gap-1">
                <h2 class="text-3xl font-semibold">MyProfile</h2>
                <p class="text-lg">
                    Manage your profile information to control, protect, and
                    secure your account.
                </p>
            </div>
            <div class="flex flex-col gap-3">
                <div class="flex flex-row text-xl">
                    <p class="w-48 font-semibold">Full Name</p>
                    <p class="text-lg">{{ $user->name }}</p>
                </div>
                <div class="flex flex-row text-xl">
                    <p class="w-48 font-semibold">Email</p>
                    <p class="text-lg">{{ $user->email }}</p>
                </div>
                <div class="flex flex-row text-xl">
                    <p class="w-48 font-semibold">Phone Number</p>
                    <p class="text-lg">{{ $user->phone_number }}</p>
                </div>
                <div class="flex flex-row text-xl">
                    <p class="w-48 font-semibold">City</p>
                    <p class="text-lg">{{ $user->city }}</p>
                </div>
            </div>
        </div>
        <!-- Profile Data -->
        <!-- Payment Data -->
        <div class="flex flex-col pt-10 pb-6 gap-1">
            <h2 class="text-3xl font-semibold">CreditCard (max 2)</h2>
            <p class="text-lg">Manage your Credit Card</p>
        </div>
        <div class="flex flex-row justify-between w-full items-center">
            <div class="flex flex-col gap-6 w-full">
                <div class="flex flex-row text-lg items-center justify-between w-full">
                    <div class="flex flex-row items-center">
                        <img
                            src="/images/mastercard-logo.png"
                            alt="master-logo"
                            class="w-16"
                        />
                        <p class="ml-10">Master Card</p>
                        <p class="px-5 bg-[#497174] text-white ml-10">
                            Main
                        </p>
                    </div>
                    <div class="flex flex-row text-lg pr-10">
                        @if($user->cust_Creditcardtype1)
                        <p class="w-64">{{ $user->cust_Creditcardtype1 }}</p>
{{--                        <button class="underline font-light">Delete</button>--}}
                        @else
                            <p class="w-64"> - </p>
                        @endif
                    </div>
                </div>
                <div class="flex flex-row text-lg items-center justify-between w-full">
                    <div class="flex flex-row items-center">
                        <img
                            src="/images/visa-logo.png"
                            alt="visa-logo"
                            class="w-16"
                        />
                        <p class="ml-10">Visa</p>
                    </div>
                    <div class="flex flex-row text-lg pr-10">
                        @if($user->cust_Creditcardtype2)
                            <p class="w-64">{{ $user->cust_Creditcardtype2 }}</p>
{{--                            <button class="underline font-light">Delete</button>--}}
                        @else
                            <p class="w-64"> - </p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- Payment Data -->
        <!-- Address Data -->
        <div class="flex flex-col pt-10 pb-6 gap-1">
            <h2 class="text-3xl font-semibold">Address</h2>
            <p class="text-lg">
                <span class="font-bold">{{ $user->name }} | </span>
                @if($user->cust_homephone)
                    {{ $user->cust_homephone }}
                @else
                    <span> - </span>
                @endif
            </p>
            <p class="text-lg">
                {{ $user->cust_address }}
            </p>
        </div>
        <!-- Address Data -->
    </div>
</main>
@endsection
