<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee;
use Carbon\Carbon;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employee = [
            [
                'nip' => '19681231 200701 1 087',
                'nama' => 'SAIFUL BAHRI, S. Kom',
                'jenis_kelamin' => 'L',
                'tempat_lahir' => 'Sumenep',
                'tanggal_lahir' => Carbon::createFromDate(1968, 12, 31, 0),  
                'nik' => '3529013112680025',
                'nuptk' => '8962746649200012',
                'npwp' => '340586338608000',
                'email' => 'okaraku@gmail.com',
                'status_pegawai' => 'PNS',
                'pendidikan_terakhir' => 'S-1',
                'jurusan' => 'Teknik Informatika',
                'tugas_pegawai' => 'Koordinator TU',
                'tmt_tugas' => Carbon::createFromDate(2007, 04, 1, 0),
                'tmt_pangkat' => Carbon::createFromDate(2020, 04, 1, 0),
                'tmt_pns' => Carbon::createFromDate(2009, 01, 1, 0),
            ],
        ];
        foreach ($employee as $row){
            Employee::create($row);
        }
    }
}
