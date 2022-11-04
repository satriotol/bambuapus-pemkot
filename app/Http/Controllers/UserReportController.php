<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Status;
use App\Models\User;
use App\Models\UserReport;
use App\Models\UserReportStatus;
use App\Notifications\NewReportNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;

class UserReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('permission:laporan-index|laporan-create|laporan-edit|laporan-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:laporan-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:laporan-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:laporan-delete', ['only' => ['destroy']]);
    }
    public function index(Request $request)
    {
        $status_search = $request->status_search;
        $date_search = $request->date_search;
        if (Auth::user()->user_detail) {
            $user_reports = UserReport::whereHas('user', function ($q) {
                $q->where('user_id', Auth::user()->id);
            })->orderBy('id', 'DESC')
                ->when($status_search, function ($q) use ($status_search) {
                    $q->where('status_id', $status_search);
                })->when($date_search, function ($q) use ($date_search) {
                    $q->whereDate('created_at', $date_search);
                })->paginate(10);
        } else {
            $user_reports = UserReport::orderBy('id', 'DESC')
                ->when($status_search, function ($q) use ($status_search) {
                    $q->where('status_id', $status_search);
                })->when($date_search, function ($q) use ($date_search) {
                    $q->whereDate('created_at', $date_search);
                })->paginate(10);
        }
        $statuses = Status::all();
        $request->flash();
        return view('pages.user_report.index', compact('user_reports', 'statuses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genders = UserReport::GENDER;
        $kecamatans = Kecamatan::all();
        return view('pages.user_report.create', compact('genders', 'kecamatans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'user_id' => 'nullable',
            'name' => 'required',
            'age' => 'numeric',
            'address' => 'required',
            'note' => 'nullable',
            'gender' => 'required',
            'birthplace' => 'required',
            'parent' => 'required',
            'phone' => 'required',
            'kelurahan_id' => 'required',
            'kecamatan_id' => 'required',
        ]);
        $data['user_id'] = Auth::user()->id;
        $data['status_id'] = Status::first()->id;
        $user_report = UserReport::create($data);
        UserReportStatus::create([
            'user_report_id' => $user_report->id,
            'status_id' => Status::first()->id
        ]);
        $admins = User::whereDoesntHave('user_detail')->get();
        Notification::send($admins, new NewReportNotification($user_report));
        session()->flash('success');
        return redirect()->route('user_report.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserReport  $userReport
     * @return \Illuminate\Http\Response
     */
    public function show(UserReport $user_report)
    {
        $statuses = Status::all();
        if ($user_report->user_id != Auth::user()->id && Auth::user()->user_detail != null) {
            return back();
        }
        return view('pages.user_report.detail', compact('user_report', 'statuses'));
    }
    public function getPdf(UserReport $user_report)
    {
        $pdf = Pdf::loadView('pdf.report', ['user_report' =>
        $user_report]);
        return $pdf->download('report.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserReport  $userReport
     * @return \Illuminate\Http\Response
     */
    public function edit(UserReport $user_report)
    {
        if ($user_report->user_id != Auth::user()->id && Auth::user()->user_detail != null || $user_report->status_id != 1) {
            return back();
        }
        $genders = UserReport::GENDER;
        $kecamatans = Kecamatan::all();
        return view('pages.user_report.create', compact('user_report', 'genders', 'kecamatans'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserReport  $userReport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserReport $user_report)
    {
        $data = $this->validate($request, [
            'user_id' => 'nullable',
            'name' => 'required',
            'age' => 'numeric',
            'address' => 'required',
            'note' => 'nullable',
            'gender' => 'required',
            'birthplace' => 'required',
            'parent' => 'required',
            'phone' => 'required',
            'kelurahan_id' => 'required',
            'kecamatan_id' => 'required',
        ]);
        $user_report->update($data);
        session()->flash('success');
        return redirect()->route('user_report.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserReport  $userReport
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserReport $user_report)
    {
        $user_report->delete();
        $user_report->user_report_statuses()->delete();
        session()->flash('success');
        return redirect()->route('user_report.index');
    }
    public function getKelurahan($kecamatan_id)
    {
        $kelurahans = Kelurahan::where('relasi_kecamatan', $kecamatan_id)->get();
        return response()->json($kelurahans);
    }
}
