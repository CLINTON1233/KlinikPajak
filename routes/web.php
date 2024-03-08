<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\RegisterKonsultanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomewebpajakController;

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

//Route::get('/', function () {
    //return view('welcome');
//});

// Route::get('/', [HomeController::class, 'index']);
// Route::get('contact', [HomeController::class, 'contact']);

// Route::get('/welcome', function () {
//     return view('welcome');
// });
// Route::get('/user/{id}', function ($id) {
//     return 'User dengan ID ' . $id;
// });

// Route::prefix('admin')->group(function () {
//     Route::get('/dashboard', function () {
//         return 'Admin Dashboard';
//     });

//     Route::get('/users', function () {
//         return 'Admin Users';
//     });
// });

// Route::get('/listbarang/{id}/{nama}', function($id, $nama){
//     return view('list_barang', compact('id', 'nama'));
// });

// Route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);

// Login Routes
Route::get('/loginadmin_webpajak', [LoginAdminController::class, 'index']); // sesuaikan dengan method yang ada di LoginController

Route::get('/logout_webpajak', [LogoutController::class, 'index']); 

// Register Routes
Route::get('/register_konsultan', [RegisterController::class, 'index']);

// Dashboard Routes
Route::get('/dashboard_webpajak',  [DashboardController::class, 'index']);

//Home Web Pajak Routes
Route::get('/home_webpajak', [HomewebpajakController::class, 'index']);

