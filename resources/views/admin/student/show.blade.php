@extends('app')
@section('content')
    <div class="row">
        <div class="container d-flex justify-content-center align-items-center">
            <div class="card-profil py-6">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="round-image">
                        <img src="{{ asset('assets/images/faces/face28.png') }}" class="rounded-circle" width="97">
                    </div>
                </div>

                <div class="text-center">
                    <h4 class="mt-3">{{ $student->personal->nama_lengkap }}</h4>
                    <span>NISN : {{ $student->nisn }}</span><br>
                    <span>KELAS : {{ $student->class->nama }}</span>
                </div>
            </div>
        </div>
    </div>

    <div class="tab">
        <button class="tablinks" onclick="openData(event, 'Pribadi')">Pribadi</button>
        <button class="tablinks" onclick="openData(event, 'TempatTinggal')">Tempat Tinggal</button>
        <button class="tablinks" onclick="openData(event, 'Kesehatan')">Kesehatan</button>
        <button class="tablinks" onclick="openData(event, 'Wali')">Wali</button>
        <button class="tablinks" onclick="openData(event, 'PendidikanSebelumnya')">Pendidikan Sebelumnya</button>
        <button class="tablinks" onclick="openData(event, 'Hobby')">Hobby</button>
    </div>

    <div id="Pribadi" class="tabcontent">
        <div class="row">
            <div class="col">
                <div class="card mb-4">
                    <label class="font-weight-bold ml-3 mt-3"> Pribadi</label>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Nama Lengkap</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $student->personal->nama_lengkap }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Nama Panggilan</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $student->personal->nama_panggilan }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Jenis Kelamin</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $student->personal->jenis_kelamin }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Tempat/Tanggal Lahir</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $student->personal->tempat_lahir }} / {{ $student->personal->tanggal_lahir }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Agama</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $student->personal->agama }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Kewarganegaraan</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $student->personal->kewarganegaraan }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Anak Ke</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $student->personal->anak_ke }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Jumlah Saudara Kandung</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $student->personal->jumlah_saudara_kandung }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Jumlah Saudara Tiri</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $student->personal->jumlah_saudara_tiri }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Jumlah Saudara Angkat</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $student->personal->jumlah_saudara_angkat }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Status Yatim</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $student->personal->status_yatim }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Bahasa Keseharian</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $student->personal->bahasa_keseharian }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="TempatTinggal" class="tabcontent">
        <div class="row">
            <div class="col">
                <div class="card mb-4">
                    <label class="font-weight-bold ml-3 mt-3"> Tempat Tinggal</label>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Alamat</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $student->residence->alamat }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">No HP</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $student->residence->no_hp }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Tinggal Dengan</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $student->residence->tinggal_dengan }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Jarak Kesekolah</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $student->residence->jarak_kesekolah }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="Kesehatan" class="tabcontent">
        <div class="row">
            <div class="col">
                <div class="card mb-4">
                    <label class="font-weight-bold ml-3 mt-3"> Kesehatan</label>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Golongan Darah</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $student->health->gol_darah }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Riwayat Penyakit</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $student->health->riwayat_penyakit }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Kelainan Jasmani</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $student->health->kelainan_jasmani }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Tinggi Badan</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $student->health->tinggi_badan }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Berat Badan</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $student->health->berat_badan }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="Wali" class="tabcontent">
        <div class="row">
            <div class="col">
                <div class="card mb-4">
                    <label class="font-weight-bold ml-3 mt-3"> Orang Tua/Wali</label>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Nama</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $student->guardian->nama }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Tempat/Tanggal lahir</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $student->guardian->tempat_lahir }} / {{ $student->guardian->tanggal_lahir }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Agama</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $student->guardian->agama }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Kewarganegaraan</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $student->guardian->kewarganegaraan }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Hubungan Keluarga</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $student->guardian->hubungan_keluarga }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Ijazah Tertingi</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $student->guardian->ijazah_tertinggi }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Pekerjaan</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $student->guardian->pekerjaan }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Penghasilan Per Bulan</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $student->guardian->penghasilan_perbulan }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Alamat</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $student->guardian->alamat_rumah }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">No HP</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $student->guardian->no_hp }}</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="PendidikanSebelumnya" class="tabcontent">
        <div class="row">
            <div class="col">
                <div class="card mb-4">
                    <label class="font-weight-bold ml-3 mt-3"> Pendidikan Sebelumnya</label>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Asal Sekolah</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $student->previousEducation->asal_sekolah }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Tanggal SKHUN</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $student->previousEducation->tanggal_skhun }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">No SKHUN</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $student->previousEducation->no_skhun }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Tanggal Ijazah</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $student->previousEducation->tanggal_ijazah }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">No Ijazah</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $student->previousEducation->no_ijazah }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Pindahan Dari Sekolah</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $student->previousEducation->pindahan_dari_sekolah }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Diterima Dikelas</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $student->previousEducation->diterima_dikelas }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Kelompok</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $student->previousEducation->kelompok }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Tanggal Penerimaan</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $student->previousEducation->tanggal_penerimaan }}</p>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="Hobby" class="tabcontent">
        <div class="row">
            <div class="col">
                <div class="card mb-4">
                    <label class="font-weight-bold ml-3 mt-3"> Hobby</label>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Kesehatan_jasmani</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $student->hobby->kesehatan_jasmani }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Kesenian</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $student->hobby->kesenian }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function openData(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>
@endsection
