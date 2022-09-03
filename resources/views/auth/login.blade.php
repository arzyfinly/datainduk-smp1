@extends('auth.main')
@section('content')
    <!-- Login Content -->
    <div class="container-login">
        <div class="row justify-content-center mt-5">
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-8 text-center">
                <div class="card shadow-sm my-4 border-bottom-primary">
                    <div class="card-header">
                        <img src="{{ asset('assets-login/img/logo/logosmp1.png') }}" class="card-img-bottom mt-2"
                            style="max-width: 250px" alt="Photo">
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                {{-- <h1 class="h4 text-gra y-900 font-weight-bold mt-2">Login</h1> --}}
                                <div class="login-form">
                                    <small class="text-danger" id="message-error"></small>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            <small class="text-danger" id="email-error"></small>
                                        </div>
                                        <div class="form-group">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                            <small class="text-danger" id="password-error"></small>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
