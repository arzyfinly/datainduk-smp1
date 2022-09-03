<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nisn',
        'class_id',
               
    ];
    protected $nullable = [
        'personal_id',       
        'health_id',       
        'residence_id',       
        'guardian_id',       
        'previous_education_id',       
        'hobby_id',
    ];

    protected $with = [
        'class',
        'personal',
        'heatlh',
        'residence',
        'guardian',
        'previousEducation',
        'hobby',

    ];

    public function class()
    {
        return $this->belongsTo(StudentClass::class);
    }

    public function personal()
    {
        return $this->belongsTo(PersonalStudentDetail::class);
    }

    public function heatlh()
    {
        return $this->belongsTo(HealthStudentInformation::class);
    }

    public function residence()
    {
        return $this->belongsTo(ResidenceStudentInformation::class);
    }

    public function guardian()
    {
        return $this->belongsTo(GuardianStudentInformation::class);
    }

    public function previousEducation()
    {
        return $this->belongsTo(PreviousEducationStudentInformation::class);
    }

    public function hobby()
    {
        return $this->belongsTo(StudentHobbie::class);
    }

}
