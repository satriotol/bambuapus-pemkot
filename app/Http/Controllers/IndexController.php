<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Link;
use App\Models\Slider;
use App\Models\SocialMedia;
use App\Models\Status;
use App\Models\UserReport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class IndexController extends Controller
{
    public function __construct()
    {
        //its just a dummy data object.
        $about = About::all()->first();
        $socialMedias = SocialMedia::all();
        $links = Link::all();
        // Sharing is caring
        View::share(compact('about', 'socialMedias', 'links'));
    }
    public function home()
    {
        $sliders = Slider::all();
        $statuses = Status::all();
        $user_reports_count = UserReport::all()->count();
        return view('frontend.home', compact('sliders', 'statuses', 'user_reports_count'));
    }
}
