@extends('app')
@section('content')
    
<div class="page-header">
    <a href="#"><h3 class="page-title">Student</h3></a>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Student</a></li>
          <li class="breadcrumb-item active" aria-current="page"> Data Siswa </li>
        </ol>
    </nav>
</div>
<!-- first row starts here -->
<div class="row">
  <div class="col-xl-12 stretch-card grid-margin">
    <div class="card">
        <div class="card-body">
          <h4 class="card-title">Data Siswa</h4>
          <div class="table-responsive">
            <table class="table table-striped">
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

              </tbody>
            </table>
          </div>
        </div>
      </div>
  </div>
</div>
<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<script>
$(document).ready(function(){
    $('#dataTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: "{{ route('students.index') }}",
            type: 'GET',
        },
        "responsive": true,
        "language": {
            "oPaginate": {
                "sNext": "<i class='fas fa-angle-right'>",
                "sPrevious": "<i class='fas fa-angle-left'>",
            },
           
        },
        columns: [{
                data: 'DT_RowIndex',
            },
            {
                data: 'nisn',
            },
            {
                data: 'nama_lengkap',
            },
            {
                data: 'jenis_kelamin',
            },
            {
                data: 'diterima_dikelas',
            },
            {
                data: 'action',
            },
        ],
    });
});
</script>     
@endsection