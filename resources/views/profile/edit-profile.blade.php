@extends('profile.profile-layout')

@section('title')
    Edit Profile
@endsection


@section('content')
    <form action="{{ route('profile.edit') }}" method="POST"
        class="flex flex-col text-[#565656] justify-center items-start w-full max-w-6xl bg-white rounded-lg mx-auto my-20 pb-12">
        @csrf
        <!-- Invalid -->
        {{--        <div x-show="invalid" class="fixed top-0 left-0 right-0 h-36 bg-white z-50" x-transition x-cloak> --}}
        {{--            <div class="flex flex-col px-12 pt-4 pb-2"> --}}
        {{--                <h2 class="text-3xl font-bold text-[#FE4A4A]"> --}}
        {{--                    Data is Invalid --}}
        {{--                </h2> --}}
        {{--                <p class="text-lg font-medium">Click OK to continue</p> --}}
        {{--                <p class="ml-auto mt-4 px-8 py-0.5 border-2 shadow-xl border-b-4 border-b-slate-300 hove:brightness-75 cursor-pointer" --}}
        {{--                   @click="invalid=false"> --}}
        {{--                    Ok --}}
        {{--                </p> --}}
        {{--            </div> --}}
        {{--        </div> --}}
        <!-- Invalid -->
        @if ($errors->any())
            <button
                class="font-bold text-3xl text-[#FE4A4A] px-12 py-1 bg-[#FFFFFF] mx-auto mt-5 border-2 shadow-xl border-b-4 border-b-slate-300">
                Data Is Invalid
            </button>
        @endif

        <div class="flex flex-col w-full pr-36 p-6">
            <!-- Profile Data -->
            <div class="flex flex-col">
                <div class="flex flex-row items-center gap-6">
                    <img src="/images/user-logo-gray.png" alt="user-logo" class="w-20" />
                    <div class="flex flex-col gap-1">
                        <h1 class="text-[40px] leading-none font-bold">
                            {{ $user->name }}
                        </h1>
                    </div>
                </div>
                <div class="flex flex-col pt-10 pb-8 gap-1">
                    <h2 class="text-3xl font-semibold">My Profile</h2>
                    <p class="text-lg">
                        Manage your profile information to control, protect,
                        and secure your account.
                    </p>
                </div>
                <div class="flex flex-col gap-3 text-xl">
                    <div class="flex flex-row items-center">
                        <label for="fullname" class="w-48 font-semibold">Full Name</label>
                        <input type="text" name="name" id="fullname"
                            value="{{ old('name') ? old('name') : $user->name }}"
                            class="border-[1px] border-black px-2 w-96 text-lg" required />
                        <img src="/images/edit-logo-light.png" alt="edit-logo" class="w-4 ml-4" />
                    </div>
                    <div class="flex flex-row items-center">
                        <label for="email" class="w-48 font-semibold">Email</label>
                        <input type="email" name="email" id="email" placeholder="Customerid@gmail.com"
                            class="border-[1px] border-black px-2 w-96 text-lg" required
                            value="{{ old('email') ?? $user->email }}" />
                        <img src="/images/edit-logo-light.png" alt="edit-logo" class="w-4 ml-4" />
                    </div>
                    <div class="flex flex-row items-center">
                        <label for="phone" class="w-48 font-semibold">Phone Number</label>
                        <input type="text" name="phone_number" id="phone" placeholder="62812778348"
                            class="border-[1px] border-black px-2 w-96 text-lg" required
                            value="{{ old('phone_number') ?? $user->phone_number }}" />
                        <img src="/images/edit-logo-light.png" alt="edit-logo" class="w-4 ml-4" />
                    </div>
                    <div class="flex flex-row items-center">
                        <label for="phone" class="w-48 font-semibold">City</label>
                        <input type="text" name="city" id="phone" placeholder="Surabaya"
                            class="border-[1px] border-black px-2 w-96 text-lg" required
                            value="{{ old('city') ?? $user->city }}" />
                        <img src="/images/edit-logo-light.png" alt="edit-logo" class="w-4 ml-4" />
                    </div>
                </div>
            </div>
            <!-- Profile Data -->

            <!-- Payment Data -->
            <div class="flex flex-col pt-10 pb-6 gap-1">
                <h2 class="text-3xl font-semibold">CreditCard (max 2)</h2>
                <p class="text-lg">Manage your Credit Card</p>
            </div>
            <div class="flex flex-row justify-between w-full">
                <div class="flex flex-col gap-6 w-full">
                    <div class="flex flex-row text-lg items-center justify-between w-full">
                        <div class="flex flex-row items-center">
                            <img src="/images/mastercard-logo.png" alt="master-logo" class="w-16" />
                            <label for="master" class="ml-10">Master Card</label>
                            <p class="px-5 bg-[#497174] text-white ml-10">
                                Main
                            </p>
                        </div>
                        <div class="flex flex-row text-lg pr-10 items-center">
                            <input type="text" name="cust_Creditcardtype1" id="mastercard" placeholder="************7778"
                                maxlength="20" value="{{ old('cust_Creditcardtype1') ?? $user->cust_Creditcardtype1 }}"
                                class="border-[1px] border-black px-2 w-48 text-lg" />
                            <img src="/images/edit-logo-light.png" alt="edit-logo" class="w-4 ml-4" />
                            {{--                            <button class="underline font-light ml-12"> --}}
                            {{--                                Done --}}
                            {{--                            </button> --}}
                        </div>
                    </div>
                    <div class="flex flex-row text-lg items-center justify-between w-full">
                        <div class="flex flex-row items-center">
                            <img src="/images/visa-logo.png" alt="visa-logo" class="w-16" />
                            <label for="visa" class="ml-10">Visa</label>
                        </div>
                        <div class="flex flex-row text-lg pr-10 items-center">
                            <input type="text" name="cust_Creditcardtype2" id="visa" placeholder="************1010"
                                maxlength="20" value="{{ old('cust_Creditcardtype2') ?? $user->cust_Creditcardtype2 }}"
                                class="border-[1px] border-black px-2 w-48 text-lg" />
                            <img src="/images/edit-logo-light.png" alt="edit-logo" class="w-4 ml-4" />
                            {{--                            <button class="underline font-light ml-12"> --}}
                            {{--                                Done --}}
                            {{--                            </button> --}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- Payment Data -->
            <!-- Address Data -->
            <div class="flex flex-col pt-10 pb-6 gap-1">
                <h2 class="text-3xl font-semibold">Address</h2>
                <div class="flex flex-row items-center">
                    <input type="text" name="cust_homephone" id="homephone" placeholder="6281277346724"
                        class="border-[1px] border-black px-2 w-[550px] text-lg"
                        value="{{ old('cust_homephone') ?? $user->cust_homephone }}" />
                    <img src="/images/edit-logo-light.png" alt="edit-logo" class="w-4 ml-4" />
                </div>
                <div class="flex flex-row items-center">
                    <input type="text" name="cust_address" id="address"
                        value="{{ old('cust_address') ?? $user->cust_address }}"
                        placeholder="Jalan Teknik Sipil, Keputih, Sukolilo, Surabaya, Jawa Timur, 60111"
                        class="border-[1px] border-black px-2 w-[550px] text-lg" />
                    <img src="/images/edit-logo-light.png" alt="edit-logo" class="w-4 ml-4" />
                </div>
                {{--                <button class="flex flex-row items-center pt-4"> --}}
                {{--                    <img src="/images/add-logo.png" alt="add-logo" class="w-8" /> --}}
                {{--                    <p class="font-semibold ml-3">Add More</p> --}}
                {{--                </button> --}}
            </div>
        </div>
        <!-- Address Data -->

        <button type="submit"
            class="font-bold text-xl uppercase text-white px-12 py-1 bg-[#497174] mx-auto mt-20 hover:brightness-75">
            Update
        </button>
    </form>
@endsection
