<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Event;
use App\Models\Media;
use App\Models\Message;
use App\Models\Opportunity;
use App\Models\Page;
use App\Models\Photo;
use App\Models\Program;
use App\Models\SiteSetting;
use App\Models\Slider;
use App\Models\Step;
use App\Models\Team;
use App\Models\Video;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $setting=SiteSetting::first();
        $sliders=Slider::where('status',1)->get();
        $steps=Step::all();
        $banner=Banner::first();
        $events=Event::orderBy('created_at','desc')->get();
        $programs=Program::orderBy('created_at','desc')->where('status',1)->limit(3)->get();

        return view('frontend.index',compact('setting','sliders','steps','banner','events','programs'));
    }
    public function about(){
        $setting=SiteSetting::first();

        $about = Page::where('slug','about-us')->first();
        if(empty($about)){
            Page::create([
                'title' => 'About Us',
                'slug' => 'about-us',
                'content' => 'This is about page',
            ]);
        }
        return view('frontend.about',compact('setting','about'));
    }

    public function program(){
        $setting=SiteSetting::first();
        $programs = Program::orderBy('created_at','desc')->where('status',1)->get();
        return view('frontend.program',compact('setting','programs'));
    }

    public function program_detail($id){
        $setting=SiteSetting::first();
        $program = Program::findOrFail($id);
        $media_coverages = Media::orderBy('created_at','desc')->limit(5)->get();
        $photos = Photo::latest()->limit(8)->get();
        
        return view('frontend.program-detail',compact('setting','program','media_coverages','photos'));
    }

    public function events(){
        $setting=SiteSetting::first();
        $events = Event::latest()->get();
        
        return view('frontend.event',compact('setting','events'));
    }

    public function event_detail($id){
        $setting=SiteSetting::first();
        $event = Event::findOrFail($id);
        $media_coverages = Media::orderBy('created_at','desc')->limit(5)->get();
        $photos = Photo::latest()->limit(8)->get();
        
        return view('frontend.event-detail',compact('setting','event','media_coverages','photos'));
    }

    public function video_gallery(){
        $setting=SiteSetting::first();
        $videos = Video::latest()->get();
        
        return view('frontend.video',compact('setting','videos'));
    }

    public function photo_gallery(){
        $setting=SiteSetting::first();
        $photos = Photo::latest()->get();
        
        return view('frontend.photo',compact('setting','photos'));
    }
    public function teams(){
        $setting=SiteSetting::first();
        $teams = Team::all();
        
        return view('frontend.teams',compact('setting','teams'));
    }
    public function team_detail($id){
        $setting=SiteSetting::first();
        $team = Team::findOrFail($id);
        
        return view('frontend.team-detail',compact('setting','team'));
    }
    public function contact(){
        $setting=SiteSetting::first();
        
        return view('frontend.contact',compact('setting'));
    }
    public function contact_us(Request $request){
        $message = new Message();
        $message->email = $request->email;
        $message->name = $request->name;
        $message->message = $request->message;
        $message->phone = $request->phone;
        $message->type=$request->type;
        $message->save();
        return back()->with('message','Message Send Successfully');


    }
    public function admission(){
        $setting=SiteSetting::first();
        $admissions=Opportunity::where('type','admission')->get();
        return view('frontend.admission',compact('setting','admissions'));
    }
    public function job(){
        $setting=SiteSetting::first();
        $jobs=Opportunity::where('type','job_vacancy')->get();
        
        return view('frontend.job',compact('setting','jobs'));
    }
    public function job_detail($id){
        $setting=SiteSetting::first();
        $media_coverages = Media::orderBy('created_at','desc')->limit(5)->get();
        $job = Opportunity::find($id);
        
        return view('frontend.job-detail',compact('setting','media_coverages','job'));
    }
    public function volunteer(){
        $setting=SiteSetting::first();
        $volunteers=Opportunity::where('type','volunteer')->get();
        return view('frontend.volunteer',compact('setting','volunteers'));
    }
    public function donate(){
        $setting=SiteSetting::first();
        return view('frontend.donate',compact('setting'));
    }
    
}
