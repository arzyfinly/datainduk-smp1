<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StudentClassRequest;
use App\Models\{
    StudentClass,Student
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
        $data  = $request->all();
        $class = StudentClass::create($data);   
        
        if ($class) {
            return redirect()
                ->route('classes.index')
                ->with([
                    'success' => 'Kelas berhasil ditambahkan'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Terdapat masalah, silahkan coba lagi '
                ]);
        }
    }


    public function show(Student $personal)
    {
        $student = Student::where('personal_id', $personal->id);        
        // dd($student);
        return view('admin.class.show', compact('student'));
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

    public function destroy(StudentClass $class)
    {
        $student = Student::where('class_id', $class->id)->count();
        if ($student > 0){
            return response()
                ->json(array(
                    'error'   => true,
                    'title'   => 'Denied',
                    'message' => 'Tidak bisa menghapus kelas dikarenakan masih ada siswa di kelas ini'
                ));
        }else{
            $class->delete();
            return response()
                ->json(array(
                    'success' => true,
                    'title'   => 'Success',
                    'message' => 'Kelas berhasil terhapus permanent :)'
                ));
        }
    }
}
