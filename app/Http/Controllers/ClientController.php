<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;


class ClientController extends Controller
{
    //
    public function mentorList()
    {
        $mentors = User::where('role', 'mentor')->where('status', 'verified')->with('skills', 'detail')->get();
        $data = [
            'mentors' => $mentors
        ];

        return view('client.mentorList', $data);
    }

    public function mentorDetail(User $user)
    {

        $startDate = Carbon::now();
        $endDate = Carbon::now()->addDays(30);
        $period = CarbonPeriod::create($startDate, $endDate);
        $schedules = $user->schedules;
        $dates = [];
        $sch = [];

        if ($schedules) {
            foreach ($period as $date) {
                foreach ($schedules as $schedule) {
                    if ($date->is($schedule->day)) {
                        $dates[] = $date->format('D, d-m-Y');
                        $sch[] = $schedule->id;
                    }
                }
            }
            $dates = array_combine($dates, $sch);
        }

        //merge array


        $data = [
            'user' => $user,
            'schedules' => $schedules,
            'dates' => $dates,
        ];

        return view('client.mentorDetail', $data);
    }

    
}
