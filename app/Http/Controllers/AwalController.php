<?php

namespace App\Http\Controllers;

use Session;

use Illuminate\Http\Request;

class AwalController extends Controller
{
    public function index(){
        //echo "Halo Kamu ngakses Controller Awal pada function index";
        //return view('form');
        
        return view('index');
    }

    public function login(){
        if(Session::has('nama')){
            return redirect('/');
        }else{
            return view('login');
        }
    }

    public function register(){
        return view('register');
    }

    public function secretPage(Request $req){
        if(Session::has('nama')){
            return view('secret');
        }else{
            $req->session()->put('prev', 'secret');
            Session::flash('alert-class', 'alert-info'); 
            return redirect('/login')->with(['error' => 'Please login to proceed.']) ;
        }
    }

    public function tangkap(Request $req){
        echo $req->input('nama_user');
        echo "<br>";
        echo $req->input('alamat_surat');
    }

    public function checkLogin(Request $req){
        $name = $req->input('nama_user');
        $pasw = $req->input('kata_sandi');
        if($name == $pasw){
            $req->session()->put('nama', $name);
            if(Session::has('prev')){
                $temp = $req->session()->get('prev');
                
                return redirect($temp);
            }
            return redirect('/');
        }
        else{
            Session::flash('alert-class', 'alert-danger'); 
            return redirect('/login')->with(['error' => 'Sorry the password or username did not match. Please try again.']) ;
        }
    }

    public function logout(Request $req){
        $req->session()->flush();
        return redirect('/');
    }
}