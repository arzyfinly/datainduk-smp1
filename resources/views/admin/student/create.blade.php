@extends('app')
@section('content')
    <div class="page-header">
        <a href="#">
            <h3 class="page-title">Siswa</h3>
        </a>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Siswa</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Tambah </li>
            </ol>
        </nav>
    </div>
    <!-- first row starts here -->
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah Data Siswa</h4>
                <form class="forms-sample" method="POST" action="{{ route('students.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">NISN</label>
                                <div class="col-sm-8">
                                    <input name="nisn" type="text" class="form-control" />
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
                                                <option value="{{$class->id}}"> {{ $class->nama }} </option>
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
                                    <input name="nama_lengkap" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Nama Panggilan</label>
                                <div class="col-sm-8">
                                    <input name="nama_panggilan" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-8">
                                    <input name="tempat_lahir" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-8">
                                    <input name="tanggal_lahir" class="form-control" type="date" placeholder="dd/mm/yyyy" />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-8">
                                    <select name="jenis_kelamin" class="form-control">
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Agama</label>
                                <div class="col-sm-8">
                                    <select name="agama" class="form-control">
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen Protestan">Kristen Protestan</option>
                                        <option value="Kristen">Kristen Katolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Konghucu">Konghucu</option>
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
                                        <option value="WNI">WNI</option>
                                        <option value="WNA">WNA</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Anak Ke</label>
                                <div class="col-sm-8">
                                    <input name="anak_ke" class="form-control" />
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
                                    <input name="jumlah_saudara_kandung" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Tiri</label>
                                <div class="col-sm-8">
                                    <input name="jumlah_saudara_tiri" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Angkat</label>
                                <div class="col-sm-8">
                                    <input name="jumlah_saudara_angkat" class="form-control" />
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
                                        <option value="iya">Iya</option>
                                        <option value="tidak">Tidak</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Bahasa yang digunakan</label>
                                <div class="col-sm-8">
                                    <input name="bahasa_keseharian" type="text" class="form-control" />
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
                                    <input name="alamat" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">No HP</label>
                                <div class="col-sm-8">
                                    <input name="no_hp" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Tinggal Dengan</label>
                                <div class="col-sm-8">
                                    <input name="tinggal_dengan" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Jarak Ke Sekolah</label>
                                <div class="col-sm-8">
                                    <input name="jarak_kesekolah" type="text" class="form-control" />
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
                                    <input name="gol_darah" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Riwayat Penyakit</label>
                                <div class="col-sm-8">
                                    <input name="riwayat_penyakit" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Kelainan Jasmani</label>
                                <div class="col-sm-8">
                                    <input name="kelainan_jasmani" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Tinggi Badan</label>
                                <div class="col-sm-8">
                                    <input name="tinggi_badan" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Berat Badan</label>
                                <div class="col-sm-8">
                                    <input name="berat_badan" type="text" class="form-control" />
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
                                    <input name="guardian_nama" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-8">
                                    <input name="guardian_tempat_lahir" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-8">
                                    <input name="guardian_tanggal_lahir" type="date" class="form-control" placeholder="dd/mm/yyyy" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Agama</label>
                                <div class="col-sm-8">
                                    <select name="guardian_agama" class="form-control">
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen Protestan">Kristen Protestan</option>
                                        <option value="Kristen">Kristen Katolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Konghucu">Konghucu</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Kewarganegaraan</label>
                                <div class="col-sm-8">
                                    <select name="guardian_kewarganegaraan" class="form-control">
                                        <option>WNI</option>
                                        <option>WNA</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Hubungan Keluarga</label>
                                <div class="col-sm-8">
                                    <input name="guardian_hubungan_keluarga" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Ijazah Tertinggi</label>
                                <div class="col-sm-8">
                                    <input name="guardian_ijazah_tertinggi" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Pekerjaan</label>
                                <div class="col-sm-8">
                                    <input name="guardian_pekerjaan" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Penghasilan</label>
                                <div class="col-sm-8">
                                    <input name="guardian_penghasilan_perbulan" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Alamat</label>
                                <div class="col-sm-8">
                                    <input name="guardian_alamat_rumah" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">No HP</label>
                                <div class="col-sm-8">
                                    <input name="guardian_no_hp" type="text" class="form-control" />
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
                                    <input name="asal_sekolah" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Tanggal SKHUN</label>
                                <div class="col-sm-8">
                                    <input name="tanggal_skhun" type="date" class="form-control" placeholder="dd/mm/yyyy" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">No SKHUN</label>
                                <div class="col-sm-8">
                                    <input name="no_skhun" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Tanggal Ijazah</label>
                                <div class="col-sm-8">
                                    <input name="tanggal_ijazah" type="date" class="form-control" placeholder="dd/mm/yyyy" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">No Ijazah</label>
                                <div class="col-sm-8">
                                    <input name="no_ijazah" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Pindahan Dari Sekolah</label>
                                <div class="col-sm-8">
                                    <input name="pindahan_dari_sekolah" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Diterima Di Kelas</label>
                                <div class="col-sm-8">
                                    <select name="diterima_dikelas" class="form-control">
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Kelompok</label>
                                <div class="col-sm-8">
                                    <select name="kelompok" class="form-control">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Tanggal Penerimaan</label>
                                <div class="col-sm-8">
                                    <input name="tanggal_penerimaan" type="date" class="form-control" placeholder="dd/mm/yyyy" />
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
                                    <input name="kesenian" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Kesehatan Jasmani</label>
                                <div class="col-sm-8">
                                    <input name="kesehatan_jasmani" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Keorganisasian</label>
                                <div class="col-sm-8">
                                    <input name="keorganisasian" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Lain-Lain</label>
                                <div class="col-sm-8">
                                    <input name="lain_lain" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-success" type="submit"> Tambah </button>
                </form>
            </div>
        </div>
    </div>
@endsection
