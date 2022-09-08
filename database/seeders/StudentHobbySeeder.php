<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\StudentHobbie;

class StudentHobbySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hobbie = [
            [
                'kesenian' => 'Nyanyi',  
                'kesehatan_jasmani' => 'Workout',  
                'keorganisasian' => 'HMPS',  
                'lain_lain' => '-',                  
            ],
       
        ];
        foreach ($hobbie as $row){
            StudentHobbie::create($row);
        }
    }
}
