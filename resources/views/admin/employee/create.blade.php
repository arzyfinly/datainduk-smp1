@extends('app')
@section('content')
    
<div class="page-header">
    <a href="#"><h3 class="page-title">Employee</h3></a>
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
        <form class="forms-sample" action="{{route('employees.store')}}" method="POST">
          @csrf        
          <div class="form-group">
            <label>NIP</label>
            <input name="nip" type="text" class="form-control" id="nip"  />
          </div>           
          <div class="form-group">
            <label>Nama</label>
            <input name="nama" type="text" class="form-control" id="nama"  />
          </div>           
          <div class="form-group">
            <label>Jenis Kelamin</label>
           <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
            <option value="L">L</option>
            <option value="P">P</option>
           </select>
          </div>           
          <div class="form-group">
            <label>Tempat Lahir</label>
            <input name="tempat_lahir" type="text" class="form-control" id="tempat_lahir"  />
          </div>           
          <div class="form-group">
            <label>Tanggal Lahir</label>
            <input name="tanggal_lahir" type="date" class="form-control" id="tanggal_lahir"  />
          </div>           
          <div class="form-group">
            <label>NIK</label>
            <input name="nik" type="text" class="form-control" id="nik"  />
          </div>           
          <div class="form-group">
            <label>NUPTK</label>
            <input name="nuptk" type="text" class="form-control" id="nuptk"  />
          </div>           
          <div class="form-group">
            <label>NPWP</label>
            <input name="npwp" type="text" class="form-control" id="npwp"  />
          </div>           
          <div class="form-group">
            <label>Email</label>
            <input name="email" type="text" class="form-control" id="email"  />
          </div>           
          <div class="form-group">
            <label>Status Pegawai</label>
            <select name="status_pegawai" id="status_pegawai" class="form-control">
              <option value="PNS">PNS</option>
              <option value="Honorer">Honorer</option>
             </select>
          </div>           
          <div class="form-group">
            <label>Pendidikan Terakhir</label>
            <input name="pendidikan_terakhir" type="text" class="form-control" id="pendidikan_terakhir"  />
          </div>           
          <div class="form-group">
            <label>Jurusan</label>
            <input name="jurusan" type="text" class="form-control" id="jurusan"  />
          </div>           
          <div class="form-group">
            <label>Tugas Pegawai</label>
            <select name="tugas_pegawai" id="tugas_pegawai" class="form-control">
              <option value="KepalaSekolah">Kepala Sekolah</option>
              <option value="KoordinatorTU">Koordinator TU</option>
              <option value="GTT">GTT</option>
              <option value="PTT">PTT</option>
              <option value="Guru">Guru</option>
             </select>
          </div>    
          <div class="form-group">
            <label>TMT Tugas</label>
            <input name="tmt_tugas" type="date" class="form-control" id="tmt_tugas"  />
          </div>        
          <div class="form-group">
            <label>TMT Pangkat</label>
            <input name="tmt_pangkat" type="date" class="form-control" id="tmt_pangkat"  />
          </div>        
          <div class="form-group">
            <label>TMT PNS</label>
            <input name="tmt_pns" type="date" class="form-control" id="tmt_pns"  />
          </div>        
          <button type="submit" class="btn btn-primary mr-2"> Save </button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection