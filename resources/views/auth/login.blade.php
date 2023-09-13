@extends('layouts.app')

@section('content')
<main class="admin-main  bg-white">
    <div class="container">
        <div class="row m-h-100 ">
            <div class="col-md-8 col-lg-4 m-auto">
                <div class="card shadow-lg ">
                    <div class="card-body ">
                        <div class=" padding-box-2 ">
                            <h3 class="text-left text-primary-dark my-3">Masuk</h3>
                            {{-- <form action="index.html" method="post" class="">
                                <div class="form-group">
                                    <label>Hi John, enter password</label>

                                    <div class="input-group input-group-flush mb-3">
                                        <input type="password" class="form-control form-control-prepended"
                                                >
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <span class=" mdi mdi-key "></span>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                                <div class="form-group">
                                    <button class="btn text-uppercase btn-block  btn-primary">
                                        Login
                                    </button>
                                </div>
                                <p class="small">
                                    You have been logged out of system please enter password to continue
                                </p>
                            </form> --}}
                            <form method="POST" action="{{ route('login') }}">
                            @csrf
                                <div class="row mb-3">
                                    <div class="form-group floating-label col-md-12">
                                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="form-group floating-label col-md-12">
                                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <p class="text-right">
                                    <a class=" text-primary-dark" href="#">
                                        Lupa Passsword?
                                    </a>
                                </p>

                                <div class="row mb-0">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-block btn-lg">
                                            {{ __('Login') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <p class="text-center p-t-10">
                                Belum punya akun?
                                <a class="text-underline text-primary-dark" href="{{ route('register.index') }}">
                                    <b>Daftar Sekarang</b>
                                </a>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
