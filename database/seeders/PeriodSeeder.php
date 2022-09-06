<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Period;

class PeriodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $period = [
            [
                'tahun_ajaran' => '2021/2022',
                'status_id' => '1',
            ]
        ];
        foreach ($period as $row){
            Period::create($row);
        }
    }
}
