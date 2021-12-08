<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    //munculkan halaman home utama apabila terdapat session
    public function index()
    {
        session_start();
        if(empty($_SESSION['username'])){
            return view('login');
        }

        return view('home',[
        ]);
    }
}