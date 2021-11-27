@extends('layouts.app')

@section('content')
@include('sweetalert::alert')

<form class="form-horizontal m-t-20" method="post" action="{{ url('login/siswa/proses') }}">
    @csrf
    <div class="form-group row">
        <div class="col-12">
            <input class="form-control @error('nisn') is-invalid @enderror" name="nisn" value="{{ old('nisn') }}" placeholder="NISN">
            @error('nisn')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror 
        </div>
    </div>

    <div class="form-group row">
        <div class="col-12">
            <input id="nama_siswa" type="text" class="form-control @error('nama_siswa') is-invalid @enderror" name="nama_siswa" value="{{ old('nisn') }}" required placeholder="Nama Siswa">
            @error('nama_siswa')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    

    <div class="form-group text-center row m-t-20">
        <div class="col-12">
            <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Log In</button>
        </div>
    </div>

    <div class="form-group m-t-10 mb-0 row">

        <div class="col-sm-5 m-t-20">
            <a href="{{ url('login') }}" class="text-muted"><i class="mdi mdi-account-circle"></i> Login Petugas</a>
        </div>
    </div>
</form>       
@endsection
