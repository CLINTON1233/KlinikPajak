<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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
Route::get('/login_webpajak', [LoginController::class, 'index']);

// Register Routes
Route::get('/register_webpajak', [RegisterController::class, 'index']);

// Dashboard Routes
Route::get('/dashboard_webpajak', 'DashboardController@index')->name('dashboard_webpajak');

//Home Web Pajak Routes
Route::get('/home_webpajak', 'HomewebpajakController@index')->name('home_webpajak');

