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
          <h4 class="card-title">Data Kelas</h4>
          <div class="table-responsive">
            <table class="table table-striped">
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
                data: 'kode',
            },
            {
                data: 'nama',
            },
            {
                data: 'deskripsi',
            },           
            {
                data: 'action',
            },
        ],
    });
});
</script>     
@endsection