<?php

namespace App\Http\Controllers;

use App\Models\Departments;
use Illuminate\Http\Request;

class DepartmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        $departments = Departments::all();

        return view('departments.index')->with('departments', $departments);
    }  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('departments.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $rules = [
            'title_sk'               => 'required|string|min:2',
            'title_en'               => 'required|string|min:2',
        ];

        $validated = $request->validate($rules);
        
        try {
            $d = Departments::create([
                'title_sk'           => $request['title_sk'],
                'title_en'           => $request['title_en'],
            ]);
            session()->flash('success', 'Department created');
            return redirect()->route('departments.index');
        } catch (Exception $e) {
            session()->flash('failure', $e->getMessage());
            return redirect()->back()->withInput();
        } 
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Departments $departments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Departments $departments)
    {
        return view('departments.edit')->with('departments', Departments::find($departments->id));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Departments $departments)
    {
        $rules = [
            'title_sk'             => 'required|string|min:2',
            'title_en'             => 'required|string|min:2',
        ];

        $validated = $request->validate($rules);

        $d = Departments::find($departments->id);
        $d->title_sk               = $request->title_sk;
        $d->title_en               = $request->title_en;

        try {
            $d->save();
            session()->flash('success', 'Departments <b>' . $departments->id . '</b> updated');
            return redirect()->route('departments.index');
        } catch (Exception $e) {
            session()->flash('failure', $e->getMessage());
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Departments $departments)
    {
        //Course::find($course->id)->delete();
        //return redirect()->route('courses.index');

        try {
            $departments->delete();
            session()->flash('success', 'Department <b>' . $departments->title_sk . '</b> deleted');
            return redirect()->route('departments.index');
        } catch (Exception $e) {
            session()->flash('failure', $e->getMessage());
            return redirect()->back();
        }
    }

}