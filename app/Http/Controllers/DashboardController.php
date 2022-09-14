<?php

namespace App\Http\Controllers;

use App\Models\Status;
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
        return view('pages.dashboard', compact('statuses'));
    }
}
