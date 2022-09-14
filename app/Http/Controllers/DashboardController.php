<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $statuses = Status::all();
        return view('pages.dashboard', compact('statuses'));
    }
}
