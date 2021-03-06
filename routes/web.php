<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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
    return redirect()->route('');
});

Route::get('/teste/{nome}', function ($nome){
    return "<h1>Ola ".$nome."!</h1>";
});

Route::get('/soma/{n1}/{n2}', function ($n1, $n2){
    return "<h1>A soma e: ".$n1+$n2."!</h1>";
});

Route::get('home', function (){
    return view('home.html');
});

Route::get('home', [AppHttpControllersHomeCtrl::class, 'home']);
Route::prefix('admin')->group(function (){
    Route::resource('genres', \App\Http\Controllers\GenreController::class);
    Route::resource('directors', \App\Http\Controllers\DirectorController::class);
    Route::resource('languages', \App\Http\Controllers\LanguageController::class);
    Route::resource('countries', \App\Http\Controllers\CountryController::class);
    Route::resource('movies', \App\Http\Controllers\MovieController::class);
});

Route::get('vitrine', [\App\Http\Controllers\VitrineController::class, 'index']);
Route::get('vitrine/{movie}', [\App\Http\Controllers\VitrineController::class, 'showmovie'])->name('vitrine.showmovie');
