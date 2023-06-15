<div
    class="flex flex-col items-start justify-start px-14 2xl:px-28 py-16 2xl:py-24 w-full gap-16"
    x-show="tab === '{{$tab}}'"
    x-transition
    x-cloak
>
    @if(count($orders) === 0)
        <img src="/images/no-order.png" class="mx-auto" alt="no-order" />
    @else
        @foreach($orders as $order)
            <a class="flex flex-row justify-between items-center w-full" href="{{route('order', ['id' => $order->id])}}">
                <div class="flex flex-row items-center gap-8">
                    <img
                        src="{{asset('storage/'.$order->items[0]->catalog->catalog_image)}}"
                        alt="order-1"
                        class="w-[85px]"
                    />
                    <div
                        class="flex flex-col items-start text-[#675959] w-96 text-start gap-4"
                    >
                        <p class="text-lg font-medium">{{$order->vendor->city}}</p>
                        <h3 class="text-[22px] leading-none font-semibold">
                            {{$order->items[0]->catalog->item_name}}
                        </h3>
                    </div>
                </div>
                <p class="text-lg font-extrabold text-[#675959] w-24">
                    {{$order->items[0]->catalog->category->category_type}}
                </p>
                <p class="text-lg font-semibold text-[#675959] w-32">
                    Total Rp{{$order->total_price}}
                </p>
            </a>

        @endforeach
    @endif
</div>
