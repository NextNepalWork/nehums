<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\SiteSetting;
use App\Models\Slider;
use App\Models\Step;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $setting=SiteSetting::first();
        $sliders=Slider::where('status',1)->get();
        $steps=Step::all();
        $banner=Banner::first();

        return view('frontend.index',compact('setting','sliders','steps','banner'));
    }
    
}
