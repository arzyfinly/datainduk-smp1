<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    protected $fillable = [
        'class_id',
        'detail_lesson_id',
    ];

    protected $with =[
        'class',
        'detailLesson',
    ];

    public function class()
    {
        return $this->belongsTo(StudentClass::class);
    }

    public function detailLesson()
    {
        return $this->belongsTo(DetailLesson::class);
    }
    

}
