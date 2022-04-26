<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Photo;
use App\Models\Video;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.gallery.index');
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
    public function store(Request $request)
    {
        $gallery = new Gallery();
        $data=[];
        if ($request->hasFile('photos')) {
            foreach($request->file('photos') as $key => $file)
            {
                $name = time(). $key. '.'.$file->extension();
                $file->move(public_path().'/uploads/gallery', $name);  
                array_push($data,$name);  
            }
        }
        // dd($data);
        $gallery->photos=json_encode($data);
        if($request->hasFile('video')){
            $name = time().'.'.$request->video->extension();
            $request->video->move(public_path().'/uploads/gallery', $name);
            $gallery->videos = $name;
        }

        $gallery->save();
        return redirect()->route('gallery.index')->with('message','Gallery added successfully');
    }


    public function upload_photo(Request $request)
    {
        $gallery = new Photo();
        $request->validate([
            'photos' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);
        if ($request->hasFile('photos')) {
            $name = time().'.'.$request->photos->extension();
            $request->photos->move(public_path().'/uploads/gallery/photos', $name); 
            $gallery->photos=$name;  
        }
        

        $gallery->save();
        return redirect()->route('gallery.index')->with('message','Photo added successfully');
    }

    public function upload_video(Request $request)
    {
        $gallery = new Video();
        $request->validate([
            'video' => 'required|mimes:mp4,ogx,oga,ogv,ogg,webm'
        ]);
        if ($request->hasFile('video')) {
            $name = time().'.'.$request->video->extension();
            $request->video->move(public_path().'/uploads/gallery/videos', $name); 
            $gallery->videos=$name;  
        }
        

        $gallery->save();
        return redirect()->route('gallery.index')->with('message','Video added successfully');
        

    }

    public function delete_photo($id)
    {
        $photo=Photo::findOrFail($id);
        $image_path = public_path('uploads/gallery/photos/' . $photo->photos);    
        if(file_exists($image_path)){
            unlink($image_path);
        }else{
            
        }
        $photo->delete();
        return back()->with('message','Photo deleted successfully');
    }
    public function delete_video($id)
    {
        $video=Video::findOrFail($id);
        $image_path = public_path('uploads/gallery/videos/' . $video->videos);    
        if(file_exists($image_path)){
            unlink($image_path);
        }else{
            
        }
        $video->delete();
        return back()->with('message','Video deleted successfully');
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
