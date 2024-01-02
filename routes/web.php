<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/customers', [App\Http\Controllers\CustomersController::class, 'index']);
Route::get('/customers/create', [App\Http\Controllers\CustomersController::class, 'create']);
Route::post('/customers', [App\Http\Controllers\CustomersController::class, 'store']);
Route::get('/customers/edit/{id}', [App\Http\Controllers\CustomersController::class, 'edit']);
Route::patch('/customers/{id}', [App\Http\Controllers\CustomersController::class, 'update']);
Route::delete('/customers/{id}', [App\Http\Controllers\CustomersController::class, 'destroy']);

Route::get('/servis', [App\Http\Controllers\ServisController::class, 'index']);
Route::get('/servis/create', [App\Http\Controllers\ServisController::class, 'create']);
Route::post('/servis', [App\Http\Controllers\ServisController::class, 'store']);
Route::get('/servis/edit/{id}', [App\Http\Controllers\ServisController::class, 'edit']);
Route::patch('/servis/{id}', [App\Http\Controllers\ServisController::class, 'update']);
Route::delete('/servis/{id}', [App\Http\Controllers\ServisController::class, 'destroy']);

Route::get('/appointment', [App\Http\Controllers\AppointmentController::class, 'index']);
Route::get('/appointment/create', [App\Http\Controllers\AppointmentController::class, 'create']);
Route::post('appointment', [App\Http\Controllers\AppointmentController::class, 'store']);
Route::get('/appointment/edit/{id}', [App\Http\Controllers\AppointmentController::class, 'edit']);
Route::patch('/appointment/{id}', [App\Http\Controllers\AppointmentController::class, 'update']);
Route::delete('/appointment/{id}', [App\Http\Controllers\AppointmentController::class, 'destroy']);

Route::get('/users', [App\Http\Controllers\usersController::class, 'index']);
Route::get('/users/create', [App\Http\Controllers\usersController::class, 'create']);
Route::post('/users', [App\Http\Controllers\usersController::class, 'store']);
Route::get('/users/edit/{id}', [App\Http\Controllers\usersController::class, 'edit']);
Route::patch('/users/{id}', [App\Http\Controllers\usersController::class, 'update']);
Route::delete('/users/{id}', [App\Http\Controllers\usersController::class, 'destroy']);

Route::post('/users', [UserController::class, 'store']);