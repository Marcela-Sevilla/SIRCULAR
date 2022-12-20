<?php

use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

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
    return view('index');
})->name('Sircular');

Route::get('/RevolucionCircular', function () {
    return view('RevolucionCircular');
})->name('RevolucionCircular');

Route::get('/pilas', function () {
    return view('pilas');
})->name('pilas');

Route::get('/pilasContenedores', function () {
    return view('pilasContenedores');
})->name('pilasContenedores');

Route::get('/gestionPilas', function () {
    return view('gestionPilas');
})->name('gestionPilas');

Route::get('/PuntosRecoleccion', function () {
    return view('punto_recoleccion');
})->name('PuntosRecoleccion');

Route::get('/register', function () {
    return view('auth.register');
})->name('Register');

Route::get('/login', function () {
    return view('auth.login');
})->name('Login');

Route::post('/', [ContactanosController::class, 'mensaje'])->name('Contactanos');

Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/login', [RegisterController::class, 'login'])->name('login');
Route::get('/salir', [RegisterController::class, 'logout'])->name('logout');
