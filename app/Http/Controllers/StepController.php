<?php

namespace App\Http\Controllers;

use App\Models\Step;
use Illuminate\Http\Request;

class StepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $steps = Step::all();
        return view('admin.step.index',compact('steps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.step.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $step = new Step();
        $request->validate([
            'title' => 'required',
            'text' => 'required|max:255'
        ]);
        $step->title=$request->title;
        $step->text=$request->text;
        if ($request->hasFile('icon')) {
            $iconName = time().'.'.$request->icon->extension();  
            $request->icon->move(public_path('uploads/steps/'), $iconName);
            $step->icon= $iconName;
        }

        $step->save();
        return redirect()->route('steps.index')->with('message','Step added successfully');
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
        $step = Step::findOrFail($id);
        return view('admin.step.edit',compact('step'));
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
        $step = Step::findOrFail($id);
        $request->validate([
            'title' => 'required',
            'text' => 'required|max:255'
        ]);
        $step->title=$request->title;
        $step->text=$request->text;

        if ($icon = $request->file('icon')) {
            $icon_path = public_path('uploads/steps/' . $step->icon);
            
            if(file_exists($icon_path)){
                unlink($icon_path);
            }
                $destinationPath = 'uploads/steps/';
                $profileicon = date('YmdHis') . "." .$icon->getClientOriginalName();
                $icon->move($destinationPath, $profileicon);
                $step->icon = "$profileicon";
            
        }else{
            unset($step->icon);
        }

        $step->save();
        return redirect()->route('steps.index')->with('message','Step updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $step=Step::findOrFail($id);
        $step->delete();
        return back()->with('message','Step deleted successfully');
    }

}
