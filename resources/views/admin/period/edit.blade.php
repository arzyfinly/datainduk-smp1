@extends('app')
@section('content')
    
<div class="page-header">
    <a href="#"><h3 class="page-title">Lesson</h3></a>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Lesson</a></li>
          <li class="breadcrumb-item active" aria-current="page"> Edit Mata Pelajaran </li>
        </ol>
    </nav>
</div>
<!-- first row starts here -->
<div class="row">
  <div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edit Mata Pelajaran</h4>      
        <form class="forms-sample" action="{{route('lessons.update', $lesson->id)}}" method="POST">
          @csrf
          @method('PUT')
          <div class="form-group">
            <label>Nama</label>
            <input name="nama" type="text" class="form-control" id="nama" value="{{$lesson->nama}}" />
          </div>
          <button type="submit" class="btn btn-primary mr-2"> Update </button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection