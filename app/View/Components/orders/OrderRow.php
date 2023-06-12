<?php

namespace App\View\Components\orders;

use App\Models\Order;
use Illuminate\View\Component;

class OrderRow extends Component
{
    public $tab;
    public $orders;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $tab, $orders)
    {
        $this->tab = $tab;
        $this->orders = $orders;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('orders.order-row');
    }
}
