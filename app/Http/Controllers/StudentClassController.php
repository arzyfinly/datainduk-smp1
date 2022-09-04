<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    StudentClass
};

class StudentClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes = StudentClass::all();
        return view('admin.class.index', compact('classes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.class.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentClassRequest $request)
    {
        $data = $request->all();

    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show(StudentClass $studentClass)
    // {
    //     return view('admin.student.show', compact('student'));
    // }

 
    // public function edit(Student $student)
    // {
    //     return view('admin.student.edit', compact('student'));
    // }


    public function update(StudentClassRequest $request, StudentClass $studentClass)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentClass $studentClass)
    {
        //
    }
}
