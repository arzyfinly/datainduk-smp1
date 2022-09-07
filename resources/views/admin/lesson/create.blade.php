@extends('app')
@section('content')
    
<div class="page-header">
    <a href="#"><h3 class="page-title">Lesson</h3></a>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Lesson</a></li>
          <li class="breadcrumb-item active" aria-current="page"> Create Mata Pelajaran </li>
        </ol>
    </nav>
</div>
<!-- first row starts here -->
<div class="row">
  <div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Create Mata Pelajaran</h4>      
        <form class="forms-sample" action="{{route('lessons.store')}}" method="POST">
          @csrf   
               
          <div class="form-group">
            <label >Kelas</label>            
              <select name="kelas" class="form-control">
                  <option value=""> --Pilih Kelas-- </option>
                  @foreach ($classes as $class)
                      <option value="{{$class->id}}"> {{ $class->nama }} </option>
                  @endforeach
              </select>          
          </div>
          <div class="form-group">
            <label>Nama</label>
            <input name="nama" type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"  required autocomplete="nama" />
            @error('nama')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
          </div>           
          <button type="submit" class="btn btn-primary mr-2"> Save </button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection