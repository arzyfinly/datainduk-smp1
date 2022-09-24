<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Group;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $group = [
            [
                
                'nama' => '1',
            ],
            [
                
                'nama' => '2',
            ],
            [
                
                'nama' => '3',
            ],
            [
                
                'nama' => '4',
            ],
            [
                
                'nama' => '5',
            ],
            [
                
                'nama' => '6',
            ],
            [
                
                'nama' => '7',
            ],
            [
                
                'nama' => '8',
            ],
            [
                
                'nama' => '9',
            ],
            [
                
                'nama' => '10',
            ],
           
        ];
        foreach ($group as $row){
            Group::create($row);
        }
    }
}
