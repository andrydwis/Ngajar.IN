<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MentorController extends Controller
{
    //
    public function Schedule()
    {
        $schedules = Auth::user()->schedules;

        $data = [
            'schedules' => $schedules
        ];

        return view('mentor.schedule', $data);
    }
}
