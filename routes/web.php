<?php

use App\Http\Controllers\AdministrativoController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::resource('departamento', App\Http\Controllers\DepartamentoController::class);
Route::resource('edificio', App\Http\Controllers\EdificioController::class);
Route::resource('area_comun', App\Http\Controllers\AreaComunController::class);

Route::resource('administrativo', AdministrativoController::class)->middleware('auth');
Auth::routes(['reset'=>false]);

Route::get('/home', [AdministrativoController::class, 'index'])->name('home'); 
    
Route::group(['middleware' => 'auth'], function(){
    Route::get('/', [AdministrativoController::class, 'index'])->name('home');
});

 