<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\User;
use Illuminate\Http\Request;

class MentorController extends Controller
{
    //
    public function schedule()
    {
        $schedules = auth()->user()->schedules;

        $data = [
            'schedules' => $schedules
        ];

        return view('mentor.schedule', $data);
    }

    public function addSchedule(Request $request)
    {
        $request->validate([
            'day' => ['required'],
            'hour' => ['required'],
        ]);

        $schedule = new Schedule;
        $schedule->user_id = auth()->user()->id;
        $schedule->day = $request->day;
        $schedule->hour = $request->hour;
        $schedule->save();

        return back();
    }

    public function editSchedule(Schedule $schedule, Request $request)
    {
        $request->validate([
            'day' => ['required'],
            'hour' => ['required'],
        ]);

        $schedule->day = $request->day;
        $schedule->hour = $request->hour;
        $schedule->save();

        return back();
    }

    public function deleteSchedule(Schedule $schedule)
    {
        $schedule->delete();

        return back();
    }
}
