<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SadminController;

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
    return view('welcome');
});

// Admin

Route::get('/admin',[AdminController::class, 'index'])->name('admin');


Route::get('/tambahadmin',[AdminController::class, 'tambahadmin'])->name('tambahadmin');
Route::post('/insertadmin',[AdminController::class, 'insertadmin'])->name('insertadmin');

Route::get('/tampilkandata/{id}',[AdminController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}',[AdminController::class, 'updatedata'])->name('updatedata');

Route::get('/delete/{id}',[AdminController::class, 'delete'])->name('delete');

// Export PDF
Route::get('/exportpdf',[AdminController::class, 'exportpdf'])->name('exportpdf');
// Export Excel
Route::get('/exportexcel',[AdminController::class, 'exportexcel'])->name('exportexcel');
// Import Excel
Route::post('/importexcel',[AdminController::class, 'importexcel'])->name('importexcel');




// Suuper Admin

Route::get('/sadmin',[SadminController::class, 'index'])->name('sadmin');
