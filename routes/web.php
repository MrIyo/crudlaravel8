<?php

use App\Models\Admin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\LoginController;
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
    $jumlahadmin = Admin::count();
    $jumlahadminlakilaki = Admin::where('jeniskelamin','lakilaki')->count();
    $jumlahadminperempuan = Admin::where('jeniskelamin','perempuan')->count();

    return view('welcome', compact('jumlahadmin','jumlahadminlakilaki','jumlahadminperempuan'));
})->middleware('auth');

Route::group(['middleware' => ['auth','hakakses:admin']], function(){
    // Admin
    Route::get('/admin',[AdminController::class, 'index'])->name('admin')->middleware('auth');

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

});

// Login
Route::get('/login',[LoginController::class, 'login'])->name('login');
Route::post('/loginproses',[LoginController::class, 'loginproses'])->name('loginproses');
// Register
Route::get('/register',[LoginController::class, 'register'])->name('register'); // Nampilin View nya
Route::post('/registeruser',[LoginController::class, 'registeruser'])->name('registeruser'); // Menyimpan datanya ke dalam database
// Logout
Route::get('/logout',[LoginController::class, 'logout'])->name('logout');

// Ke View Kendaraan
Route::get('/datakendaraan',[KendaraanController::class, 'index'])->name('datakendaraan')->middleware('auth');
// Tambah Data Kendaraan
Route::get('/tambahkendaraan',[KendaraanController::class, 'create'])->name('tambahkendaraan');
//
Route::post('/insertdatakendaraan',[KendaraanController::class, 'store'])->name('insertdatakendaraan');

Route::get('/tampilkankendaraan/{id}',[KendaraanController::class, 'show'])->name('tampilkankendaraan');
Route::post('/updatekendaraan/{id}',[KendaraanController::class, 'updatekendaraan'])->name('updatekendaraan');

Route::get('/deletekendaraan/{id}',[KendaraanController::class, 'deletekendaraan'])->name('deletekendaraan');


// Suuper Admin

Route::get('/sadmin',[SadminController::class, 'index'])->name('sadmin');


Route::get('/listapprove', function () {
    return view('approve/listapprove');
});
Route::get('/approvedata',function(){
    return view('user/approvedata');
});
