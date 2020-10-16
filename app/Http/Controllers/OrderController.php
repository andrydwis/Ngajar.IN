<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Schedule;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            'day' => ['required'],
            'hour_start' => ['required', 'date_format:H:i'],
            'hour_end' => ['required', 'date_format:H:i', 'after:hour_start']
        ]);

        $check = Order::where('client_id', auth()->user()->id)->where('mentor_id', $request->mentor_id)->where('status', 'pending')->orWhere('status', 'ongoing')->get();
        if ($check->isEmpty()) {
            $hour_start = Carbon::make($request->hour_start);
            $hour_end = Carbon::make($request->hour_end);
            $request->duration = $hour_start->diffInMinutes($hour_end);

            $order = new Order();
            $order->client_id = auth()->user()->id;
            $order->mentor_id = $request->mentor_id;
            $order->day = $request->day;
            $order->hour_start = $request->hour_start;
            $order->hour_end = $request->hour_end;
            $order->duration = $request->duration;
            $order->fee = ($request->duration / 60) * 20000;
            $order->status = 'pending';
            $order->save();
            session()->flash('status', 'Order request sukses, tolong entenono mentor e acc yoo !');
            return back();
        } else {
            session()->flash('status', 'Order request telah ada, tolong entenono sek lah !');
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
