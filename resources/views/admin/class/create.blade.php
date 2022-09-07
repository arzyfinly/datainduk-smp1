@extends('app')
@section('content')
    <div class="page-header">
        <a href="#">
            <h3 class="page-title">Class</h3>
        </a>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Class</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Create Kelas </li>
            </ol>
        </nav>
    </div>
    <!-- first row starts here -->
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Create Kelas</h4>
                    <form class="forms-sample" action="{{ route('classes.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Nama Kelas</label>
                            <input name="nama" type="text"
                                class="form-control @error('nama') is-invalid @enderror" id="nama" required
                                autocomplete="nama" autofocus />
                            @error('nama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <input name="deskripsi" type="text"
                                class="form-control  @error('deskripsi') is-invalid @enderror" id="deskripsi" required
                                autocomplete="deskripsi" />
                            @error('deskripsi')
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
