@extends('layouts.base')

@section('title')
    Reset Password
@endsection

@section('additional-sheet')
    <style>
        body {
            width: 100%;
            height: 100vh;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .container {
            max-width: 1050px;
            width: 100%;
        }
    </style>
@endsection

@section('child-layout')
<div class="bg-blackoverflow-hidden h-screen overflow-hidden">
            <div class="w-full h-screen bg-[#fbf8f6]">
                <div class=" h-screen ml-[71px]  ">
                    <div class="flex gap-[30px] z-0  h-screen justify-center flex-col pb-1">
                        <h1 class="text-3xl font-semibold  text-[#050505] flex justify-center">
                            Forget Password?
                        </h1>

                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />

                        <form method="POST" action="{{ route('password.update.vendor') }}">
                            @csrf

                            <div style="font-family: 'Montserrat', sans-serif;" class="flex flex-col gap-[39px]">
                                <!-- Password Reset Token -->
                                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                                <!-- Email Address -->
                                <div>
                                    <label for="helper-text"
                                           class="mb-8 text-lg flex justify-center font-light text-[#023A15] ">Please re-enter
                                        your registered email to reset your password!</label><br>
                                    <div class=" mt-4 flex justify-center">
                                        <input id="email" type="text" name="email"
                                               :value="old('email', $request=>email)" required autofocus class="w-[594px] h-[55px] placeholder:text-black text-black pl-6 text-1xl font-light bg-white ring-1 ring-black focus:outline-0"
                                               placeholder="EMAIL" />
                                    </div>
                                </div>

                                <!-- Password -->
                                <div class="mt-4 flex justify-center">
                                    <input id="password" type="password" name="password"
                                           required class="w-[594px] h-[55px] placeholder:text-black text-black pl-6 text-1xl font-light bg-white ring-1 ring-black focus:outline-0"
                                           placeholder="PASSWORD"/>
                                </div>

                                <!-- Confirm Password -->
                                <div class="mt-4 flex justify-center">
                                    <input id="password_confirmation" class="w-[594px] h-[55px] placeholder:text-black text-black pl-6 text-1xl font-light bg-white ring-1 ring-black focus:outline-0"
                                           placeholder="CONFIRM PASSWORD" type="password"
                                           name="password_confirmation" required />
                                </div>

                                <div class="flex justify-center">
                                    <button class="w-[594px] h-[49px] bg-black text-white font-bold mr-13 text-lg">
                                        {{ __('Reset Password') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
