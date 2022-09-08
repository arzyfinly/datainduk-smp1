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
                
                'nama' => '7-1',
                'deskripsi' => '-',  
            ],
            [
                
                'nama' => '7-2',
                'deskripsi' => '-',  
            ],
            [
                
                'nama' => '7-3',
                'deskripsi' => '-',  
            ],
            [
                
                'nama' => '7-4',
                'deskripsi' => '-',  
            ],
            [
                
                'nama' => '7-5',
                'deskripsi' => '-',  
            ],
            [
                
                'nama' => '7-6',
                'deskripsi' => '-',  
            ],
            [
                
                'nama' => '7-7',
                'deskripsi' => '-',  
            ],
            [
                
                'nama' => '7-8',
                'deskripsi' => '-',  
            ],
            [
                
                'nama' => '7-9',
                'deskripsi' => '-',  
            ],
            [
                
                'nama' => '7-10',
                'deskripsi' => '-',  
            ],
           
        ];
        foreach ($studentClass as $row){
            StudentClass::create($row);
        }
    }
}
