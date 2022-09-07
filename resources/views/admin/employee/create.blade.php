@extends('app')
@section('content')
    <div class="page-header">
        <a href="#">
            <h3 class="page-title">Employee</h3>
        </a>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Employee</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Create Pegawai </li>
            </ol>
        </nav>
    </div>
    <!-- first row starts here -->
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Create Pegawai</h4>
                    <form class="forms-sample" action="{{ route('employees.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>NIP</label>
                            <input name="nip" type="text" class="form-control @error('nip') is-invalid @enderror"
                                id="nip" required autocomplete="nip" />
                            @error('nip')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input name="nama" type="text" class="form-control @error('nama') is-invalid @enderror"
                                id="nama" required autocomplete="nama" />
                            @error('nama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin"
                                class="form-control @error('jenis_kelamin') is-invalid @enderror" required
                                autocomplete="jenis_kelamin">
                                <option value="L">L</option>
                                <option value="P">P</option>
                            </select>
                            @error('jenis_kelamin')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Tempat Lahir</label>
                            <input name="tempat_lahir" type="text"
                                class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir" required
                                autocomplete="tempat_lahir" />
                            @error('tempat_lahir')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input name="tanggal_lahir" type="date"
                                class="form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir"
                                required autocomplete="tanggal_lahir" />
                            @error('tanggal_lahir')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>NIK</label>
                            <input name="nik" type="text" class="form-control @error('nik') is-invalid @enderror"
                                id="nik" required autocomplete="nik" />
                            @error('nik')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>NUPTK</label>
                            <input name="nuptk" type="text" class="form-control @error('nuptk') is-invalid @enderror"
                                id="nuptk" required autocomplete="nuptk" />
                            @error('nuptk')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>NPWP</label>
                            <input name="npwp" type="text" class="form-control @error('npwp') is-invalid @enderror"
                                id="npwp" required autocomplete="npwp" />
                            @error('npwp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input name="email" type="text" class="form-control @error('email') is-invalid @enderror"
                                id="email" required autocomplete="email" />
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Status Pegawai</label>
                            <select name="status_pegawai" id="status_pegawai"
                                class="form-control @error('status_pegawai') is-invalid @enderror" required
                                autocomplete="status_pegawai">
                                <option value="PNS">PNS</option>
                                <option value="Honorer">Honorer</option>
                            </select>
                            @error('status_pegawai')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Pendidikan Terakhir</label>
                            <input name="pendidikan_terakhir" type="text"
                                class="form-control @error('pendidikan_terakhir') is-invalid @enderror"
                                id="pendidikan_terakhir" required autocomplete="pendidikan_terakhir" />
                            @error('pendidikan_terakhir')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Jurusan</label>
                            <input name="jurusan" type="text"
                                class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" required
                                autocomplete="jurusan" />
                            @error('jurusan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Tugas Pegawai</label>
                            <select name="tugas_pegawai" id="tugas_pegawai"
                                class="form-control @error('tugas_pegawai') is-invalid @enderror" required
                                autocomplete="tugas_pegawai">
                                <option value="KepalaSekolah">Kepala Sekolah</option>
                                <option value="KoordinatorTU">Koordinator TU</option>
                                <option value="GTT">GTT</option>
                                <option value="PTT">PTT</option>
                                <option value="Guru">Guru</option>
                            </select>
                            @error('tugas_pegawai')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>TMT Tugas</label>
                            <input name="tmt_tugas" type="date"
                                class="form-control @error('tmt_tugas') is-invalid @enderror" id="tmt_tugas" required
                                autocomplete="tmt_tugas" />
                            @error('tmt_tugas')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>TMT Pangkat</label>
                            <input name="tmt_pangkat" type="date"
                                class="form-control @error('tmt_pangkat') is-invalid @enderror" id="tmt_pangkat" required
                                autocomplete="tmt_pangkat" />
                            @error('tmt_pangkat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>TMT PNS</label>
                            <input name="tmt_pns" type="date"
                                class="form-control @error('tmt_pns') is-invalid @enderror" id="tmt_pns" required
                                autocomplete="tmt_pns" />
                            @error('tmt_pns')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary mr-2"> Save </button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
