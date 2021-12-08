<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Akun;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    //masuk ke halaman login

     public function index(){

        return view('login',[

        ]);

    }

    //check apakah username dan password ada yang sama dengan di database
    public function check(Request $request)
    {
        $daaa = Akun::all();

        $usname = $request->input("ussername");
        $pswd = $request->input("password");
        
        foreach ($daaa as $key => $value) {
        $batas=$key+1;
        }

        for($x=0; $x<$batas; $x++){
            if($daaa[$x]['uname']==$usname && $daaa[$x]['pword']==$pswd){
               //start session
                
                session_start();
                $_SESSION['username'] = $usname;
                $_SESSION['password'] = $pswd;
                
                return view('home');
            }
        }

        echo '<script language="javascript">';
        echo 'alert("Username atau Password salah")';
        echo '</script>';

        return view('login');

    }

    //session logout
    public function logout(){
        session_start();
        session_destroy();
        return view('login');
    }
}
