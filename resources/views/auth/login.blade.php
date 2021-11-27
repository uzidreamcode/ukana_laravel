@extends('layouts.app')

@section('content')


<form class="form-horizontal m-t-20" method="POST" action="{{ route('login') }}">
     @csrf
    <div class="form-group row">
        <div class="col-12">
            <input value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" type="email" name="email" required="" placeholder="Masukan Email">
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <div class="col-12">
            <input type="password" placeholder="Masukan Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror 
        </div>
    </div>

    <div class="form-group row">
        <div class="col-12">
            <div class="custom-control custom-checkbox">
                <input  type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember me</label>
            </div>
        </div>
    </div>

    <div class="form-group text-center row m-t-20">
        <div class="col-12">
            <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">{{ __('Login') }}</button>
        </div>
    </div>

    <div class="form-group m-t-10 mb-0 row">
        
        <div class="col-sm-12 m-t-20">
            <a href="{{ url('login/siswa') }}" class="text-muted"><i class="mdi mdi-account-circle"></i> Login Untuk Siswa</a>
        </div>
    </div>
</form>                      


@endsection
