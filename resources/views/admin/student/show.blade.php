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
                    <h4 class="mt-3">Dewi Rohani</h4>
                    <span>NISN : 57142172</span><br>
                    <span>KELAS : 7-1</span>
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
                                <p class="text-muted mb-0">Dewi Rohani</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Nama Panggilan</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">Dewi</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Jenis Kelamin</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">Perempuan</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Tempat/Tanggal Lahir</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">Sumenep/11 Juni 2000</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Agama</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">Islam</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Kewarganegaraan</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">Indonesia</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Anak Ke</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">2</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Jumlah Saudara Kandung</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">1</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Jumlah Saudara Tiri</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">-</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Jumlah Saudara Angkat</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">-</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Status Yatim</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">Tidak</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Bahasa Keseharian</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">Bahasa Indonesia</p>
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
                                <p class="text-muted mb-0">Jl Trunojoyo Gg I Kolor</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">No HP</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">(+62) 87743331758</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Tinggal Dengan</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">Orang Tua</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Jarak Kesekolah</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">3 KM</p>
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
                                <p class="text-muted mb-0">O</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Riwayat Penyakit</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">-</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Kelainan Jasmani</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">-</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Tinggi Badan</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">162 cm</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Berat Badan</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">43 Kg</p>
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
                                <p class="text-muted mb-0">Farid Hariyanto</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Tempat/Tanggal lahir</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">Bangkalan/16 Juni 1972</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Agama</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">Islam</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Kewarganegaraan</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">Indonesia</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Hubungan Keluarga</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">Anak</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Ijazah Tertingi</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">SMA</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Pekerjaan</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">Wiraswasta</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Penghasilan</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">Rp. 1.000.000,-</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Alamat</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">Jl. Trunojoyo Gg I Kolor</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">No HP</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">(+62) 81954359158</p>
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
                                <p class="text-muted mb-0">SDN KOLOR II</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Tanggal SKHUN</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">10 Juli 2013</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">No SKHUN</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">569087241658</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Tanggal Ijazah</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">16 September 2013</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">No Ijazah</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">9763426183001</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Pindahan Dari Sekolah</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">-</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Diterima Dikelas</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">7-1</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Kelompok</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">1</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Tanggal Penerimaan</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">15 Mei 2013</p>
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
                                <p class="mb-0">Olahraga</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">Basket</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Kesenian</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">Tari</p>
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
