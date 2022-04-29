<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medias = Media::all();
        
        return view('admin.media.index',compact('medias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.media.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $media = new Media();
        $request->validate([
            'title' => 'required',
            // 'slug'=>'unique:media,slug,',
            'thumbnail_img' => 'required|image'
        ]);
        $media->title=$request->title;
        $media->description=$request->description;
        $media->date=$request->date;
        $media->location=$request->location;
        // $media->slug=str_replace(' ','-',$request->title);



        if ($request->hasFile('thumbnail_img')) {
            $imageName = time().'.'.$request->thumbnail_img->extension();  
     
            $request->thumbnail_img->move(public_path('uploads/medias/'), $imageName);
            $media->thumbnail_img= $imageName;
        }
        $data=[];
        if ($request->hasFile('image')) {
            foreach($request->file('image') as $key => $file)
            {
                $name = time(). $key. '.'.$file->extension();
                $file->move(public_path().'/uploads/medias', $name);  
                array_push($data,$name);  
            }
        }
        // dd($data);
        $media->image=json_encode($data);
        

        $media->save();
        return redirect()->route('medias.index')->with('message','media added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $media=Media::findOrFail($id);
        return view('admin.media.show',compact('media'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $media=Media::findOrFail($id);
        return view('admin.media.edit',compact('media'));
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
        $media = Media::findOrFail($id);
        $request->validate([
            'title' => 'required',
            // 'slug'=>'unique:media,slug,'.$id,
            'thumbnail_img' => 'nullable|image'
        ]);
        $media->title=$request->title;
        // $media->slug=str_replace(' ','-',$request->title);
        $media->description=$request->description;
        $media->date=$request->date;
        $media->location=$request->location;
        if ($request->has('previous_photos')) {
            $data = $request->previous_photos;
        }
        else{
            $data = array();
        }
        if ($request->hasFile('image')) {
            foreach($request->file('image') as $key => $file)
            {
                $name = time(). $key . '.'.$file->extension();
                $file->move(public_path().'/uploads/medias', $name);  
                array_push($data,$name);  
            }
        }
        $media->image=json_encode($data);

        if ($thumbnail_img = $request->file('thumbnail_img')) {
            $thumb_image_path = public_path('uploads/medias/' . $media->thumbnail_img);
            
            if(file_exists($thumb_image_path)){
                unlink($thumb_image_path);
            }
                $destination = 'uploads/medias/';
                $thumb_img = time() . "." .$thumbnail_img->extension();
                $thumbnail_img->move($destination, $thumb_img);
                $media->thumbnail_img = "$thumb_img";
            
        }else{
            unset($media->thumbnail_img);
        }

        $media->save();
        return redirect()->route('medias.index')->with('message','media updated successfully');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $media=Media::findOrFail($id);
        $image_path = public_path('uploads/medias/' . $media->image);    
            if(file_exists($image_path)){
                unlink($image_path);
            }else{
                
            }
        $media->delete();
        return back()->with('message','media deleted successfully');
    }
}
