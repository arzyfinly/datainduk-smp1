@extends('app')
@section('content')
    <div class="page-header">
        <a href="#">
            <h3 class="page-title">Siswa</h3>
        </a>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Siswa</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Edit </li>
            </ol>
        </nav>
    </div>
    <!-- first row starts here -->
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Data Siswa</h4>
                <form class="forms-sample" method="POST" action="{{ route('students.update', $student->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">NISN</label>
                                <div class="col-sm-8">
                                    <input value="{{ $student->nisn }}" name="nisn" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Kelas</label>                                
                                    <div class="col-sm-8">
                                        <select name="class_id" class="form-control">
                                            <option value=""> --Pilih Kelas-- </option>
                                            @foreach ($classes as $class)
                                                @if ($class->id == $student->class_id)
                                                    @php($select = 'selected')
                                                @else
                                                    @php($select = '')
                                                @endif
                                                <option {{ $select }} value="{{$class->id}}"> {{ $class->nama }} </option>
                                            @endforeach
                                        </select>
                                    </div>                                
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Kelompok</label>
                                <div class="col-sm-8">
                                    <select name="group_id" class="form-control">
                                        <option value=""> --Pilih Kelompok-- </option>
                                        @foreach ($groups as $group)
                                            @if ($group->id == $student->group_id)
                                                @php($select = 'selected')
                                            @else
                                                @php($select = '')
                                            @endif
                                            <option {{ $select }} value="{{$group->id}}"> {{ $group->nama }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="card-description font-weight-bold">Personal </p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-8">
                                    <input value="{{ $student->personal->nama_lengkap }}"name="nama_lengkap" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Nama Panggilan</label>
                                <div class="col-sm-8">
                                    <input value="{{ $student->personal->nama_panggilan }}"name="nama_panggilan" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-8">
                                    <input value="{{ $student->personal->tempat_lahir }}"name="tempat_lahir" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-8">
                                    <input value="{{ $student->personal->tanggal_lahir }}"name="tanggal_lahir" class="form-control" type="date" placeholder="dd/mm/yyyy" />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-8">
                                    <select name="jenis_kelamin" class="form-control">
                                        @if ($student->personal->jenis_kelamin == 'Laki-laki')
                                        <option selected value="Laki-laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                        @else
                                        <option value="Laki-laki">Laki-Laki</option>
                                        <option selected value="Perempuan">Perempuan</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Agama</label>
                                <div class="col-sm-8">
                                    <select name="agama" class="form-control">
                                        @if ($student->personal->agama == 'Islam')
                                        <option selected value="Islam">Islam</option>
                                        <option value="Kristen Protestan">Kristen Protestan</option>
                                        <option value="Kristen Katolik">Kristen Katolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Konghucu">Konghucu</option>
                                        @elseif ($student->personal->agama == 'Kristen Protestan')
                                        <option value="Islam">Islam</option>
                                        <option selected value="Kristen Protestan">Kristen Protestan</option>
                                        <option value="Kristen Katolik">Kristen Katolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Konghucu">Konghucu</option>
                                        @elseif ($student->personal->agama == 'Kristen Katolik')
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen Protestan">Kristen Protestan</option>
                                        <option selected value="Kristen Katolik">Kristen Katolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Konghucu">Konghucu</option>
                                        @elseif ($student->personal->agama == 'Hindu')
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen Protestan">Kristen Protestan</option>
                                        <option value="Kristen Katolik">Kristen Katolik</option>
                                        <option selected value="Hindu">Hindu</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Konghucu">Konghucu</option>
                                        @elseif ($student->personal->agama == 'Buddha')
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen Protestan">Kristen Protestan</option>
                                        <option value="Kristen Katolik">Kristen Katolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option selected value="Buddha">Buddha</option>
                                        <option value="Konghucu">Konghucu</option>
                                        @elseif ($student->personal->agama == 'Konghucu')
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen Protestan">Kristen Protestan</option>
                                        <option value="Kristen Katolik">Kristen Katolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Buddha">Buddha</option>
                                        <option selected value="Konghucu">Konghucu</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Kewarganegaraan</label>
                                <div class="col-sm-8">
                                    <select name="kewarganegaraan" class="form-control">
                                        @if ($student->personal->kewarganegaraan == 'WNI')
                                        <option selected value="WNI">WNI</option>
                                        <option value="WNA">WNA</option>
                                        @else    
                                        <option selected value="WNI">WNI</option>
                                        <option value="WNA">WNA</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Anak Ke</label>
                                <div class="col-sm-8">
                                    <input value="{{ $student->personal->anak_ke }}"name="anak_ke" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="card-description">Jumlah Saudara</p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Kandung</label>
                                <div class="col-sm-8">
                                    <input value="{{ $student->personal->jumlah_saudara_kandung }}"name="jumlah_saudara_kandung" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Tiri</label>
                                <div class="col-sm-8">
                                    <input value="{{ $student->personal->jumlah_saudara_tiri }}"name="jumlah_saudara_tiri" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Angkat</label>
                                <div class="col-sm-8">
                                    <input value="{{ $student->personal->jumlah_saudara_angkat }}"name="jumlah_saudara_angkat" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Status Yatim</label>
                                <div class="col-sm-8">
                                    <select name="status_yatim" class="form-control">
                                        @if ($student->personal->status_yatim == 'iya')
                                        <option selected value="iya">Iya</option>
                                        <option value="tidak">Tidak</option>
                                        @else
                                        <option value="iya">Iya</option>
                                        <option selected value="tidak">Tidak</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Bahasa yang digunakan</label>
                                <div class="col-sm-8">
                                    <input value="{{ $student->personal->bahasa_keseharian }}"name="bahasa_keseharian" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="card-description font-weight-bold">Tempat Tinggal </p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Alamat</label>
                                <div class="col-sm-8">
                                    <input value="{{ $student->residence->alamat }}"name="alamat" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">No HP</label>
                                <div class="col-sm-8">
                                    <input value="{{ $student->residence->no_hp }}"name="no_hp" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Tinggal Dengan</label>
                                <div class="col-sm-8">
                                    <input value="{{ $student->residence->tinggal_dengan }}"name="tinggal_dengan" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Jarak Ke Sekolah</label>
                                <div class="col-sm-8">
                                    <input value="{{ $student->residence->jarak_kesekolah }}"name="jarak_kesekolah" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="card-description font-weight-bold">Kesehatan </p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Gol Darah</label>
                                <div class="col-sm-8">
                                    <input value="{{ $student->health->gol_darah }}"name="gol_darah" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Riwayat Penyakit</label>
                                <div class="col-sm-8">
                                    <input value="{{ $student->health->riwayat_penyakit }}"name="riwayat_penyakit" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Kelainan Jasmani</label>
                                <div class="col-sm-8">
                                    <input value="{{ $student->health->kelainan_jasmani }}"name="kelainan_jasmani" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Tinggi Badan</label>
                                <div class="col-sm-8">
                                    <div class="input-group">                                        
                                        <input value="{{ $student->health->tinggi_badan }}"name="tinggi_badan" type="text" class="form-control" />
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend">Cm</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Berat Badan</label>
                                <div class="col-sm-8">
                                    <div class="input-group">                                        
                                        <input value="{{ $student->health->berat_badan }}"name="berat_badan" type="text" class="form-control" />
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend">Kg</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="card-description font-weight-bold">Wali</p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Nama Wali</label>
                                <div class="col-sm-8">
                                    <input value="{{ $student->guardian->nama }}"name="guardian_nama" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-8">
                                    <input value="{{ $student->guardian->tempat_lahir }}"name="guardian_tempat_lahir" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-8">
                                    <input value="{{ $student->guardian->tanggal_lahir }}"name="guardian_tanggal_lahir" type="date" class="form-control" placeholder="dd/mm/yyyy" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Agama</label>
                                <div class="col-sm-8">
                                    <select name="guardian_agama" class="form-control">
                                        @if ($student->personal->agama == 'Islam')
                                        <option selected value="Islam">Islam</option>
                                        <option value="Kristen Protestan">Kristen Protestan</option>
                                        <option value="Kristen Katolik">Kristen Katolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Konghucu">Konghucu</option>
                                        @elseif ($student->personal->agama == 'Kristen Protestan')
                                        <option value="Islam">Islam</option>
                                        <option selected value="Kristen Protestan">Kristen Protestan</option>
                                        <option value="Kristen Katolik">Kristen Katolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Konghucu">Konghucu</option>
                                        @elseif ($student->personal->agama == 'Kristen Katolik')
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen Protestan">Kristen Protestan</option>
                                        <option selected value="Kristen Katolik">Kristen Katolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Konghucu">Konghucu</option>
                                        @elseif ($student->personal->agama == 'Hindu')
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen Protestan">Kristen Protestan</option>
                                        <option value="Kristen Katolik">Kristen Katolik</option>
                                        <option selected value="Hindu">Hindu</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Konghucu">Konghucu</option>
                                        @elseif ($student->personal->agama == 'Buddha')
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen Protestan">Kristen Protestan</option>
                                        <option value="Kristen Katolik">Kristen Katolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option selected value="Buddha">Buddha</option>
                                        <option value="Konghucu">Konghucu</option>
                                        @elseif ($student->personal->agama == 'Konghucu')
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen Protestan">Kristen Protestan</option>
                                        <option value="Kristen Katolik">Kristen Katolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Buddha">Buddha</option>
                                        <option selected value="Konghucu">Konghucu</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Kewarganegaraan</label>
                                <div class="col-sm-8">
                                    <select name="guardian_kewarganegaraan" class="form-control">
                                        @if ($student->personal->kewarganegaraan == 'WNI')
                                        <option selected value="WNI">WNI</option>
                                        <option value="WNA">WNA</option>
                                        @else    
                                        <option selected value="WNI">WNI</option>
                                        <option value="WNA">WNA</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Hubungan Keluarga</label>
                                <div class="col-sm-8">
                                    <input value="{{ $student->guardian->hubungan_keluarga }}"name="guardian_hubungan_keluarga" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Ijazah Tertinggi</label>
                                <div class="col-sm-8">
                                    <input value="{{ $student->guardian->ijazah_tertinggi }}"name="guardian_ijazah_tertinggi" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Pekerjaan</label>
                                <div class="col-sm-8">
                                    <input value="{{ $student->guardian->pekerjaan }}"name="guardian_pekerjaan" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Penghasilan</label>
                                <div class="col-sm-8">
                                    <input value="{{ $student->guardian->penghasilan_perbulan }}"name="guardian_penghasilan_perbulan" type="text" class="form-control" id="rupiah"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Alamat</label>
                                <div class="col-sm-8">
                                    <input value="{{ $student->guardian->alamat_rumah }}"name="guardian_alamat_rumah" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">No HP</label>
                                <div class="col-sm-8">
                                    <input value="{{ $student->guardian->no_hp }}"name="guardian_no_hp" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="card-description font-weight-bold">Pendidikan Sebelumnya </p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Asal Sekolah</label>
                                <div class="col-sm-8">
                                    <input value="{{ $student->previousEducation->asal_sekolah }}"name="asal_sekolah" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Tanggal SKHUN</label>
                                <div class="col-sm-8">
                                    <input value="{{ $student->previousEducation->tanggal_skhun }}"name="tanggal_skhun" type="date" class="form-control" placeholder="dd/mm/yyyy" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">No SKHUN</label>
                                <div class="col-sm-8">
                                    <input value="{{ $student->previousEducation->no_skhun }}"name="no_skhun" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Tanggal Ijazah</label>
                                <div class="col-sm-8">
                                    <input value="{{ $student->previousEducation->tanggal_ijazah }}"name="tanggal_ijazah" type="date" class="form-control" placeholder="dd/mm/yyyy" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">No Ijazah</label>
                                <div class="col-sm-8">
                                    <input value="{{ $student->previousEducation->no_ijazah }}"name="no_ijazah" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Pindahan Dari Sekolah</label>
                                <div class="col-sm-8">
                                    <input value="{{ $student->previousEducation->pindahan_dari_sekolah }}"name="pindahan_dari_sekolah" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Diterima Di Kelas</label>
                                <div class="col-sm-8">
                                    <select name="diterima_dikelas" class="form-control">
                                        <option value="">Diterima Di Kelas</option>
                                        @if ($student->previousEducation->diterima_dikelas == '7')
                                        <option selected value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        @elseif ($student->previousEducation->diterima_dikelas == '7')
                                        <option value="7">7</option>
                                        <option selected value="8">8</option>
                                        <option value="9">9</option>
                                        @else
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option selected value="9">9</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </div>
                       
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Tanggal Penerimaan</label>
                                <div class="col-sm-8">
                                    <input value="{{ $student->previousEducation->tanggal_penerimaan }}"name="tanggal_penerimaan" type="date" class="form-control" placeholder="dd/mm/yyyy" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="card-description font-weight-bold">Hobby </p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Kesenian</label>
                                <div class="col-sm-8">
                                    <input value="{{ $student->hobby->kesenian }}"name="kesenian" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Kesehatan Jasmani</label>
                                <div class="col-sm-8">
                                    <input value="{{ $student->hobby->kesehatan_jasmani }}"name="kesehatan_jasmani" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Keorganisasian</label>
                                <div class="col-sm-8">
                                    <input value="{{ $student->hobby->keorganisasian }}"name="keorganisasian" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Lain-Lain</label>
                                <div class="col-sm-8">
                                    <input value="{{ $student->hobby->lain_lain }}"name="lain_lain" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-success" type="submit"> Update </button>
                </form>
            </div>
        </div>
    </div>
@endsection
