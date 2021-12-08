<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    //memunculkan halaman profiles

    public function show(){
        session_start();
        if(empty($_SESSION['username'])){
            return view('login');
        }

        return view('profiles');
    }
}
