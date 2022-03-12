<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenumpangController;
use App\Http\Controllers\KeretaController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Frontend2Controller;

use App\Http\Controllers\UserController;
use App\Http\Controllers\BayarController;

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

Route::get('/', [FrontendController::class,'index']);
Route::post('/pesanan', [FrontendController::class,'store'])->name('pesanan');
Route::get('pesan', [Frontend2Controller::class,'index'])->name('pesan');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// admin
Route::group(['prefix' => 'admin','middleware'=>['auth']], function(){
    Route::resource('pesan', PesanController::class);
    Route::resource('kereta', KeretaController::class);
    Route::resource('penumpang', PenumpangController::class);
    Route::resource('user', UserController::class);
    Route::resource('bayar', BayarController::class);
});