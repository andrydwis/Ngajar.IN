<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Carbon\Carbon;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $year = Carbon::now()->format('Y');
        $results = Order::selectRaw('year(created_at) year, monthname(created_at) month, count(*) data')
            ->groupBy('year', 'month')
            ->orderBy('year', 'desc')
            ->get()->where('year', $year);
        $data = [
            'year' => $year,
            'results' => $results
        ];
        if (auth()->user()->status == 'unverified') {
            session()->flash('status', 'Your account is still not verified by admin, Please wait');
        }
        return view('dashboard.index', $data);
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
