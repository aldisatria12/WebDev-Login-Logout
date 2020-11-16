@extends('shared/base')

@section('judul','.::Login::.')

@section('isi_konten')
<div class="row">
    <div class='col-md-4 hidden-xs'>
    
    </div>
    <div class='col-md-4 col-xs-12'>
        <h3>Shhh.. this is a secret</h3>
        <p>Hi, {{ session('nama') }}!</p>
        <p>I know your name. Don't tell anyone, this is our secret!</p>
        <p>Anyway this is a picture of a cat ;)</p>
        <img style="width : 50vh;" src="https://www.humanesociety.org/sites/default/files/styles/2000x850/public/2018/08/kitten-440379.jpg?h=c8d00152&itok=dz_bhvnR" alt="This is supposed to be a cat">
        <p>And also.. click the button bellow to go back.</p> 
        <a href="/" class='btn btn-primary'>Home</a> 
    </div>
    <div class='col-md-4 hidden-xs'>
    
    </div>
</div>
<div class='row'>
    &nbsp;
</div>
@endsection