<?php

namespace App\Http\Livewire;

use App\Jobs\FinishOrder;
use App\Models\Order;
use Carbon\Carbon;
use Livewire\Component;

class StartOrder extends Component
{

    public $order;
    public $now;
    public $hour_start;
    public $hour_end;
    public $status;
    public $condition;

    public function mount()
    {
        $this->now = Carbon::now();
        $this->hour_start = $this->order->hour_start;
        $this->hour_end = $this->order->hour_end;
        $check = $this->now->lessThan($this->hour_start);
        if ($check) {
            $this->condition = 'wait';
        } else {
            $this->condition = 'start';
        }
        $isGoing = $this->now->between($this->hour_start, $this->hour_end);
        $isFinish = $this->now->greaterThan($this->hour_end);
        if($isFinish && !$isGoing){
            $this->condition = 'over';
        }else{
            $this->condition = 'start';
        }
    }

    public function render()
    {
        return view('livewire.start-order');
    }

    public function start(Order $order)
    {
        $now = Carbon::now();
        $until = $order->hour_end;
        $duration = $now->diffInMinutes($until);
        FinishOrder::dispatch($order)->delay(now()->addMinutes($duration));;
    }
}
