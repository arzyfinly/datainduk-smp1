<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StudentClassRequest;
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

    public function store(StudentClassRequest $request)
    {
        $data = $request->all();
        $class= StudentClass::create([        
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
        ]);   
        
        if ($class) {
            return redirect()
                ->route('classes.index')
                ->with([
                    'success' => 'New class has been created successfully'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem occurred, please try again'
                ]);
        }
    }


    public function show(StudentClass $studentClass)
    {
        // return view('admin.class.show', compact('studentClass'));
    }

 
    public function edit(StudentClass $class)
    {
        // dd($class);
        return view('admin.class.edit', compact('class'));
    }


    public function update(StudentClassRequest $request, StudentClass $class)
    {
        $data = $request->all();
        $class->update($data);   
        return redirect('/classes');
    }

    public function destroy(StudentClass $studentClass)
    {
        $studentClass->delete();
        if ($studentClass) {
            return redirect()
                ->route('classes.index')
                ->with([
                    'success' => 'Post has been deleted successfully'
                ]);
        } else {
            return redirect()
                ->route('classes.index')
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
    }
}
