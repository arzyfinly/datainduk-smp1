@extends('app')
@section('content')
    
<div class="page-header">
    <a href="#"><h3 class="page-title">Period</h3></a>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Period</a></li>
          <li class="breadcrumb-item active" aria-current="page"> Edit Periode </li>
        </ol>
    </nav>
</div>
<!-- first row starts here -->
<div class="row">
  <div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edit Periode</h4>      
        <form class="forms-sample" action="{{route('periods.update', $period->id)}}" method="POST">
          @csrf
          @method('PUT')
          <div class="form-group">
            <label>Tahun Ajaran</label>
            <input name="tahun_ajaran" type="text" class="form-control" id="tahun_ajaran" value="{{$period->tahun_ajaran}}" />
          </div>
          <div class="form-group">
            <label>Status</label>
            <input name="status_id" type="text" class="form-control" id="status_id" value="{{$period->status_id}}" />
          </div>
          <button type="submit" class="btn btn-primary mr-2"> Update </button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection