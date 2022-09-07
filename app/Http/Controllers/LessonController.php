<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\DetailLesson;
use App\Models\StudentClass;
use Illuminate\Http\Request;
use App\Http\Requests\LessonRequest;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $lessons = Lesson::all();   
        // dd($lessons); 
        return view('admin.lesson.index', compact('lessons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classes = StudentClass::all();
        return view('admin.lesson.create', compact('classes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data  = $request->validate([
            'kelas' =>'required|string',
            'nama' =>'required|string',
        ]);

        try{
            DetailLesson::create([
                'nama' => $data['nama'],
            ]);

            $detail_lesson_id = DetailLesson::latest()->first()->id;

            Lesson::create([
                'class_id' =>$data['kelas'],
                'detail_lesson_id' =>$detail_lesson_id,
            ]);
        } catch (Exception $exception){
            return redirect()->route('lessons.create');
        }
        return redirect()->route('lessons.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function show(Lesson $lesson)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function edit(Lesson $lesson )
    {
        $classes = StudentClass::all();
        return view('admin.lesson.edit', compact('lesson','classes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lesson $lesson)
    {
        $data  = $request->validate([
            'kelas' =>'required|string',
            'nama' =>'required|string',
        ]);
        $lesson->update([$data]);           
        return redirect('/lessons');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lesson $lesson)
    {        
        $lesson->delete();   
        if ($lesson){
            return response()
                ->json(array(
                    'success' => true,
                    'title'   => 'Success',
                    'message' => 'Mata Pelajaran berhasil terhapus permanent :)'
                ));
        }else {
            return response()
                ->json(array(
                    'error' => false,
                    'title'   => 'Gagal',
                    'message' => 'Gagal menghapus mata pelajaran :)'
                ));
        }
    }
}
