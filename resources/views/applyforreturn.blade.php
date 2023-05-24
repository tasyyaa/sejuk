<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Apply For Return</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background: linear-gradient(rgba(214, 228, 229, 1), rgba(249, 245, 242, 1));
            background-attachment: fixed;
        }
    </style>
</head>

<body>
    <nav class="">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <div class="leftitem" style="display: flex; justify-content: center;">
                <a class="navbar-brand" href="/orderSummary">
                    <img src="{{ asset('images/backarrowcust.svg') }}" width="60" height="65"
                        class="d-inline-block align-text-">
                </a>
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('images/sejukcust.svg') }}" width="60" height="65"
                        class="d-inline-block align-text-">
                </a>
                <a class="navbar-brand">
                    <h4 class="d-inline-block align-text- mt-4">Apply For Return</h4>
                </a>
            </div>
            <div class="sideitem" style="display: flex; justify-content: center;">
                <a class="navbar-brand" href="#">
                    <h4 class="d-inline-block align-text- text-[#675959]"> {{ __('Dashboard') }} </h4>
                </a>
            </div>
        </div>
    </nav>
    <div class="bg-[#FFFFFF] ml-[15px] mr-[15px] rounded-md">
        <div class="flex flex-row ml-[28px]">
            <div class="flex flex-col gap-[20px] ml-[28px]">
                <img src="{{ asset('images/phimage.svg') }}" class="object-left mt-3" width=306px height=379px>
            </div>
            <div class="flex flex-col gap-x-[550px] ml-[28px]">
                <div class="flex flex-row">
                    <p class="d-inline-block align-text- mt-[45px] text-[16px]">location</p>
                </div>
                <div class="flex flex-row">
                    <p class="d-inline-block align-text- mt-[8px] text-[16px] font-extrabold">Store</p>
                </div>
                <div class="flex flex-row">
                    <p class="d-inline-block align-text- mt-[8px] text-[16px]">Product</p>
                </div>
            </div>
            <div class="flex flex-col ml-[475px] mt-[105px]">
                <div class="flex flex-row ml-[10px]">
                    <p class="d-inline-block align-text- text-[16px]">Qty</p>
                </div>
                <div class="flex flex-row mt-[20px]">
                    <p class="d-inline-block align-text- text-extrabold text-[#497174] text-[16px]">Total</p>
                </div>
            </div>
            <div class="flex flex-col ml-[120px] mt-[105px]">
                <div class="flex flex-row">
                    <p class="d-inline-block align-text- text-[16px]">Price</p>
                </div>
                <div class="flex flex-row mt-[20px]">
                    <p class="d-inline-block align-text- text-extrabold text-[#497174] text-[16px]">Total Price</p>
                </div>
            </div>
        </div>
    </div>
    <form action="/applyforreturn/store" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="bg-[#FFFFFF] mt-[15px] ml-[15px] mr-[15px] pt-[20px] pb-[20px] rounded-sm">
            <div class="flex flex-row">
                <div class="flex flex-col">
                    <div class="flex flex-row ml-[28px]">
                        <p class="d-inline-block align-text- font-bold text-[#675959] text-[18px]">Shipping Information
                        </p>
                    </div>
                    <div class="flex flex-row ml-[28px] mt-[12px]">
                        <p class="d-inline-block align-text- text-bold text-[#675959] text-[14px]">Reguler</p>
                    </div>
                    <div class="flex flex-row ml-[24px]">
                        <select class="w-[475px] rounded-md h-[33px] focus:outline-0 text-[14px] text-[#675959]"
                            aria-label="Default select example" for="shipping_methods" id="shipping_methods"
                            name="shipping_methods" required="required">
                            <option>Choose your shipping methods</option>
                            <option value="JNE">JNE</option>
                            <option value="J&T">J&T</option>
                            <option value="SiCepat">SiCepat</option>
                            <option value="AnterAja">AnterAja</option>
                            <option value="GoSend">GoSend</option>
                        </select>
                    </div>
                    <div class="flex flex-row ml-[28px] mt-[6px]">
                        <input type="text" id="name_kurir"
                            class=" w-[450px] rounded-md h-[33px] focus:outline-0 text-[14px]"
                            aria-labelledby="required" name="name_kurir"
                            placeholder="Input The Courrier Name (Optional)">
                    </div>
                </div>
                <div class="flex flex-col ml-[575px]">
                    <div class="flex flex-row">
                        <p class="d-inline-block align-text- font-bold text-[#675959] text-[18px]">No. Resi</p>
                    </div>
                    <div class="flex flex-row mt-[22px]">
                        <input type="text" id="no_resi" class=" w-[100px] rounded-md h-[33px] focus:outline-0"
                            aria-labelledby="required" name="no_resi" placeholder="Input No. Resi">
                    </div>
                </div>
            </div>
            <div class="border-t-4"></div>
            <div class="flex flex-row ml-[28px] mt-[20px]">
                <p class="d-inline-block align-text- font-bold text-[#675959] text-[18px]">Shop Address</p>
            </div>
            <div class="flex flex-row ml-[28px] mb-[15px]">
                <input type="text" id="vendor_storeaddress"
                    class=" w-[450px] rounded-md h-[33px] focus:outline-0 text-[14px] text-[#675959] font-medium"
                    aria-labelledby="required" name="vendor_storeaddress" placeholder="Input The Address">
            </div>
        </div>
        <div class="bg-[#FFFFFF] ml-[15px] mr-[15px] mt-[15px] pt-[20px] pb-[20px] rounded-md">
            <div class="flex flex-row ml-[28px]">
                <p class="d-inline-block align-text- font-bold text-[#675959] text-[18px]">Reason for return
                </p>
            </div>
            <div class="flex flex-row ml-[28px]">
                <input type="text" id="reason" class=" w-[450px] rounded-md h-[33px] focus:outline-0"
                aria-labelledby="required" name="reason" placeholder="Input your reason">
            </div>
            <div class="border-t-4"></div>
            <div class="flex flex-row ml-[28px] mt-[20px]">
                <p class="d-inline-block align-text- font-bold text-[#675959] text-[18px]">Product Image
                </p>
            </div>
            <div class="flex flex-row ml-[28px]">
                <input class="form-control" type="file" id="productimage" name="productimage" >
            </div>
        </div>
        <input type="Submit" class="bg-[#497174] text-[#D6E4E5] font-semibold w-[196px] h-[51px] rounded-md ml-[1050px] mt-[50px] mb-[55px] "
        value="Submit">
    </form>

</body>

</html>
