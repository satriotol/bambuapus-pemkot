<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\SocialMedia;
use App\Models\Status;
use App\Models\UserReport;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home()
    {
        $sliders = Slider::all();
        $statuses = Status::all();
        $socialMedias = SocialMedia::all();
        $user_reports_count = UserReport::all()->count();
        return view('frontend.home', compact('sliders', 'statuses', 'user_reports_count', 'socialMedias'));
    }
}
