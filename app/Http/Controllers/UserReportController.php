<?php

namespace App\Http\Controllers;

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
        $user_reports = UserReport::paginate(5);
        return view('pages.user_report.index', compact('user_reports'));
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
        $user_report = UserReport::create($data);
        UserReportStatus::create([
            'user_report_id' => $user_report->id,
            'status' => UserReportStatus::STATUSES[0]
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
    public function show(UserReport $userReport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserReport  $userReport
     * @return \Illuminate\Http\Response
     */
    public function edit(UserReport $userReport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserReport  $userReport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserReport $userReport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserReport  $userReport
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserReport $userReport)
    {
        //
    }
}
