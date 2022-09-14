<?php

namespace App\Http\Controllers;

use App\Models\UserReport;
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
            'file' => 'nullable|file|max:200000',
        ]);
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $name = $file->getClientOriginalName();
            $file_name = date('mdYHis') . '-' . $name;
            $file = $file->storeAs('file', $file_name, 'public_uploads');
            $data['file'] = $file;
        };
        $data['user_report_id'] = $user_report_id;

        $user_report_status = UserReportStatus::create($data);
        $user_report = UserReport::where('id', $user_report_id)->first();
        $user_report->update([
            'status_id' => $user_report_status->status_id
        ]);
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
        $id = $user_report_status->user_report_id;
        $user_report_status->delete();
        $user_report_status_master = UserReportStatus::where('user_report_id', $id)->orderBy('id', 'desc')->first();
        $user_report = UserReport::where('id', $id)->first();
        $user_report->update([
            'status_id' => $user_report_status_master->status_id,
        ]);
        session()->flash('success');
        return back();
    }
}
