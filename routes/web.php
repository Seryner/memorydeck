<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaquetController;
use App\Http\Controllers\MotController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/paquets', function () {
        return view('pages/paquets');
    })->name('paquets');

    Route::post('/paquets', [PaquetController::class, 'store'])->name('paquets.store');
    Route::get('/paquets/{id}', [PaquetController::class, 'display'])->name('paquets.display');
    Route::get('/paquets/{id}/destroy', [PaquetController::class, 'destroy'])->name('paquets.destroy');

    Route::post('/paquets/{paquet}/mots', [MotController::class, 'store'])->name('paquets.mots.store');
    Route::get('/paquets/{paquet}/mots/{mot}/destroy', [MotController::class, 'destroy'])->name('paquets.mots.destroy');
});
