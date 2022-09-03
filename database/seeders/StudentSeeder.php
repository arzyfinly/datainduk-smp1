<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{

    public function run()
    {
        $student = [
            [
                'nisn' => '123456789',
                'class_id' => '1',
                'personal_id' => '1',       
                'health_id'=> '1',       
                'residence_id'=> '1',       
                'guardian_id'=> '1',       
                'previous_education_id'=> '1',       
                'hobby_id'=> null,                             
            ],
           
        ];
        foreach ($student as $row){
            Student::create($row);
        }
    }
}
