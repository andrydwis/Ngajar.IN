<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Schedule;
use App\Models\User;
use Illuminate\Http\Request;

class MentorController extends Controller
{
    //
    public function orderRequest(User $user)
    {
        $orders = Order::where('mentor_id', $user->id)->with('client', 'mentor')->paginate(2);
        $data = [
            'orders' => $orders
        ];

        return view('mentor.orderRequest', $data);
    }

    public function acceptRequest(Order $order)
    {
        $order->status = 'waiting payment';
        $order->save();
        session()->flash('status', 'Request berhasil di acc, menunggu pembayaran dr user');
        return back();
    }

    public function declineRequest(Order $order)
    {
        $order->status = 'decline';
        $order->save();
        session()->flash('status', 'Request berhasil di tolak');
        return back();
    }
}
