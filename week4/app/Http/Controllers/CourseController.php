<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //$courses = Course::all();
        $courses = Course::with('supervisor')->orderBy('title', 'asc')->get();
        return view('courses.index')->with('courses', $courses);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('courses.create');
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
            'type'                => 'required|numeric',
            'title'               => 'required|string|min:2',
            'department'          => 'required|numeric',
            'credit'              => 'required|numeric',
            'semester'            => 'required|numeric',
            'supervisor_id'       => 'nullable|numeric',
        ];

        $validated = $request->validate($rules);
        
        try {
            $d = Course::create([
                'type'            => $request['type'],
                'title'           => $request['title'],
                'department'      => $request['department'],
                'credit'          => $request['credit'],
                'semester'        => $request['semester'],
                'supervisor_id'   => $request['supervisor_id'],
            ]);
            session()->flash('success', 'Course created');
            return redirect()->route('courses.index');
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
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        return view('courses.edit')->with('course', Course::find($course->id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $rules = [
            'type'              => 'required|numeric',
            'title'             => 'required|string|min:2',
            'department'        => 'required|numeric',
            'credit'            => 'required|numeric',
            'semester'          => 'required|numeric',
        ];

        $validated = $request->validate($rules);

        $d = Course::find($course->id);
        $d->type                = $request->type;
        $d->title               = $request->title;
        $d->department          = $request->department;
        $d->credit              = $request->credit;
        $d->semester            = $request->semester;

        try {
            $d->save();
            session()->flash('success', 'Course ' . $course->title . ' updated');
            return redirect()->route('courses.index');
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
    public function destroy(Course $course)
    {
        //
        try {
            $course->delete();
            session()->flash('success', 'Course ' . $course->title . ' deleted');
            return redirect()->route('courses.index');
        } catch (Exception $e) {
            session()->flash('failure', $e->getMessage());
            return redirect()->back();
        }     
    }
}
