@extends('layouts.base')

@section('body-class')
    w-full min-h-screen bg-gradient-to-b from-[#497174] to-[#D6E4E5]
@endsection

@section('navigation')
    <nav
        class="relative flex flex-row w-full justify-between items-center h-24 mx-auto px-12"
    >
        <div class="flex flex-row items-center gap-6">
            <a href="#">
                <img
                    src="/images/burger-logo.png"
                    alt="burger-logo"
                    class="w-8"
                />
            </a>
            <a href="/">
                <img src="/images/logo.png" alt="logo" class="w-12" />
            </a>
        </div>
        <div class="flex flex-row items-center gap-8">
            <div class="relative flex flex-row items-center mr-8">
                <input
                    type="text"
                    placeholder="CariBaju"
                    class="bg-white rounded-l-lg px-2 h-9 placeholder:text-sm w-96"
                />
                <button
                    class="flex items-center justify-center bg-[#497174] h-9 rounded-lg w-16 px-2 absolute z-50 -right-4"
                >
                    <img
                        src="/images/search-logo.png"
                        alt="search-logo"
                        class="w-1/3"
                    />
                </button>
            </div>
            <a href="#">
                <img
                    src="/images/cart-logo.png"
                    alt="cart-logo"
                    class="w-10"
                />
            </a>
            <a href="#">
                <img
                    src="/images/notification-logo.png"
                    alt="notif-logo"
                    class="w-10"
                />
            </a>
            <a href="{{route('profile')}}">
                <img
                    src="/images/user-logo-white.png"
                    alt="user-logo"
                    class="w-10"
                />
            </a>
        </div>
    </nav>
@endsection
