<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Api\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\UserReport;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function getSiswaPutusSekolah(Request $request)
    {
        $gender = $request->gender;
        $kelurahan = $request->kelurahan;
        $user_reports = UserReport::with('kelurahan')->latest();
        if ($gender) {
            $user_reports->where('gender', $gender);
        }
        if ($kelurahan) {
            $user_reports->whereHas('kelurahan', function ($q) use ($kelurahan) {
                $q->where('nama_kelurahan', $kelurahan);
            });
        }
        $user_reports = $user_reports->get();
        $user_reports->makeHidden(['user_id', 'status_id', 'address', 'phone', 'birthplace', 'parent', 'name']);
        return ResponseFormatter::success($user_reports);
    }
}
