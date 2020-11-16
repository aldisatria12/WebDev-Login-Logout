@extends('shared/base')

@section('judul','.::Login::.')

@section('isi_konten')
<div class="row">
    <div class='col-md-4 hidden-xs'>
    
    </div>
    <div class='col-md-4 col-xs-12'>
        <h3>Masuk</h3>
        <form action='/login' method='POST'>
            @csrf
            <label for="Username">Username</label>
            <input class='form-control' type="text" name="nama_user" id="nama_user">
            <label for="Username">Password</label>
            <input class='form-control' type="password" name="kata_sandi" id="kata_sandi">
            <br>
            <span id="errormsg">    
            @if(Session::has('error'))
            <p class="alert {{ Session::get('alert-class') }}">{{ Session::get('error') }}</p>
            @endif
            </span>
            <br>
            <button type='submit' class='btn btn-primary'>
                <i class='fa fa-sign-in'></i> Masuk
            </button>
            <button type='reset' class='btn btn-secondary'>
                <i class='fa fa-trash'></i> Batal
            </button>
            <a href='register'>Belum punya akun?</a>
        </form>
    </div>
    <div class='col-md-4 hidden-xs'>
    
    </div>
</div>
<div class='row'>
    &nbsp;
</div>
@endsection