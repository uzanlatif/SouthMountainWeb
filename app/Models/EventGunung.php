<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventGunung extends Model
{
    use HasFactory;

    //agar di database tidak menggunakan waktu
    public $timestamps = false;
    
    protected $fillable = [
        'NamaGunung',
        'NamaEvent',
        'Waktu',
        'Gambar'
    ];
}
