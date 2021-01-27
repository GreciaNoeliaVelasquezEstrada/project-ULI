<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\Activitie;

class ActivitieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activities = Activitie::all();

        return view('admin.activitie.index', compact('activities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.activitie.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id'=> 'required|unique:activities',
            'title' => 'required',
            'description' => 'required'
        ]);
        $activitie = Activitie::create($request->all());
        return redirect()->route('admin.activities.index', $activitie);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Activitie $activitie)
    {
        return view('admin.activities.show', compact('activitie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Activitie $activitie)
    {
        return view('admin.activitie.edit', compact('activitie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Activitie $activitie )
    {
        $request->validate([
            'id'=> "required|unique:activities",
            'title' => 'required',
            'description' => 'required'
        ]);
        $activitie->update($request->all());
        return redirect()->route('admin.activities.edit',$activitie)->with('info','saved successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Activitie $activitie)
    {
        $activitie->delete();
        return redirect()->route('admin.activities.index')->with('info','deleted successfully');;
    }
}
