<?php

namespace App\Http\Controllers;

use App\Models\Opportunity;
use Illuminate\Http\Request;

class OpportunityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $opportunities=Opportunity::all();
        return view('admin.opportunity.index',compact('opportunities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.opportunity.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $opportunity = new Opportunity();
        $opportunity->title=$request->title;
        $opportunity->type=$request->type;
        $opportunity->description=$request->description;

        $opportunity->save();
        return redirect()->route('opportunity.index')->with('message','Opportunity added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $opportunity=Opportunity::findOrFail($id);
        return view('admin.opportunity.show',compact('opportunity'));

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $opportunity=Opportunity::findOrFail($id);
        return view('admin.opportunity.edit',compact('opportunity'));
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
        $opportunity = Opportunity::findOrFail($id);
        $opportunity->title=$request->title;
        $opportunity->type=$request->type;
        $opportunity->description=$request->description;

        $opportunity->save();
        return redirect()->route('opportunity.index')->with('message','Opportunity updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $opportunity=Opportunity::findOrFail($id);
        
        $opportunity->delete();
        return back()->with('message','Opportunity deleted successfully');
    }
}