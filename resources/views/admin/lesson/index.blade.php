@extends('app')
@section('content')
    
<div class="page-header">
    <a href="#"><h3 class="page-title">Lesson</h3></a>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Lesson</a></li>
          <li class="breadcrumb-item active" aria-current="page"> Mata Pelajaran </li>
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
                    <h4 class="card-title">Mata Pelajaran</h4>           
                </div>
                <div class="col d-flex justify-content-end mb-1">
                    <a href="{{ route('lessons.create') }}" class="btn btn-sm btn-success">
                        <i class="fa fa-plus"></i>
                    </a>
                </div>
            </div>        
          <div class="table-responsive">
            <table class="table table-striped" id="myTable">
              <thead class="thead-light">
                <tr>
                  <th>#</th>
                  <th>Kelas</th>                                    
                  <th>Mata Pelajaran</th>                                    
                  <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>#</th>
                  <th>Kelas</th>                                  
                  <th>Mata Pelajaran</th>                                  
                  <th>Action</th>
                </tr>
              </tfoot>
              <tbody>
                @foreach ($lessons as $lesson)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $lesson->class->nama }}</td>                  
                  <td>{{ $lesson->detailLesson->nama }}</td>                  
                  <td> 
                    <a class="btn btn-sm btn-warning text-light" href="{{ route('lessons.edit', $lesson->id) }}"><i class="mdi mdi-lead-pencil"></i></a>
                    &nbsp;
                    <button onclick="deleteItem(this)" data-id="{{ $lesson->id }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
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
@include('admin.lesson.remove_script')     
@endsection