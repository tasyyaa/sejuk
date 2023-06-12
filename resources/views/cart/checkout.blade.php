@extends('homepage.navbar')

@section('title')
    Checkout
@endsection

@section('content')
    <div class="items-center w-full px-4 py-4 mx-auto my-10  rounded-lg sm:w-4/5">
        <div class="container mx-auto ">
            <div class="flex justify-between w-full  py-2 pb-8">
                <div class="text-3xl font-black text-[#497174]">
                    Order Keranjang
                </div>

            </div>
            <div class="mt-auto overflow-x-auto">
                <table class="w-full border-collapse table-auto  bg-white pb-">
                    <thead class="">
                    <tr class="text-base font-semibold text-left border-t-4 border-b-4">
                        <th class="px-4 py-3  "><div class="flex items-center">
{{--                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">--}}
{{--                                <label for="default-checkbox" class="ml-2 text-sm font-semibold text-gray-900 dark:text-gray-300 ">Pilih Semua</label>--}}
                            </div></th>
                        <th class=" font-semibold border-b-2 ">Toko</th>
                        <th class="px-4 py-3 font-semibold border-b-2 ">Harga Satuan</th>
                        <th class="px-4 py-3 font-semibold border-b-2 ">Jumlah Barang</th>
                        <th class="px-2 font-semibold border-b-2 ">Total Harga</th>
                        <th class="px-4 py-3 font-semibold border-b-2 ">
                            <button type="submit" class=" text-white btn bg-[#D7306C] hover:bg-[#D7306C]-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                Hapus</button></th>
                    </tr>
                    </thead>
                    <tbody class="text-sm font-normal text-gray-700">

                    @foreach($carts as $cart)
                    <tr class="py-10 border-b border-gray-200 hover:bg-gray-100">
                        <td class="flex flex-row items-center px-4 py-4">
                            <div class="flex items-center">
{{--                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">--}}
{{--                                <label for="default-checkbox" class="ml-2 text-sm font-semibold text-gray-900 dark:text-gray-300 "></label>--}}
                                <div class="flex w-10 h-10 mr-4">
                                    <img alt="profil" src="{{asset('storage/'.$cart->catalog->catalog_image)}}" />
                                </div>
                                <div class="flex-1 pl-2 tracking-wide">
                                    <div class="font-medium text[#675959] pb-2">{{$cart->catalog->vendor->city}}</div>
                                    <div class="text-sm font-extrabold text-[#675959] pr-2 ">
                                        {{$cart->catalog->item_name}}
                                    </div>
                                    <div class="text-sm text-[#A89E9E] dark:text-gray-200 pt-2">
                                        Varian: {{$cart->catalog->size}}
                                    </div>
                                </div></div>
                        </td>
                        <td class="font-bold">
                            {{$cart->catalog->vendor->vendor_store}}
                        </td>
                        <td class="px-8 font-semibold">
                            Rp.{{$cart->catalog->item_price}}
                        </td>
                        <td class="px-2 py-4">
                            <p class="justify-items-center form-control mb-1 shadow appearance-none border rounded w-20 py-2 px-2 text-gray-250 leading-tight">{{$cart->amount}}</p>
                        </td>
                        <td class="px-1 text-lg font-bold text-[#497174]">
                            Rp.{{$cart->catalog->item_price * $cart->amount}}
                        </td>
                        <td class="px-4 py-4">
                            <form action="{{route('cart.delete', ['id' => $cart->id])}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="bg-transparent hover:bg-[#D7306C] text-[#D7306C] font-semibold hover:text-white py-2 px-4 border border-red-500 hover:border-transparent flex rounded-full">
                                    Hapus
                                </button>
                            </form>
                        </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class ="w-auto h-32 mx-auto rounded-lg shadow-lg mt-10 border-2 bg-white">
                <div class="text-3xl font-bold text-[#497174] px-8 py-4">
                    Address
                </div>
                <p class="px-8 text-xl mb-8">{{auth()->guard('web')->user()->cust_address}} (phone {{auth()->guard('web')->user()->cust_homephone}})</p>
            </div>
            <div class="bg-white rounded-lg shadow-lg mt-10 border-2 mb-10">
                <div class="columns-2 mt-10  mx-auto  bg-white">
                    <div class="text-3xl font-bold text-[#497174] px-8 py-4">
                        Pilih Metode Pengiriman
                    </div>
                    <table class="border-collapse table-fixed hover:table-fixed ">

                        <tr class=" hover:bg-gray-100">

                            <td class="flex flex-row items-center px-4 py-4 pl-8">
                                <div class="flex items-center">
                                    <input id="default-radio-1" type="radio" value="" name="pengiriman" class="w-4 h-4 text-[#497174] bg-gray-100 border-gray-300 focus:ring-[#497174] dark:focus:ring-[#497174] dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <div class="flex-1 pl-3 tracking-wide">
                                        <label for="default-radio-1" class="ml-4 text-m font-bold text-[#675959] pr-20">
                                            JNE</label>
                                        <div for="default-radio-1" class="ml-4 text-sm font-medium text-[#675959] pr-20">
                                            Estimasi: 2-3 hari</div>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <div class="text-lg font-bold text-[#675959] pr-2 ">
                                    Rp.25.000
                                </div>
                            </td>

                        </tr>

                        <tr class=" hover:bg-gray-100">
                            <td class="flex flex-row items-center px-4 py-4 pl-8">
                                <div class="flex items-center">
                                    <input id="radio" type="radio" value="" name="pengiriman" class="w-4 h-4 text-[#497174] bg-gray-100 border-gray-300 focus:ring-[#497174] dark:focus:ring-[#497174] dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <div class="flex-1 pl-3 tracking-wide">
                                        <label for="default-radio-1" class="ml-4 text-m font-bold text-[#675959] pr-20">
                                            JNT</label>
                                        <div for="default-radio-1" class="ml-4 text-sm font-medium text-[#675959] pr-20">
                                            Estimasi: 2-3 hari</div>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <div class="text-lg font-bold text-[#675959] pr-2 ">
                                    Rp.27.000
                                </div>
                            </td>

                        </tr>

                        <tr class=" hover:bg-gray-100">
                            <td class="flex flex-row items-center px-4 py-4 pl-8">
                                <div class="flex items-center">
                                    <input id="default-radio-1" type="radio" value="" name="pengiriman" class="w-4 h-4 text-[#497174] bg-gray-100 border-gray-300 focus:ring-[#497174] dark:focus:ring-[#497174] dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <div class="flex-1 pl-3 tracking-wide">
                                        <label for="default-radio-1" class="ml-4 text-m font-bold text-[#675959] pr-20">
                                            SiCepat</label>
                                        <div for="default-radio-1" class="ml-4 text-sm font-medium text-[#675959] pr-20">
                                            Estimasi: 1-2 hari</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="text-lg font-bold text-[#675959] pr-2 ">
                                    Rp.20.000
                                </div>
                            </td>
                        </tr>

                        <tr class=" hover:bg-gray-100">
                            <td class="flex flex-row items-center px-4 py-4 pl-8">
                                <div class="flex items-center">
                                    <input id="default-radio-1" type="radio" value="" name="pengiriman" class="w-4 h-4 text-[#497174] bg-gray-100 border-gray-300 focus:ring-[#497174] dark:focus:ring-[#497174] dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <div class="flex-1 pl-3 tracking-wide">
                                        <label for="default-radio-1" class="ml-4 text-m font-bold text-[#675959] pr-20">
                                            Go-Send</label>
                                        <div for="default-radio-1" class="ml-4 text-sm font-medium text-[#675959] pr-20">
                                            Estimasi: On the same day</div>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <div class="text-lg font-bold text-[#675959] pr-2 ">
                                    Rp.15.000
                                </div>
                            </td>

                        </tr>

                    </table>


                    <div class=" flex justify-center items-center pt-5 pl-10 pb-32 ">


                        <div class=" rounded overflow-hidden shadow-lg  bg-white">
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2">Ringkasan Belanja</div>


                                <table class= "border-separate border-spacing-2 border-slate-400 font-semibold text-md">
                                    <tbody>
                                    <tr>
                                        <td>Total Harga</td>
                                        <td></td>
                                        <td>Rp.1.250.600 <!-- <-Harga Dummy;Harga sesuai database--></td>
                                    </tr>
                                    <tr>
                                        <td>Diskon</td>
                                        <td></td>
                                        <td>10% <!-- <-Harga Dummy;Harga sesuai database--></td>
                                    </tr>
                                    <tr>
                                        <td><hr class="my-auto border-t-2"/></td>
                                    </tr>

                                    <tr class="font-bold">
                                        <td >Total Pembayaran</td>
                                        <td></td>
                                        <td>Rp.-<!-- <-Ukuran Dummy;Ukuran sesuai database--></td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div class="px-6 pt-4 pb-2">
                                <div class = "flex justify-center">

                                    <button type="submit" class=" flex justify-center text-white btn bg-[#497174] font-bold py-2 px-20 rounded focus:outline-none focus:shadow-outline">
                                        Checkout</button>
                                </div>
                                <p class="text-center text-gray-500 text-xs pt-4">
                                    &copy;Sejuk2023.
                                </p>

                            </div>
                        </div>
                    </div>






                </div>

                <div class="columns-2 mx-auto bg-white">

                    <div class="rounded overflow-hidden">

                        <div class="text-3xl font-bold text-[#497174] px-8 py-4 mb-4">
                            Pilih Metode Pembayaran

                        </div>

                        <div class="mb-10 ml-8">
                            <table class="border-collapse table-fixed hover:table-fixed">
                                <caption class="caption-top text-left  text-lg font-bold text-[#675959] ">
                                    Pembayaran lain
                                </caption>
                                <tr class=" hover:bg-gray-100 border-b border-gray-200">
                                    <td class="flex flex-row items-center px-4 py-4">
                                        <div class="flex items-center">
                                            <input id="default-radio-1" type="radio" value="" name="pembayaran" class="w-4 h-4 text-[#497174] bg-gray-100 border-gray-300 focus:ring-[#497174] dark:focus:ring-[#497174] dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <div class="flex w-10 h-10 ml-4">
                                                <img alt="profil" src="images/gopay.png" />
                                            </div>
                                            <div class="flex-1 tracking-wide">
                                                <label for="default-radio-1" class="ml-4 text-m font-bold text-[#675959] pr-20">
                                                    Rp100.000</label>
                                                <div for="default-radio-1" class="ml-4 text-sm font-medium text-[#675959] pr-20">
                                                    GoPay Coins 200.000</div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr class=" hover:bg-gray-100 border-b border-gray-200">
                                    <td class="flex flex-row items-center px-4 py-4">
                                        <div class="flex items-center">
                                            <input id="default-radio-1" type="radio" value="" name="pembayaran" class="w-4 h-4 text-[#497174] bg-gray-100 border-gray-300 focus:ring-[#497174] dark:focus:ring-[#497174] dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <div class="flex w-10 h-10 ml-4 items-center">
                                                <img alt="profil" src="images/ovo1..jpeg" />
                                            </div>
                                            <div class="flex-1 pl-1 tracking-wide">
                                                <label for="default-radio-1" class="ml-4 text-m font-bold text-[#675959] pr-20">
                                                    Rp150.000</label>
                                                <div for="default-radio-1" class="ml-4 text-sm font-medium text-[#675959] pr-20">
                                                    OVO Points 0</div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>




                        <div class="mb-10 ml-8">
                            <table class="border-collapse table-fixed hover:table-fixed">
                                <caption class="caption-top text-left text-lg font-bold text-[#675959] ">
                                    Tunai di Gerai
                                </caption>
                                <tr class=" hover:bg-gray-100 border-b border-gray-200">
                                    <td class="flex flex-row items-center px-4 py-4">
                                        <div class="flex items-center">
                                            <input id="default-radio-1" type="radio" value="" name="pembayaran" class="w-4 h-4 text-[#497174] bg-gray-100 border-gray-300 focus:ring-[#497174] dark:focus:ring-[#497174] dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <div class="flex w-10 h-10 ml-4">
                                                <img alt="profil" src="images/alfamart.svg" />
                                            </div>
                                            <div class="flex-1 tracking-wide">
                                                <label for="default-radio-1" class="ml-4 text-m font-bold text-[#675959] pr-20">
                                                    Alfamart / Alfamidi / Lawson / Dan+Dan</label>

                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr class=" hover:bg-gray-100 border-b border-gray-200">
                                    <td class="flex flex-row items-center px-4 py-4">
                                        <div class="flex items-center">
                                            <input id="default-radio-1" type="radio" value="" name="pembayaran" class="w-4 h-4 text-[#497174] bg-gray-100 border-gray-300 focus:ring-[#497174] dark:focus:ring-[#497174] dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <div class="flex w-10 h-10 ml-4 items-center">
                                                <img alt="profil" src="images/indomaret.png" />
                                            </div>
                                            <div class="flex-1 pl-3 tracking-wide">
                                                <label for="default-radio-1" class="ml-4 text-m font-bold text-[#675959] pr-20">
                                                    Indomaret / Ceriamart</label>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                            </table>
                        </div>



                        <div class="mb-20 ml-8">
                            <table class="border-collapse table-fixed hover:table-fixed">
                                <caption class="caption-top text-left text-lg font-bold text-[#675959] ">
                                    Kartu Kredit
                                </caption>
                                <tr class=" hover:bg-gray-100 border-b border-gray-200">
                                    <td class="flex flex-row items-center px-4 py-4">
                                        <div class="flex items-center">
                                            <input id="default-radio-1" type="radio" value="" name="pembayaran" class="w-4 h-4 text-[#497174] bg-gray-100 border-gray-300 focus:ring-[#497174] dark:focus:ring-[#497174] dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <div class="flex w-10 h-10 ml-4">
                                                <img alt="profil" src="images/kredit.png" />
                                            </div>
                                            <div class="flex-1 tracking-wide">
                                                <label for="default-radio-1" class="ml-4 text-m font-bold text-[#675959] pr-20">
                                                    Kartu Kredit / Debit</label>

                                            </div>
                                        </div>
                                    </td>
                                </tr>

                            </table>
                        </div>

                    </div>


                    <div class="text-3xl font-bold text-[#497174] px-8 py-4 mb-12 mt-24">

                    </div>

                    <div class="mb-10 ml-8">
                        <table class="border-collapse table-fixed hover:table-fixed">
                            <caption class="caption-top text-left  text-lg font-bold text-[#675959] ">
                                Transfer Virtual Account / Via Bank
                            </caption>
                            <tr class=" hover:bg-gray-100 border-b border-gray-200">
                                <td class="flex flex-row items-center px-4 py-4">
                                    <div class="flex items-center">
                                        <input id="default-radio-1" type="radio" value="" name="bank" class="w-4 h-4 text-[#497174] bg-gray-100 border-gray-300 focus:ring-[#497174] dark:focus:ring-[#497174] dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <div class="flex w-10 h-5 ml-4">
                                            <img alt="profil" src="images/mandiri.png" />
                                        </div>
                                        <div class="flex-1 tracking-wide">
                                            <label for="default-radio-1" class="ml-4 text-m font-bold text-[#675959] pr-20">
                                                Bank Mandiri</label>
                                            <div for="default-radio-1" class="ml-4 text-sm font-medium text-[#675959] pr-20">
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr class=" hover:bg-gray-100 border-b border-gray-200">
                                <td class="flex flex-row items-center px-4 py-4">
                                    <div class="flex items-center">
                                        <input id="default-radio-1" type="radio" value="" name="bank" class="w-4 h-4 text-[#497174] bg-gray-100 border-gray-300 focus:ring-[#497174] dark:focus:ring-[#497174] dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <div class="flex w-10 h-10 ml-4 items-center">
                                            <img alt="profil" src="images/bca.png" />
                                        </div>
                                        <div class="flex-1 pl-1 tracking-wide">
                                            <label for="default-radio-1" class="ml-4 text-m font-bold text-[#675959] pr-20">
                                                Bank BCA</label>
                                            <div for="default-radio-1" class="ml-4 text-sm font-medium text-[#675959] pr-20">
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr class=" hover:bg-gray-100 border-b border-gray-200">
                                <td class="flex flex-row items-center px-4 py-4">
                                    <div class="flex items-center">
                                        <input id="default-radio-1" type="radio" value="" name="bank" class="w-4 h-4 text-[#497174] bg-gray-100 border-gray-300 focus:ring-[#497174] dark:focus:ring-[#497174] dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <div class="flex w-10 h-10 ml-4 items-center">
                                            <img alt="profil" src="images/bni.png" />
                                        </div>
                                        <div class="flex-1 pl-1 tracking-wide">
                                            <label for="default-radio-1" class="ml-4 text-m font-bold text-[#675959] pr-20">
                                                Bank BNI</label>
                                            <div for="default-radio-1" class="ml-4 text-sm font-medium text-[#675959] pr-20">
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr class=" hover:bg-gray-100 border-b border-gray-200">
                                <td class="flex flex-row items-center px-4 py-4">
                                    <div class="flex items-center">
                                        <input id="default-radio-1" type="radio" value="" name="bank" class="w-4 h-4 text-[#497174] bg-gray-100 border-gray-300 focus:ring-[#497174] dark:focus:ring-[#497174] dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <div class="flex w-10 h-10 ml-4 items-center">
                                            <img alt="profil" src="images/bri.svg" />
                                        </div>
                                        <div class="flex-1 pl-1 tracking-wide">
                                            <label for="default-radio-1" class="ml-4 text-m font-bold text-[#675959] pr-20">
                                                Bank BRI</label>
                                            <div for="default-radio-1" class="ml-4 text-sm font-medium text-[#675959] pr-20">
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr class=" hover:bg-gray-100 border-b border-gray-200">
                                <td class="flex flex-row items-center px-4 py-4">
                                    <div class="flex items-center">
                                        <input id="default-radio-1" type="radio" value="" name="bank" class="w-4 h-4 text-[#497174] bg-gray-100 border-gray-300 focus:ring-[#497174] dark:focus:ring-[#497174] dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <div class="flex w-10 h-10 ml-4 items-center">
                                            <img alt="profil" src="images/bsi.jpg" />
                                        </div>
                                        <div class="flex-1 pl-1 tracking-wide">
                                            <label for="default-radio-1" class="ml-4 text-m font-bold text-[#675959] pr-20">
                                                Bank Syariah Indonesia (BSI)</label>
                                            <div for="default-radio-1" class="ml-4 text-sm font-medium text-[#675959] pr-20">
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>


                        </table>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
