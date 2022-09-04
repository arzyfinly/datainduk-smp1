@extends('app')
@section('content')
    
<div class="page-header">
    <a href="#"><h3 class="page-title">Class</h3></a>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Class</a></li>
          <li class="breadcrumb-item active" aria-current="page"> Create Kelas </li>
        </ol>
    </nav>
</div>
<!-- first row starts here -->
<div class="row">
  <div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Create Kelas</h4>      
        <form class="forms-sample" action="{{route('classes.store')}}" method="POST">
          @csrf        
          <div class="form-group">
            <label>Kode</label>
            <input name="kode" type="text" class="form-control" id="kode"  />
          </div>
          <div class="form-group">
            <label>Nama Kelas</label>
            <input name="nama" type="text" class="form-control" id="nama"  />
          </div>
          <div class="form-group">
            <label>Deskripsi</label>
            <input name="deskripsi" type="text" class="form-control" id="deskripsi"  />
          </div>        
          <button type="submit" class="btn btn-primary mr-2"> Save </button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection