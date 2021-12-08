<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventGunung;

class GunungController extends Controller
{   

    //memunculkan database di halaman list
    public function show()
    {
        $data = eventgunung::all();

        session_start();
        if(empty($_SESSION['username'])){
            return view('login');
        }
       
        return view('list')
        ->with('data',$data);
    }

    //menghapus data yang memiliki $id sesuai dan kembali ke halaman list

    public function destroy($id){

        $key = eventgunung::find($id);

        $key->delete();

        return redirect('list');

    }

    //meneruskan data id dan meneruskan data ke halaman update 
    public function update($id){
        
        $eventgunung = eventgunung::find($id);
        
        return view('update',compact('eventgunung'));
    }

    //halaman update mengisi data ke database dan kembali ke list
    public function store(Request $Request, $id){

        $data = eventgunung::find($id);
        
        $data->update([
            $data->NamaGunung = $Request->NamaGunung,
            $data->NamaEvent = $Request->EventGunung,
            $data->Waktu = $Request->Waktu,
            $data->Gambar = $Request->Gambar
            ]);
        return redirect('list');        
    }
}
