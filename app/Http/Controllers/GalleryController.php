<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Photo;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Route::is('photo.index')) {
            $gallery=Photo::first();
        } elseif(Route::is('video.index')) {
            $gallery=Video::all();
        }

        return view('admin.gallery.index',compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    


    public function upload_photo(Request $request)
    {
        $gallery=Photo::first();
        if(empty($gallery)){
            $gallery = new Photo();
            $data=[];
        }else{
            $data = json_decode($gallery->photos,true);
        }
        $request->validate([
            'photos' => 'required',
        ]);
        if ($request->hasFile('photos')) {
            foreach($request->file('photos') as $key => $file)
            {
                $name = time(). $key. '.'.$file->extension();
                $file->move(public_path().'/uploads/gallery/photos', $name);  
                array_push($data,$name);  
            }
        }
        $gallery->photos=json_encode($data);
        $gallery->save();
        return redirect()->route('photo.index')->with('message','Photos added successfully');
    }

    public function upload_video(Request $request)
    {
        // $gallery=Video::first();
        // if(empty($gallery)){
        //     $gallery = new Video();
        //     $data=[];
        // }else{
        //     $data = json_decode($gallery->videos,true);
        // }
        // $request->validate([
        //     'videos' => 'required',
        // ]);
        // if ($request->hasFile('videos')) {
        //     foreach($request->file('videos') as $key => $file)
        //     {
        //         $name = time(). $key. '.'.$file->extension();
        //         $file->move(public_path().'/uploads/gallery/videos', $name);  
        //         array_push($data,$name);  
        //     }
        // }
        // $gallery->videos=json_encode($data);
        $gallery = new Video();
        $gallery->link=$request->link;
        $gallery->title=$request->title;
        $gallery->save();
        return redirect()->route('video.index')->with('message','videos added successfully');

    }

    public function delete_photo($img)
    {
        $photo=Photo::first();
        $a=json_decode($photo->photos,true);
        
        
        $image_path = public_path('uploads/gallery/photos/' .$a[$img]);    
        if(file_exists($image_path)){
            unlink($image_path);
        }
        unset($a[$img]);
        $photo->photos=json_encode($a);
        $photo->save();
        
        return back()->with('message','Photo deleted successfully');
    }
    public function delete_video($id)
    {
        $video=Video::find($id);
        $video->delete();
        return back()->with('message','Videos deleted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
