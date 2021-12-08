<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GunungController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Tempat rute lokasi website!
|
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[LoginController::class,'index']);
Route::post('/login',[LoginController::class,'check']);
Route::get('/logout',[LoginController::class,'logout']);

Route::get('/home',[HomeController::class,'index']);

Route::get('/list',[GunungController::class,'show']);
Route::delete('/list/{id}',[GunungController::class,'destroy']);
Route::get('/update/{id}',[GunungController::class,'update']);
Route::post('/update/{id}',[GunungController::class,'store']);

Route::get('/profiles',[ProfilesController::class,'show']);

Route::get('/create',[CreateController::class,'create']);
Route::post('/create',[CreateController::class,'store']);

Route::get('/register',[RegisterController::class,'index']);
Route::post('/register',[RegisterController::class,'store']);
