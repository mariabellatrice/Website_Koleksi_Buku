<?php

use App\Http\Controllers\bukuController;
use App\Http\Controllers\regisController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\homeController;

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

Route::get('/registrasi', [regisController::class, 'index']);
Route::POST('/registrasi', [regisController::class, 'store']);

Route::get('/login', [loginController::class, 'index']);
Route::POST('/login', [loginController::class, 'auth']);


Route::get('/', [homeController::class, 'index']);
Route::get('/tambahbuku', [bukuController::class, 'index']);

Route::POST('/tambahbuku', [bukuController::class, 'store']);

Route::get('/updatebuku/{id}', [bukuController::class, 'edit']);

Route::post('/updatebuku/{id}', [bukuController::class, 'update']);

Route::get('/deletebuku/{id}', [bukuController::class, 'destroy']);


