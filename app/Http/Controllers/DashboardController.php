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
    public function index(Request $request)
    {
        if (Auth::user()->user_detail) {
            $statuses = Status::all();
        } else {
            $statuses = Status::all();
        }

        $total_reports = UserReport::all()->count();
        $total_users = User::has('user_detail')->get()->count();
        $chart_bar = $this->reports($request);
        $pie_chart = $this->pie_chart();
        return view('pages.dashboard', compact('statuses', 'total_reports', 'total_users', 'chart_bar', 'pie_chart'));
    }
    public function reports(Request $request)
    {
        if (!$request->year) {
            $year = date('Y');
        } else {
            $year = $request->year;
        }
        $user_reports1 = UserReport::where('status_id', 1)->select(DB::raw("COUNT(*) as count"))
            ->whereYear('created_at', $year)
            ->GroupBy(DB::raw("Month(created_at)"))
            ->pluck('count');
        $months1 = UserReport::where('status_id', 1)->select(DB::raw("Month(created_at) as month"))
            ->whereYear('created_at', $year)
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('month');
        $user_reports2 = UserReport::where('status_id', 2)->select(DB::raw("COUNT(*) as count"))
            ->whereYear('created_at', $year)
            ->GroupBy(DB::raw("Month(created_at)"))
            ->pluck('count');
        $months2 = UserReport::where('status_id', 2)->select(DB::raw("Month(created_at) as month"))
            ->whereYear('created_at', $year)
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('month');
        $user_reports3 = UserReport::where('status_id', 3)->select(DB::raw("COUNT(*) as count"))
            ->whereYear('created_at', $year)
            ->GroupBy(DB::raw("Month(created_at)"))
            ->pluck('count');
        $months3 = UserReport::where('status_id', 3)->select(DB::raw("Month(created_at) as month"))
            ->whereYear('created_at', $year)
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('month');
        $user_reports4 = UserReport::where('status_id', 4)->select(DB::raw("COUNT(*) as count"))
            ->whereYear('created_at', $year)
            ->GroupBy(DB::raw("Month(created_at)"))
            ->pluck('count');
        $months4 = UserReport::where('status_id', 4)->select(DB::raw("Month(created_at) as month"))
            ->whereYear('created_at', $year)
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('month');
        $datas1 = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        $datas2 = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        $datas3 = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        $datas4 = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        foreach ($months1 as $index => $month) {
            $datas1[$month - 1] = $user_reports1[$index];
        }
        foreach ($months2 as $index => $month) {
            $datas2[$month - 1] = $user_reports2[$index];
        }
        foreach ($months3 as $index => $month) {
            $datas3[$month - 1] = $user_reports3[$index];
        }
        foreach ($months4 as $index => $month) {
            $datas4[$month - 1] = $user_reports4[$index];
        }
        $datas = [
            [
                'backgroundColor' => '#fbbc06',
                'data' => $datas1,
                'label' => 'PENDING'
            ],
            [
                'backgroundColor' => '#66d1d1',
                'data' => $datas2,
                'label' => 'PROSES'
            ],
            [
                'backgroundColor' => '#05a34a',
                'data' => $datas3,
                'label' => 'SELESAI'
            ],
            [
                'backgroundColor' => '#ff3366',
                'data' => $datas4,
                'label' => 'DITOLAK'
            ],
        ];
        $user_reports1 = UserReport::where('status_id', 1)->whereYear('created_at', $year)->get()->count();
        $user_reports2 = UserReport::where('status_id', 2)->whereYear('created_at', $year)->get()->count();
        $user_reports3 = UserReport::where('status_id', 3)->whereYear('created_at', $year)->get()->count();
        $user_reports4 = UserReport::where('status_id', 4)->whereYear('created_at', $year)->get()->count();
        $datas2 = [
            $user_reports1,
            $user_reports2,
            $user_reports3,
            $user_reports4,
        ];
        return [$datas, $datas2];
    }
    public function pie_chart()
    {
        $user_reports1 = UserReport::where('status_id', 1)->get()->count();
        $user_reports2 = UserReport::where('status_id', 2)->get()->count();
        $user_reports3 = UserReport::where('status_id', 3)->get()->count();
        $user_reports4 = UserReport::where('status_id', 4)->get()->count();
        $datas = [
            $user_reports1,
            $user_reports2,
            $user_reports3,
            $user_reports4,
        ];
        return $datas;
    }
}
