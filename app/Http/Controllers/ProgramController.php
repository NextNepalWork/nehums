<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programs = Program::all();
        return view('admin.program.index',compact('programs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.program.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'slug'=>'required|unique:programs,slug,',
        ]);

        $program=new Program();
        $program->title=$request->title;
        $program->slug=$request->slug;
        $program->description=$request->description;
        $program->status=$request->status;
        

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();  
     
            $request->image->move(public_path('uploads/programs/'), $imageName);
            $program->image= $imageName;
            // $program->image = $request->image->store('uploads/programs');
        }

        if($program->save()){
            return redirect()->route('programs.index')->with('message','program added successfully');
        }
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $program=Program::findOrFail($id);
        return view('admin.program.show',compact('program'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $program=Program::findOrFail($id);
        return view('admin.program.edit',compact('program'));
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
        $validated = $request->validate([
            'title' => 'required',
            'slug'=>'required|unique:programs,slug,'.$id,
        ]);

        $program = Program::findOrFail($id);
        $program->title=$request->title;
        $program->slug=$request->slug;
        $program->description=$request->description;
        $program->status=$request->status;

        if ($image = $request->file('image')) {
            $image_path = public_path('uploads/programs/' . $program->image);
            
            if(file_exists($image_path)){
                unlink($image_path);
            }
                $destinationPath = 'uploads/programs/';
                $profileImage = date('YmdHis') . "." .$image->getClientOriginalName();
                $image->move($destinationPath, $profileImage);
                $program->image = "$profileImage";
            
        }else{
            unset($program->image);
        }
        $program->save();
        return redirect()->route('programs.index')->with('message','program updated successfully');
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $program=Program::findOrFail($id);
        $image_path = public_path('uploads/programs/' . $program->image);    
            if(file_exists($image_path)){
                unlink($image_path);
            }else{
                
            }
        $program->delete();
        return back()->with('message','program deleted successfully');
    }

    public function update_status(Request $request)
    {
        $program = Program::findOrFail($request->id);
        
        $program->status = $request->status;
        
        $program->save();
    
        return response()->json(['message' => 'Status updated successfully.']);
    }
}