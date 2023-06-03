@extends('layout.main')
@section('title', 'address-page')
@section('urlbfr','address')
@section('content')
<head>
    <script src="js/script.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600&display=swap" rel="stylesheet">
</head>

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: linear-gradient(#D6E4E5, #F9F5F2);
            background-attachment: fixed;
        }
    </style>


    <form class="mx-[75px] flex flex-col gap-[20px]" action="/addaddress/store" method="post">
        {{ csrf_field() }}
        <div class="flex flex-col gap-2 font-semibold text-[#497174]">
            <label for="custaddress_name">Address Name</label>
            <select name="custaddress_name" class="h-8 rounded-sm px-3" id="custaddress_name">
                <option value="" disabled selected>Select your option</option>
                <option value="Home">Home</option>
                <option value="Work">Work</option>
            </select>
        </div>
        <div class="flex flex-col gap-2 font-semibold text-[#497174]">
            <label for="cust_address">Address</label>
            <input type="text" class="h-8 rounded-sm px-3" name="cust_address" required="required">
        </div >
        <div class="flex flex-col gap-2 font-semibold text-[#497174]">
            <label for="cust_city">City</label>
            <input type="text" class="h-8 rounded-sm px-3" name="cust_city" required="required">
        </div >
        <div class="flex flex-col gap-2 font-semibold text-[#497174]">
            <label for="cust_province">Province</label>
            <input type="text" class="h-8 rounded-sm px-3" name="cust_province" required="required">
        </div>
        <div class="flex flex-col gap-2 font-semibold text-[#497174]">
            <label for="cust_phonenumber">Telephone</label>
            <input type="text" class="h-8 rounded-sm px-3" name="cust_phonenumber" required="required">
        </div>
        <div class=" flex justify-center">
        <input type="Submit" class="w-[492px] h-[50px] bg-[#497174] text-white font-semibold rounded-lg" value="Add to List Addreess +">
    </div>
    </form>
    </div>

@endsection
