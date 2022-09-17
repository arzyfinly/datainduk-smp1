@extends('app')
@section('content')
    
<div class="page-header">
    <a href="#"><h3 class="page-title">Siswa</h3></a>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Siswa</a></li>
          <li class="breadcrumb-item active" aria-current="page"> Data Siswa </li>
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
                <h4 class="card-title">Data Siswa</h4>           
            </div>
            <div class="col d-flex justify-content-end mb-1">
                <a href="{{ route('students.create') }}" class="btn btn-sm btn-success">
                    <i class="fa fa-plus"></i>
                </a>
            </div>
        </div>   
          <div class="table-responsive">
            <table class="table table-striped" id="myTable">
              <thead class="thead-light">
                <tr>
                  <th>#</th>
                  <th>NISN</th>
                  <th>Nama</th>
                  <th>Jenis Kelamin</th>
                  <th>Diterima Di Kelas</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>#</th>
                  <th>NISN</th>
                  <th>Nama</th>
                  <th>Jenis Kelamin</th>
                  <th>Diterima Di Kelas</th>
                  <th>Action</th>
                </tr>
              </tfoot>
              <tbody>
                @foreach ($students as $student)
                <tr>
                    <td> {{ $loop->iteration }} </td>
                    <td> {{ $student->nisn }} </td>
                    <td> {{ $student->personal->nama_lengkap }} </td>
                    <td> {{ $student->personal->jenis_kelamin }} </td>
                    <td> {{ $student->class->nama }} </td>
                    <td> 
                      <a class="btn btn-sm btn-info" href="{{ route('students.show', $student->id) }}"><i class="mdi mdi-eye"></i></a>
                      &nbsp;
                      <a class="btn btn-sm btn-warning text-light" href="{{ route('students.edit', $student->id) }}"><i class="mdi mdi-lead-pencil"></i></a>
                      &nbsp;
                      <button onclick="deleteItem(this)" data-id="{{ $student->id }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
  </div>
</div>
@include('admin.student.remove_script')
@endsection