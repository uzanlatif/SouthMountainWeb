<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventGunung;

class CreateController extends Controller
{

    //mengakses halaman create
    public function create(){
        
        return view('Create');
    
    }

    //mengirimkan data ke database dan pergi ke halaman home

    public function store(Request $request){

        $newData = new eventgunung;

        $newData->id = $request->IdGunung;
        $newData->NamaGunung = $request->NamaGunung;
        $newData->NamaEvent = $request->EventGunung;
        $newData->Waktu = $request->Waktu;
        $newData->Gambar = $request->Gambar;
        $newData->save();
        

        return view('home');

    }

}


