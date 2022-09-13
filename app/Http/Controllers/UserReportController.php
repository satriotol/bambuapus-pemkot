<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Models\UserReport;
use App\Models\UserReportStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_reports = UserReport::orderBy('id', 'DESC')->paginate(5);
        $statuses = Status::all();
        return view('pages.user_report.index', compact('user_reports', 'statuses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.user_report.create');
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
            'note' => 'nullable'
        ]);
        $data['user_id'] = Auth::user()->id;
        $data['status_id'] = Status::first()->id;
        $user_report = UserReport::create($data);
        UserReportStatus::create([
            'user_report_id' => $user_report->id,
            'status_id' => Status::first()->id
        ]);
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
        return view('pages.user_report.detail', compact('user_report', 'statuses'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserReport  $userReport
     * @return \Illuminate\Http\Response
     */
    public function edit(UserReport $user_report)
    {
        return view('pages.user_report.create', compact('user_report'));
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
            'note' => 'nullable'
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
}
