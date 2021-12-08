<?php

namespace App\Http\Controllers;

use App\Models\Akun;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    //masuk ke halaman register
    public function index(){
        return view('register');
    }
    //melakukan register dan memasukan data ke database dan pergi ke halaman login
    public function store(Request $req){

        $akun = new Akun;

        $akun->uname = $req->username;
        $akun->pword = $req->password;

        $akun->save();

        echo '<script language="javascript">';
        echo 'alert("Telah Berhasil Registrasi")';
        echo '</script>';
        return view ('login');

    }
}
