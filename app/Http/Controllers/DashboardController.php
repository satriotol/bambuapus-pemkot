<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Models\User;
use App\Models\UserReport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::user()->user_detail) {
            $statuses = Status::all();
        } else {
            $statuses = Status::all();
        }
        $total_reports = UserReport::all()->count();
        $total_users = User::has('user_detail')->get()->count();
        return view('pages.dashboard', compact('statuses', 'total_reports', 'total_users'));
    }
}
