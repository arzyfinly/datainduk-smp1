@extends('app')
@section('content')
    <div class="page-header">
        <a href="#">
            <h3 class="page-title">Period</h3>
        </a>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Period</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Create Periode </li>
            </ol>
        </nav>
    </div>
    <!-- first row starts here -->
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Create Periode</h4>
                    <form class="forms-sample" action="{{ route('periods.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Tahun Ajaran</label>
                            <input name="tahun_ajaran" type="text"
                                class="form-control @error('tahun_ajaran') is-invalid @enderror" id="tahun_ajaran" required
                                autocomplete="tahun_ajaran" autofocus />
                            @error('tahun_ajaran')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <input name="status_id" type="text"
                                class="form-control @error('status_id') is-invalid @enderror" id="status_id" required
                                autocomplete="status_id" />
                            @error('status_id')
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
