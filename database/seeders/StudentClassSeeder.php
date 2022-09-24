<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\StudentClass;

class StudentClassSeeder extends Seeder
{
  
    public function run()
    {
        $studentClass = [
            [
                
                'nama' => '7',
                'deskripsi' => '-',  
            ],
            [
                
                'nama' => '8',
                'deskripsi' => '-',  
            ],
            [
                
                'nama' => '9',
                'deskripsi' => '-',  
            ],
           
        ];
        foreach ($studentClass as $row){
            StudentClass::create($row);
        }
    }
}
