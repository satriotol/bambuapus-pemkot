<?php

namespace App\Http\Controllers;

use App\Models\UserReportStatus;
use Illuminate\Http\Request;

class UserReportStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $user_report_id)
    {
        $data = $this->validate($request, [
            'user_report_id' => 'nullable',
            'status_id' => 'required',
            'note' => 'nullable',
            'file' => 'nullable|file',
        ]);
        $data['user_report_id'] = $user_report_id;

        UserReportStatus::create($data);
        session()->flash('success');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserReportStatus  $userReportStatus
     * @return \Illuminate\Http\Response
     */
    public function show(UserReportStatus $userReportStatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserReportStatus  $userReportStatus
     * @return \Illuminate\Http\Response
     */
    public function edit(UserReportStatus $userReportStatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserReportStatus  $userReportStatus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserReportStatus $userReportStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserReportStatus  $userReportStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserReportStatus $user_report_status)
    {
        $user_report_status->delete();
        session()->flash('success');
        return back();
    }
}
