<?php

namespace App\Http\Livewire;

use Livewire\Component;

class OngoingOrder extends Component
{

    public $order;

    public function render()
    {
        return view('livewire.ongoing-order');
    }
}
