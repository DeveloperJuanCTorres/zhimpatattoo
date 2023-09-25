<?php

use App\Http\Controllers\AdminController;
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

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/cotizar', function () {
//     return view('cotizar');
// });
Route::get('/',[AdminController::class,'home']);
Route::get('/cotizar',[AdminController::class,'cotizar']);
Route::get('/studio',[AdminController::class,'studio']);
Route::get('/artistas',[AdminController::class,'artistas']);
Route::get('/artistas/{artist}',[adminController::class,'artistaid'])->name('artistaid');
Route::get('/piercing',[AdminController::class,'piercing']);
Route::get('/piercing/{posicion}',[adminController::class,'piercingid'])->name('piercingid');
Route::get('/proyectos',[AdminController::class,'proyectos']);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

