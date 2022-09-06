<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Student, GuardianStudentInformation, HealthStudentInformation, PersonalStudentDetail,
    PreviousEducationStudentInformation, ResidenceStudentInformation, StudentClass, StudentHobbie
};
use Exception;
use validated;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('admin.student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classes = StudentClass::all();
        return view('admin.student.create', compact('classes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nisn'                      => 'required|string',
            'kelas'                     => 'required|string',
            "nama_lengkap"              => 'required|string',
            "nama_panggilan"            => 'required|string',
            "tempat_lahir"              => 'required|string',
            "tgl_lahir"                 => 'required',
            "jenis_kelamin"             => 'required|string',
            "agama"                     => 'required|string',
            "kewarganegaraan"           => 'required|string',
            "anak_ke"                   => 'required|string',
            "jumlah_sodara_kandung"     => 'required|string',
            "jumlah_sodara_tiri"        => 'required|string',
            "jumlah_sodara_angkat"      => 'required|string',
            "status_yatim"              => 'required|string',
            "bahasa_keseharian"         => 'required|string',
            "alamat"                    => 'required|string',
            "no_hp"                     => 'required|string',
            "tinggal_dengan"            => 'required',
            "jarak_kesekolah"           => 'required|string',
            "gol_darah"                 => 'required|string',
            "riwayat_penyakit"          => 'required|string',
            "kelainan_jasmani"          => 'required|string',
            "tinggi_badan"              => 'required|string',
            "berat_badan"               => 'required|string',
            "guardian_name"             => 'required|string',
            "guardian_tempat_lahir"     => 'required',
            "guardian_tanggal_lahir"    => 'required',
            "guardian_agama"            => 'required|string',
            "guardian_kewarganegaraan"  => 'required|string',
            "guardian_hubungan_keluarga"=> 'required|string',
            "guardian_ijazah_tertinggi" => 'required|string',
            "guardian_pekerjaan"        => 'required|string',
            "guardian_penghasilan"      => 'required|string',
            "guardian_alamt"            => 'required|string',
            "guardian_no_hp"            => 'required|string',
            "asal_sekolah"              => 'required|string',
            "tgl_skhun"                 => 'required',
            "no_skhun"                  => 'required|string',
            "tanggal_ijazah"            => 'required',
            "no_ijazah"                 => 'required|string',
            "pindahan_dari_sekolah"     => 'required|string',
            "diterima_dikelas"          => 'required|string',
            "kelompok"                  => 'required|string',
            "tanggal_penerimaan"        => 'required',
            "kesenian"                  => 'nullable|string',
            "kesehatan_jasmani"         => 'nullable|string',
            "keorganisasian"            => 'nullable|string',
            "lain_lain"                 => 'nullable|string',
        ]);
        
        try {
            StudentHobbie::create([
                'kesenian' => $data['kesenian'],
                'kesehatan_jasmani' => $data['kesehatan_jasmani'],
                'keorganisasian' => $data['keorganisasian'],
                'lain_lain' => $data['lain_lain'],
            ]);

            
            GuardianStudentInformation::create([
                'nama' => $data['guardian_name'],
                'tempat_lahir' => $data['guardian_tempat_lahir'],
                'tanggal_lahir' => $data['guardian_tanggal_lahir'],
                'agama' => $data['guardian_agama'],
                'kewarganegaraan' => $data['guardian_kewarganegaraan'],
                'hubungan_keluarga' => $data['guardian_hubungan_keluarga'],
                'ijazah_tertinggi' => $data['guardian_ijazah_tertinggi'],
                'pekerjaan' => $data['guardian_pekerjaan'],
                'penghasilan_perbulan' => $data['guardian_penghasilan'],
                'alamat_rumah' => $data['guardian_alamt'],
                'no_hp' => $data['guardian_no_hp'],
            ]);

            HealthStudentInformation::create([
                'gol_darah' => $data['gol_darah'],
                'riwayat_penyakit' => $data['riwayat_penyakit'],
                'kelainan_jasmani' => $data['kelainan_jasmani'],
                'tinggi_badan' => $data['tinggi_badan'],
                'berat_badan' => $data['berat_badan'],
            ]);
            
            PersonalStudentDetail::create([
                'nama_lengkap' => $data['nama_lengkap'],
                'nama_panggilan' => $data['nama_panggilan'],
                'jenis_kelamin' => $data['jenis_kelamin'],
                'tanggal_lahir' => $data['tgl_lahir'],
                'tempat_lahir' => $data['tempat_lahir'],
                'agama' => $data['agama'],
                'kewarganegaraan' => $data['kewarganegaraan'],
                'anak_ke' => $data['anak_ke'],
                'jumlah_sodara_tiri' => $data['jumlah_sodara_tiri'],
                'jumlah_sodara_kandung' => $data['jumlah_sodara_kandung'],
                'jumlah_sodara_angkat' => $data['jumlah_sodara_angkat'],
                'status_yatim' => $data['status_yatim'],
                'bahasa_keseharian' => $data['bahasa_keseharian'],
            ]);
            
            PreviousEducationStudentInformation::create([
                'asal_sekolah' => $data['asal_sekolah'],
                'tanggal_skhun' => $data['tgl_skhun'],
                'no_skhun' => $data['no_skhun'],
                'tanggal_ijazah' => $data['tanggal_ijazah'],
                'no_ijazah' => $data['no_ijazah'],
                'pindahan_dari_sekolah' => $data['pindahan_dari_sekolah'],
                'diterima_dikelas' => $data['diterima_dikelas'],
                'kelompok' => $data['kelompok'],
                'tanggal_penerimaan' => $data['tanggal_penerimaan'],
            ]);

            ResidenceStudentInformation::create([
                'alamat' => $data['alamat'],
                'no_hp' => $data['no_hp'],
                'tinggal_dengan' => $data['tinggal_dengan'],
                'jarak_kesekolah' => $data['jarak_kesekolah'],
            ]);

            $hobby_id               = StudentHobbie::latest()->first()->id;
            $guardian_id            = GuardianStudentInformation::latest()->first()->id;
            $health_id              = HealthStudentInformation::latest()->first()->id;
            $personal_id            = PersonalStudentDetail::latest()->first()->id;
            $previous_education_id  = PreviousEducationStudentInformation::latest()->first()->id;
            $residence_id           = ResidenceStudentInformation::latest()->first()->id;

            Student::create([
                'nisn' => $data['nisn'],
                'class_id' => $data['kelas'],
                'personal_id' => $personal_id,
                'health_id' => $health_id,
                'residence_id' => $residence_id,
                'guardian_id' => $guardian_id,
                'previous_education_id' => $previous_education_id,
                'hobby_id' => $hobby_id,
            ]);

        } catch (Exception $exception) {
            dd($exception);
            return redirect()->route('students.create');
        }
        
        return redirect()->route('students.index');
    }

    // public function personal($student_id)
    // {
        
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('admin.student.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('admin.student.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StudentRequest $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $hobby = StudentHobbie::where('id', $student->hobby_id);
        $guardian = GuardianStudentInformation::where('id', $student->guardian_id);
        $health = HealthStudentInformation::where('id', $student->health_id);
        $personal = PersonalStudentDetail::where('id', $student->personal_id);
        $previous = PreviousEducationStudentInformation::where('id', $student->previous_education_id);
        $residence = ResidenceStudentInformation::where('id', $student->residence_id); 


         $student->delete();
         $hobby->delete();
         $guardian->delete();
         $health->delete();
         $personal->delete();
         $previous->delete();
         $residence->delete();
            return response()
                ->json(array(
                    'success' => true,
                    'title'   => 'Success',
                    'message' => 'Siswa berhasil terhapus permanent :)'
                ));
    }
}
