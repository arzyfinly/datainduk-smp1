@extends('app')
@section('content')
    
<div class="page-header">
    <a href="#"><h3 class="page-title">Class</h3></a>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Class</a></li>
          <li class="breadcrumb-item active" aria-current="page"> Data Kelas </li>
        </ol>
    </nav>
</div>
<!-- first row starts here -->
<div class="row">
  <div class="col-xl-12 stretch-card grid-margin">
    <div class="card">
        <div class="card-body">
            <div class="row mb-2">
                <div class="col d-flex justify-content-start">
                    <h4 class="card-title">Data Kelas</h4>           
                </div>
                <div class="col d-flex justify-content-end">
                    <a href="{{ route('classes.create') }}" class="btn btn-success mr-1">
                        <i class="fa fa-plus"></i>
                    </a>
                </div>
            </div>        
          <div class="table-responsive">
            <table class="table table-striped" id="myTable">
              <thead class="thead-light">
                <tr>
                  <th>#</th>
                  <th>Kode</th>
                  <th>Nama Kelas</th>
                  <th>Deskripsi</th>                  
                  <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>#</th>
                  <th>Kode</th>
                  <th>Nama Kelas</th>
                  <th>Deskripsi</th>                  
                  <th>Action</th>
                </tr>
              </tfoot>
              <tbody>
                @foreach ($classes as $class)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $class->kode }}</td>
                  <td>{{ $class->nama }}</td>
                  <td>{{ $class->deskripsi }}</td>
                  <td> <button> HALO </button></td>
                </tr>    
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
  </div>
</div>     
@endsection