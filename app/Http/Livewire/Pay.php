<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;
use Midtrans\Config;
use Midtrans\Snap;

class Pay extends Component
{

    public $order;

    public function render()
    {
        return view('livewire.pay');
    }

    public function pay(Order $order)
    {
        Config::$serverKey = 'SB-Mid-server-hHE4EtJDMWsMRnkfWkMV6SOS';
        Config::$isProduction = false;
        Config::$isSanitized = true;
        Config::$is3ds = true;


        $params = array(
            'transaction_details' => array(
                'order_id' => $order->id,
                'gross_amount' => $order->fee,
            ),
            'customer_details' => array(
                'first_name' => $order->client->name,
                'email' => $order->client->email,
                'phone' => $order->client->phone,
            ),
        );
        $link = Snap::createTransaction($params);
        return redirect()->away($link->redirect_url);
    }
}
