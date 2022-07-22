<?php

use App\Http\Controllers\DeviceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\UserController;
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
    return view('home', ['title' => 'Home']);
})->name('home');

// Route::get('/', [HomeController::class, 'home']);

Route::get('/device', [DeviceController::class, 'index'])->name('device');
Route::get('/device/add', [DeviceController::class, 'add']);
Route::post('/device/store', [DeviceController::class, 'store']);
Route::get('/device/edit/{id}', [DeviceController::class, 'edit']);
Route::put('/device/update/{id}', [DeviceController::class, 'update']);
Route::get('/device/delete/{id}', [DeviceController::class, 'delete']);

Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');
Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');
Route::get('password', [UserController::class, 'password'])->name('password');
Route::post('password', [UserController::class, 'password_action'])->name('password.action');
Route::get('logout', [UserController::class, 'logout'])->name('logout');
