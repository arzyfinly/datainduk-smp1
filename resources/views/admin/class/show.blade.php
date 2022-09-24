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
                <h4 class="card-title">Detail Siswa</h4>           
            </div>         
        </div>   
          <div class="table-responsive">
            <table class="table table-striped" id="myTable">
              <thead class="thead-light">
                <tr>
                  <th>#</th>                
                  <th>Siswa</th>                                  
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>#</th>                
                  <th>Siswa</th>                                  
                </tr>
              </tfoot>
              <tbody>
                @foreach ($student as $s)
                <tr>
                    <td> {{ $loop->iteration }} </td>                   
                    <td> {{ $s->personal->nama_lengkap }} </td>                                     
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