@extends('app')
@section('content')
    
<div class="page-header">
    <a href="#"><h3 class="page-title">Period</h3></a>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Period</a></li>
          <li class="breadcrumb-item active" aria-current="page"> Data Periode </li>
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
                    <h4 class="card-title">Data Periode</h4>           
                </div>
                <div class="col d-flex justify-content-end mb-1">
                    <a href="{{ route('periods.create') }}" class="btn btn-sm btn-success">
                        <i class="fa fa-plus"></i>
                    </a>
                </div>
            </div>        
          <div class="table-responsive">
            <table class="table table-striped" id="myTable">
              <thead class="thead-light">
                <tr>
                  <th>#</th>
                  <th>Tahun Ajaran</th>                                    
                  <th>Status</th>                                    
                  <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>#</th>
                  <th>Tahun Ajaran</th>                                  
                  <th>Status</th>                                  
                  <th>Action</th>
                </tr>
              </tfoot>
              <tbody>
                @foreach ($periods as $period)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $period->tahun_ajaran }}</td>                  
                  <td>{{ $period->status_id }}</td>                  
                  <td> 
                    <a class="btn btn-sm btn-warning text-light" href="{{ route('periods.edit', $period->id) }}"><i class="mdi mdi-lead-pencil"></i></a>
                    &nbsp;
                    <button onclick="deleteItem(this)" data-id="{{ $period->id }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
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
@include('admin.period.remove_script')     
@endsection