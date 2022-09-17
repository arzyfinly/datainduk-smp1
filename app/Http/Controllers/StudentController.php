<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Student, GuardianStudentInformation, HealthStudentInformation, PersonalStudentDetail,
    PreviousEducationStudentInformation, ResidenceStudentInformation, StudentClass, StudentHobbie
};
use App\Http\Requests\StudentRequest;
use Exception;
use validated;
use DB;

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
    public function store(StudentRequest $request)
    {
        $data = $request->all();
        
        DB::beginTransaction();

        try {
            StudentHobbie::create([
                'kesenian' => $data['kesenian'],
                'kesehatan_jasmani' => $data['kesehatan_jasmani'],
                'keorganisasian' => $data['keorganisasian'],
                'lain_lain' => $data['lain_lain'],
            ]);

            
            GuardianStudentInformation::create([
                'nama' => $data['guardian_nama'],
                'tempat_lahir' => $data['guardian_tempat_lahir'],
                'tanggal_lahir' => $data['guardian_tanggal_lahir'],
                'agama' => $data['guardian_agama'],
                'kewarganegaraan' => $data['guardian_kewarganegaraan'],
                'hubungan_keluarga' => $data['guardian_hubungan_keluarga'],
                'ijazah_tertinggi' => $data['guardian_ijazah_tertinggi'],
                'pekerjaan' => $data['guardian_pekerjaan'],
                'penghasilan_perbulan' => $data['guardian_penghasilan_perbulan'],
                'alamat_rumah' => $data['guardian_alamat_rumah'],
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
                'tanggal_lahir' => $data['tanggal_lahir'],
                'tempat_lahir' => $data['tempat_lahir'],
                'agama' => $data['agama'],
                'kewarganegaraan' => $data['kewarganegaraan'],
                'anak_ke' => $data['anak_ke'],
                'jumlah_saudara_tiri' => $data['jumlah_saudara_tiri'],
                'jumlah_saudara_kandung' => $data['jumlah_saudara_kandung'],
                'jumlah_saudara_angkat' => $data['jumlah_saudara_angkat'],
                'status_yatim' => $data['status_yatim'],
                'bahasa_keseharian' => $data['bahasa_keseharian'],
            ]);
            
            PreviousEducationStudentInformation::create([
                'asal_sekolah' => $data['asal_sekolah'],
                'tanggal_skhun' => $data['tanggal_skhun'],
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
                'class_id' => $data['class_id'],
                'personal_id' => $personal_id,
                'health_id' => $health_id,
                'residence_id' => $residence_id,
                'guardian_id' => $guardian_id,
                'previous_education_id' => $previous_education_id,
                'hobby_id' => $hobby_id,
            ]);
            DB::commit();
        } catch (\Exception $e) {
            dd($e);
            DB::rollback();
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
        $classes = StudentClass::all();
        return view('admin.student.edit', compact('student','classes'));
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
        $data = $request->all();
        
        $hobby = StudentHobbie::find($student->hobby_id);
        $guardian = GuardianStudentInformation::find($student->guardian_id);
        $health = HealthStudentInformation::find($student->health_id);
        $personal = PersonalStudentDetail::find($student->personal_id);
        $previous_education = PreviousEducationStudentInformation::find($student->previous_education_id);
        $residence = ResidenceStudentInformation::find($student->residence_id);

        $hobby->kesenian                            = $data['kesenian'];
        $hobby->kesehatan_jasmani                   = $data['kesehatan_jasmani'];
        $hobby->keorganisasian                      = $data['keorganisasian'];
        $hobby->lain_lain                           = $data['lain_lain'];
        $guardian->nama                             = $data['guardian_nama'];
        $guardian->tempat_lahir                     = $data['guardian_tempat_lahir'];
        $guardian->tanggal_lahir                    = $data['guardian_tanggal_lahir'];
        $guardian->agama                            = $data['guardian_agama'];
        $guardian->kewarganegaraan                  = $data['guardian_kewarganegaraan'];
        $guardian->hubungan_keluarga                = $data['guardian_hubungan_keluarga'];
        $guardian->ijazah_tertinggi                 = $data['guardian_ijazah_tertinggi'];
        $guardian->pekerjaan                        = $data['guardian_pekerjaan'];
        $guardian->penghasilan_perbulan             = $data['guardian_penghasilan_perbulan'];
        $guardian->alamat_rumah                     = $data['guardian_alamat_rumah'];
        $guardian->no_hp                            = $data['guardian_no_hp'];
        $health->gol_darah                          = $data['gol_darah'];
        $health->riwayat_penyakit                   = $data['riwayat_penyakit'];
        $health->kelainan_jasmani                   = $data['kelainan_jasmani'];
        $health->tinggi_badan                       = $data['tinggi_badan'];
        $health->berat_badan                        = $data['berat_badan'];
        $personal->nama_lengkap                     = $data['nama_lengkap'];
        $personal->nama_panggilan                   = $data['nama_panggilan'];
        $personal->jenis_kelamin                    = $data['jenis_kelamin'];
        $personal->tempat_lahir                     = $data['tempat_lahir'];
        $personal->tanggal_lahir                    = $data['tanggal_lahir'];
        $personal->agama                            = $data['agama'];
        $personal->kewarganegaraan                  = $data['kewarganegaraan'];
        $personal->anak_ke                          = $data['anak_ke'];
        $personal->jumlah_saudara_kandung           = $data['jumlah_saudara_kandung'];
        $personal->jumlah_saudara_tiri              = $data['jumlah_saudara_tiri'];
        $personal->jumlah_saudara_angkat            = $data['jumlah_saudara_angkat'];
        $personal->status_yatim                     = $data['status_yatim'];
        $personal->bahasa_keseharian                = $data['bahasa_keseharian'];
        $previous_education->asal_sekolah           = $data['asal_sekolah'];
        $previous_education->tanggal_skhun          = $data['tanggal_skhun'];
        $previous_education->no_skhun               = $data['no_skhun'];
        $previous_education->tanggal_ijazah         = $data['tanggal_ijazah'];
        $previous_education->no_ijazah              = $data['no_ijazah'];
        $previous_education->pindahan_dari_sekolah  = $data['pindahan_dari_sekolah'];
        $previous_education->diterima_dikelas       = $data['diterima_dikelas'];
        $previous_education->kelompok               = $data['kelompok'];
        $previous_education->tanggal_penerimaan     = $data['tanggal_penerimaan'];
        $residence->alamat                          = $data['alamat'];
        $residence->no_hp                           = $data['no_hp'];
        $residence->tinggal_dengan                  = $data['tinggal_dengan'];
        $residence->jarak_kesekolah                 = $data['jarak_kesekolah'];
        $student->nisn                              = $data['nisn'];
        $student->class_id                          = $data['class_id'];

        $hobby->save();
        $guardian->save();
        $health->save();
        $personal->save();
        $previous_education->save();
        $residence->save();
        $student->save();
        return redirect()->route('students.index');
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
