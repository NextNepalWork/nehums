<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events=Event::all();
        return view('admin.event.index',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $event = new Event();
        $event->title=$request->title;
        $event->description=$request->description;
        $event->date=$request->date;
        $event->location=$request->location;


        if ($request->hasFile('thumbnail_img')) {
            $imageName = time().'.'.$request->thumbnail_img->extension();  
     
            $request->thumbnail_img->move(public_path('uploads/events/'), $imageName);
            $event->thumbnail_img= $imageName;
        }
        $data=[];
        if ($request->hasFile('image')) {
            foreach($request->file('image') as $key => $file)
            {
                $name = time(). $key. '.'.$file->extension();
                $file->move(public_path().'/uploads/events', $name);  
                array_push($data,$name);  
            }
        }
        // dd($data);
        $event->image=json_encode($data);

        $event->save();
        return redirect()->route('events.index')->with('message','event added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event=Event::findOrFail($id);
        return view('admin.event.show',compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event=Event::findOrFail($id);
        return view('admin.event.edit',compact('event'));
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
        $event = Event::findOrFail($id);
        $event->title=$request->title;
        $event->description=$request->description;
        $event->date=$request->date;
        $event->location=$request->location;
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
                $file->move(public_path().'/uploads/events', $name);  
                array_push($data,$name);  
            }
        }
        $event->image=json_encode($data);

        if ($thumbnail_img = $request->file('thumbnail_img')) {
            $thumb_image_path = public_path('uploads/events/' . $event->thumbnail_img);
            
            if(file_exists($thumb_image_path)){
                unlink($thumb_image_path);
            }
                $destination = 'uploads/events/';
                $thumb_img = time() . "." .$thumbnail_img->extension();
                $thumbnail_img->move($destination, $thumb_img);
                $event->thumbnail_img = "$thumb_img";
            
        }else{
            unset($event->thumbnail_img);
        }


        $event->save();
        return redirect()->route('events.index')->with('message','event updated successfully');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event=Event::findOrFail($id);
        $image_path = public_path('uploads/events/' . $event->image);    
            if(file_exists($image_path)){
                unlink($image_path);
            }else{
                
            }
        $event->delete();
        return back()->with('message','event deleted successfully');
    }
}
