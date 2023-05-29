<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('registervendor') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="vendor_store" :value="__('Store Name')" />

                <x-input id="vendor_store" class="block mt-1 w-full" type="text" name="vendor_store" :value="old('vendor_store')" required autofocus />
            </div>

            <!-- City -->
            <div class="mt-4">
                <x-label for="vendor_type" :value="__('Store Type')" />

                <select id="vendor_type" class="block mt-1 w-full" name="vendor_type" required autofocus>
                    <option value="">Select Store Type</option>
                    <option value="Retail" {{ old('vendor_type') === 'Retail' ? 'selected' : '' }}>Retail</option>
                    <option value="Rental" {{ old('vendor_type') === 'Rental' ? 'selected' : '' }}>Rental</option>
                    <option value="Seller" {{ old('vendor_type') === 'Seller' ? 'selected' : '' }}>Seller</option>
                </select>
            </div>


            <!-- Telephone -->
            <div class="mt-4">
                <x-label for="start_time" :value="__('Start Time')" />
                <x-input id="start_time" class="block mt-1 w-full" type="time" name="start_time" :value="old('start_time')" required autofocus />
            </div>

            <div>
                <x-label for="end_time" :value="__('End Time')" />
                <x-input id="end_time" class="block mt-1 w-full" type="time" name="end_time" :value="old('end_time')" required autofocus />
            </div>

            <!-- Email Address-->
            <div class="mt-4">
                <x-label for="vendor_storeaddress" :value="__('Store Address')" />

                <x-input id="vendor_storeaddress" class="block mt-1 w-full" type="text" name="vendor_storeaddress" :value="old('vendor_storeaddress')" required />
            </div>


            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4" href="{{ route('login') }}">
                    {{ __('Sign Up') }}
                </x-button>

            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
