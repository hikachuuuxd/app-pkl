<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KesediaanController;
use App\Http\Controllers\PlotinganController;
use App\Http\Controllers\JurnalController;
use App\Http\Controllers\CobaController;
use App\Http\Controllers\OrtuJurnalController;
use App\Http\Controllers\GuruJurnalController;

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

Route::get('/', [LoginController::class, 'index']);

Route::middleware(['auth', 'Role:dudi'])->group(function () {
    Route::get('dashboard', function (){
        $title = "Dashboard";
        return view('dashboard.index', compact('title'));
    });
    
    Route::prefix('dashboard')->group(function ()
    {
        Route::resource('/kesediaan', KesediaanController::class)->names('kesediaan');
        Route::resource('/plotingan', PlotinganController::class)->names('plotingan');
        Route::resource('/jurnal', JurnalController::class)->names('jurnal');

        Route::prefix('ortu')->group(function()
        {
            Route::get('/jurnal', [OrtuJurnalController::class, 'index'])->name('ortu.jurnal');
        });

        Route::prefix('guru')->group(function()
        {
            Route::get('/jurnal', [GuruJurnalController::class, 'index'])->name('guru.jurnal');
        });

        Route::resource('/konfirmasi', CobaController::class)->names('konfirmasi');
       
    } );


});

Route::middleware(['guest'])->group(function()
{
    Route::get('registrasi', [RegistrasiController::class, 'index'])->name('registrasi.index');
    Route::post('registrasi', [RegistrasiController::class, 'registrasi'])->name('registrasi');
    Route::get('login', [LoginController::class, 'index'])->name('login.index');
    Route::post('login', [LoginController::class, 'authenticate'])->name('login');
});

Route::post('logout', [LoginController::class, 'logout'])->name('logout');