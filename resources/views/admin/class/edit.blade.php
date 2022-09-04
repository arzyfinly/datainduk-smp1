@extends('app')
@section('content')
    
<div class="page-header">
    <a href="#"><h3 class="page-title">Class</h3></a>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Class</a></li>
          <li class="breadcrumb-item active" aria-current="page"> Edit Kelas </li>
        </ol>
    </nav>
</div>
<!-- first row starts here -->
<div class="row">
  <div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edit Kelas</h4>      
        <form class="forms-sample" action="{{route('classes.update', $class->id)}}" method="POST">
          @csrf
          @method('PUT')
          <div class="form-group">
            <label>Kode</label>
            <input name="kode" type="text" class="form-control" id="kode" value="{{$class->kode}}" />
          </div>
          <div class="form-group">
            <label>Nama Kelas</label>
            <input name="nama" type="text" class="form-control" id="nama" value="{{$class->nama}}" />
          </div>
          <div class="form-group">
            <label>Deskripsi</label>
            <input name="deskripsi" type="text" class="form-control" id="deskripsi" value="{{$class->deskripsi}}" />
          </div>        
          <button type="submit" class="btn btn-primary mr-2"> Update </button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection