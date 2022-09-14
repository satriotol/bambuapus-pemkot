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
        $chart_bar = $this->reports();
        return view('pages.dashboard', compact('statuses', 'total_reports', 'total_users', 'chart_bar'));
    }
    public function reports()
    {
        $user_reports = UserReport::select(DB::raw("COUNT(*) as count"))
            ->whereYear('created_at', date('Y'))
            ->GroupBy(DB::raw("Month(created_at)"))
            ->pluck('count');
        $months = UserReport::select(DB::raw("Month(created_at) as month"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('month');
        $datas = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        foreach ($months as $index => $month) {
            $datas[$month - 1] = $user_reports[$index];
        }
        return $datas;
    }
}
