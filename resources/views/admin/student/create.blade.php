@extends('app')
@section('content')
    <div class="page-header">
        <a href="#">
            <h3 class="page-title">Student</h3>
        </a>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Student</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Create </li>
            </ol>
        </nav>
    </div>
    <!-- first row starts here -->
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah Data Siswa</h4>
                <form class="form-sample">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">NISN</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Kelas</label>
                                <div class="col-sm-8">
                                    <div class="col-sm-8">
                                        <select class="form-control">
                                            <option>7-1</option>
                                            <option>7-2</option>
                                            <option>7-3</option>
                                            <option>7-4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="card-description font-weight-bold">Pribadi </p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Nama Panggilan</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-8">
                                    <input class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="date" placeholder="dd/mm/yyyy" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-8">
                                    <select class="form-control">
                                        <option>Laki-Laki</option>
                                        <option>Perempuan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Agama</label>
                                <div class="col-sm-8">
                                    <select class="form-control">
                                        <option>Islam</option>
                                        <option>Kristen</option>
                                        <option>Hindu</option>
                                        <option>Budha</option>
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
                                    <select class="form-control">
                                        <option>WNI</option>
                                        <option>WNA</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Anak Ke</label>
                                <div class="col-sm-8">
                                    <input class="form-control" />
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
                                    <input class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Tiri</label>
                                <div class="col-sm-8">
                                    <input class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Angkat</label>
                                <div class="col-sm-8">
                                    <input class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Status Yatim</label>
                                <div class="col-sm-8">
                                    <select class="form-control">
                                        <option>Iya</option>
                                        <option>Tidak</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Bahasa yang digunakan</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" />
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
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">No HP</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Tinggal Dengan</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Jarak Ke Sekolah</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" />
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
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Riwayat Penyakit</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Kelainan Jasmani</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Tinggi Badan</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Berat Badan</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" />
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
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">No HP</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Tinggal Dengan</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Jarak Ke Sekolah</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="card-description font-weight-bold">Wali </p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Nama Wali</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" placeholder="dd/mm/yyyy" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Agama</label>
                                <div class="col-sm-8">
                                    <select class="form-control">
                                        <option>Islam</option>
                                        <option>Kristen</option>
                                        <option>Hindu</option>
                                        <option>Budha</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Kewarganegaraan</label>
                                <div class="col-sm-8">
                                    <select class="form-control">
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
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Ijazah Tertinggi</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Pekerjaan</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Penghasilan</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Alamat</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">No HP</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" />
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
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Tanggal SKHUN</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" placeholder="dd/mm/yyyy" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">No SKHUN</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Tanggal Ijazah</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" placeholder="dd/mm/yyyy" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">No Ijazah</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Pindahan Dari Sekolah</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Diterima Di Kelas</label>
                                <div class="col-sm-8">
                                    <select class="form-control">
                                        <option>7-1</option>
                                        <option>7-2</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Kelompok</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Tanggal Penerimaan</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" placeholder="dd/mm/yyyy" />
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
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Kesehatan Jasmani</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Keorganisasian</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Lain-Lain</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
