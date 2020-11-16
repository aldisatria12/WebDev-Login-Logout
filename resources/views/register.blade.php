@extends('shared/base')

@section('judul','.::Register::.')

@section('isi_konten')
<div class="row">
    <div class='col-md-4 hidden-xs'>
    
    </div>
    <div class='col-md-4 col-xs-12'>
        <h3>Buat akun</h3>
        <form action='/authenticate' method='POST'>
            <label for="Username">First Name</label>
            <input class='form-control' type="text" name="nama_user" id="nama_user">
            <label for="Username">Last Name</label>
            <input class='form-control' type="text" name="nama_user" id="nama_user">
            <label for="Username">Username</label>
            <input class='form-control' type="text" name="nama_user" id="nama_user">
            <label for="Username">Password</label>
            <input class='form-control' type="password" name="kata_sandi" id="kata_sandi">
            <br>
            <button type='submit' class='btn btn-primary'>
                <i class='fa fa-sign-in'></i> Masuk
            </button>
            <button type='reset' class='btn btn-secondary'>
                <i class='fa fa-trash'></i> Batal
            </button>
            <a href='login'>Sudah punya akun?</a>
        </form>
    </div>
    <div class='col-md-4 hidden-xs'>
    
    </div>
</div>
<div class='row'>
    &nbsp;
</div>
@endsection