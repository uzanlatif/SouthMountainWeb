<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akun extends Model
{
    protected $table = "akun";

    //agar di database tidak menggunakan waktu
    public $timestamps = false;
    use HasFactory;
}

