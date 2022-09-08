<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\GuardianStudentInformation;

class GuardianStudentInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $guardianStudentInformation = [
            [               
                'nama' => 'Farid Hariyanto',                  
                'tempat_lahir' => 'Bangkalan',  
                'tanggal_lahir' => Carbon::createFromDate(1972, 6, 16, 0),  
                'agama' => 'Islam',  
                'kewarganegaraan' => 'WNI',  
                'hubungan_keluarga' => 'Ayah',  
                'ijazah_tertinggi' => 'SMA',  
                'pekerjaan' => 'Wiraswasta',  
                'penghasilan_perbulan' => '1000000',  
                'alamat_rumah' => 'Kolor',  
                'no_hp' => '081685320187',                  
            ],
       
        ];
        foreach ($guardianStudentInformation as $row){
            GuardianStudentInformation::create($row);
        }
    }
}
