<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //
    public function index()
    {
        return view('dashboard.index');
    }

    public function profile()
    {
        return view('dashboard.profile');
    }

    public function editProfile()
    {
        return view('dashboard.editProfile');
    }

    public function editPassword()
    {
        return view('dashboard.editPassword');
    }
}
