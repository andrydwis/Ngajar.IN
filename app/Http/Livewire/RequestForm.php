<?php

namespace App\Http\Livewire;

use App\Models\Schedule;
use App\Models\User;
use Livewire\Component;

class RequestForm extends Component
{

    public User $user;
    public $dates;
    public $date_select;
    public $min;
    public $max;

    public function render()
    {
        return view('livewire.request-form');
    }

    public function getSchedule($date, $id)
    {
        $this->date_select = $date;
        $schedule = Schedule::find($id);
        $this->min = $schedule->hour_start;
        $this->max = $schedule->hour_end;
    }
}
