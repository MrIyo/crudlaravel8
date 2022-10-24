<?php

use App\Models\Admin;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\SadminController;
use App\Http\Controllers\UserController;

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
    $jumlahadmin = User::count();
    $jumlahadminlakilaki = User::where('role','admin')->count();
    $jumlahadminperempuan = User::where('role','user')->count();

    return view('welcome', compact('jumlahadmin','jumlahadminlakilaki','jumlahadminperempuan'));
})->middleware('auth');

Route::group(['middleware' => ['auth','hakakses:admin']], function(){
    // Admin
    Route::get('/admin',[AdminController::class, 'index'])->name('admin')->middleware('auth');
    Route::get('/user',[AdminController::class, 'user'])->name('user')->middleware('auth');

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


    //USER
    Route::get('/listapprove',[UserController::class, 'listapprove'])->name('listapprove');
    Route::get('/showapprove/{id}',[UserController::class, 'showapprove'])->name('showapprove');
    Route::post('/terimaapprove',[UserController::class, 'terimaapprove'])->name('terimaapprove');
    Route::post('/tolakapprove',[UserController::class, 'tolakapprove'])->name('tolakapprove');


    // Ke View Kendaraan
Route::get('/datakendaraan',[KendaraanController::class, 'index'])->name('datakendaraan')->middleware('auth');
Route::get('/tambahkendaraan',[KendaraanController::class, 'create'])->name('tambahkendaraan');
Route::post('/insertdatakendaraan',[KendaraanController::class, 'store'])->name('insertdatakendaraan');
Route::get('/tampilkankendaraan/{id}',[KendaraanController::class, 'show'])->name('tampilkankendaraan');
Route::post('/updatekendaraan/{id}',[KendaraanController::class, 'updatekendaraan'])->name('updatekendaraan');
Route::get('/deletekendaraan/{id}',[KendaraanController::class, 'deletekendaraan'])->name('deletekendaraan');

// Ke View Paket
Route::get('/datapaket',[PaketController::class, 'datapaket'])->name('datapaket');
Route::get('/tambahpaket',[PaketController::class, 'tambahpaket'])->name('tambahpaket');
Route::post('/insertdatapaket',[PaketController::class, 'insertdatapaket'])->name('insertdatapaket');
Route::get('/tampilkanpaket/{id}',[PaketController::class, 'tampilkanpaket'])->name('tampilkanpaket');
Route::post('/updatepaket/{id}',[PaketController::class, 'updatepaket'])->name('updatepaket');
Route::get('/deletepaket/{id}', [PaketController::class, 'deletepaket'])->name('deletepaket');

// Ke View Lokasi
Route::get('/datalokasi',[LokasiController::class, 'datalokasi'])->name('datalokasi');
Route::get('/tambahlokasi',[LokasiController::class, 'tambahlokasi'])->name('tambahlokasi');
Route::post('/insertdatalokasi',[LokasiController::class, 'insertdatalokasi'])->name('insertdatalokasi');
Route::get('/tampilkanlokasi/{id}',[LokasiController::class, 'tampilkanlokasi'])->name('tampilkanlokasi');
Route::post('/updatelokasi/{id}',[LokasiController::class, 'updatelokasi'])->name('updatelokasi');
Route::get('/deletelokasi/{id}',[LokasiController::class, 'deletelokasi'])->name('deletelokasi');


});


// Login
Route::get('/login',[LoginController::class, 'login'])->name('login');
Route::post('/loginproses',[LoginController::class, 'loginproses'])->name('loginproses');
// Register
Route::get('/register',[LoginController::class, 'register'])->name('register'); // Nampilin View nya
Route::post('/registeruser',[LoginController::class, 'registeruser'])->name('registeruser'); // Menyimpan datanya ke dalam database
// Logout
Route::get('/logout',[LoginController::class, 'logout'])->name('logout');



Route::group(['middleware' => ['auth','hakakses:admin,user']], function(){
// USER

    Route::get('/approvedata',[UserController::class, 'approveuser'])->name('approvedata');
    Route::post('/insertapprove',[UserController::class, 'insertapprove'])->name('insertapprove');
    Route::get('/insertapprove/ajax', [UserController::class, 'ajax']);
    Route::post('/insertapproev/{id}/terima', [UserController::class, 'terima']);
    Route::post('/insertapproev/{id}/tolak', [UserController::class, 'tolak']);
});




// Route::get('/approvedata',[UserController::class, 'approvedata'])->name('approvedata');
// Route::post('/updatedata/{id}',[AdminController::class, 'updatedata'])->name('updatedata');



// Route::get('/datapaket', function(){
//     return view('paket/datapaket');
// });
// Route::get('/tambahpaket', function(){
//     return view('paket/tambahpaket');
// });
// Route::get('/tampilpaket', function(){
//     return view('paket/tampilpaket');
// });


// Suuper Admin

Route::get('/sadmin',[SadminController::class, 'index'])->name('sadmin');
