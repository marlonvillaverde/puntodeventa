<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Ventas\Ventas;
use App\Http\Livewire\Catalogos\ShowArticles;



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


 Route::middleware(['auth:sanctum','verified'])->get('/', function () {
    return view('home');
});
Route::middleware(['auth:sanctum','verified'])->get('/home', function () {
    return view('home');
})->name('/home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');




Route::middleware(['auth:sanctum', 'verified'])->get('/articulos', ShowArticles::class )->name('ventas.nuevaventa');

Route::middleware(['auth:sanctum', 'verified'])->get('/newsale', Ventas::class )->name('ventas.nuevaventa');