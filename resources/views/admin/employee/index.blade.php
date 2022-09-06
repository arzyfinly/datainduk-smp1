@extends('app')
@section('content')
    
<div class="page-header">
    <a href="#"><h3 class="page-title">Employee</h3></a>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Employee</a></li>
          <li class="breadcrumb-item active" aria-current="page"> Data Pegawai </li>
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
                    <h4 class="card-title">Data Pegawai</h4>           
                </div>
                <div class="col d-flex justify-content-end mb-1">
                    <a href="{{ route('employees.create') }}" class="btn btn-sm btn-success">
                        <i class="fa fa-plus"></i>
                    </a>
                </div>
            </div>        
          <div class="table-responsive">
            <table class="table table-striped" id="myTable">
              <thead class="thead-light">
                <tr>
                  <th>#</th>
                  <th>NIP</th>                                    
                  <th>Nama</th>                                    
                  <th>Jenis Kelamin</th>                                    
                  <th>Tempat Lahir</th>                                    
                  <th>Tanggal Lahir</th>                                    
                  <th>NIK</th>                                    
                  <th>NUPTK</th>                                    
                  <th>NPWP</th>                                    
                  <th>Email</th>                                    
                  <th>Status Pegawai</th>                                    
                  <th>Pendidikan Terakhir</th>                                    
                  <th>Jurusan</th>                                    
                  <th>Tugas Pegawai</th>                                    
                  <th>TMT Tugas</th>                                    
                  <th>TMT Pangkat</th>                                    
                  <th>TMT PNS</th>                                    
                  <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>#</th>
                  <th>NIP</th>                                    
                  <th>Nama</th>                                    
                  <th>Jenis Kelamin</th>                                    
                  <th>Tempat Lahir</th>                                    
                  <th>Tanggal Lahir</th>                                    
                  <th>NIK</th>                                    
                  <th>NUPTK</th>                                    
                  <th>NPWP</th>                                    
                  <th>Email</th>                                    
                  <th>Status Pegawai</th>                                    
                  <th>Pendidikan Terakhir</th>                                    
                  <th>Jurusan</th>                                    
                  <th>Tugas Pegawai</th>                                    
                  <th>TMT Tugas</th>                                    
                  <th>TMT Pangkat</th>                                    
                  <th>TMT PNS</th>                                    
                  <th>Action</th>
                </tr>
              </tfoot>
              <tbody>
                @foreach ($employees as $employee)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $employee->nip }}</td>                  
                  <td>{{ $employee->nama }}</td>                  
                  <td>{{ $employee->jenis_kelamin }}</td>                  
                  <td>{{ $employee->tempat_lahir }}</td>                  
                  <td>{{ $employee->tanggal_lahir }}</td>                  
                  <td>{{ $employee->nik }}</td>                  
                  <td>{{ $employee->nuptk }}</td>                  
                  <td>{{ $employee->npwp }}</td>                  
                  <td>{{ $employee->email }}</td>                  
                  <td>{{ $employee->status_pegawai }}</td>                  
                  <td>{{ $employee->pendidikan_terakhir }}</td>                  
                  <td>{{ $employee->jurusan }}</td>                  
                  <td>{{ $employee->tugas_pegawai }}</td>                  
                  <td>{{ $employee->tmt_tugas }}</td>                  
                  <td>{{ $employee->tmt_pangkat }}</td>                  
                  <td>{{ $employee->tmt_pns }}</td>                  
                  <td> 
                    <a class="btn btn-sm btn-warning text-light" href="{{ route('employees.edit', $employee->id) }}"><i class="mdi mdi-lead-pencil"></i></a>
                    &nbsp;
                    <button onclick="deleteItem(this)" data-id="{{ $employee->id }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
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
@include('admin.employee.remove_script')     
@endsection