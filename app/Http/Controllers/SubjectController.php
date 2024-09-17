<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subjects=Subject::paginate(15);
        return view('subject.index',compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $subjects=Subject::pluck('subject_name','id');
        return view('subject.create',compact('subjects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $subject=new Subject;
        $subject->subject_name=$request->input('subject_name');
        $subject->subject_order=$request->input('subject_order');
        $subject->color=$request->input('color');
        $subject->save();
        return redirect('/subjects');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    $subject = Subject::find($id);
    $students = Subject::find($id)->students;
    $grades = Subject::find($id) -> grades;
    return view('subject.show', compact('grades','students','subject'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $subject=Subject::find($id);
        $subjects=Subject::pluck('subject_name','id');
        return view('subject.edit',compact('subject','subjects'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $subject=Subject::find($id);
        $subject->subject_name=$request->input('subject_name');
        $subject->subject_order=$request->input('subject_order');
        $subject->color=$request->input('color');
        $subject->save();
        return redirect('/subjects');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $subject=Subject::find($id);
        $subject->delete();
        return redirect('/subjects');

    }
}
