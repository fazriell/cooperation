<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MandatorySavingController;
use App\Http\Controllers\CustomerController;

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

Auth::routes();
  
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
Route::resource('roles', RoleController::class);
Route::resource('users', UserController::class);

Route::get('customer/create', [CustomerController::class, 'create'])->name('customer.create');
Route::post('customer/store', [CustomerController::class, 'store'])->name('customer.store');

Route::get('customer/{id}', [CustomerController::class, 'show'])->name('customer.show');
Route::get('customer', [CustomerController::class, 'index'])->name('customer.index');

Route::get('customer/edit/{id}', [CustomerController::class, 'edit'])->name('customer.edit');
Route::put('customer/update', [CustomerController::class, 'update'])->name('customer.update');
Route::delete('customer/destroy/{id}', [CustomerController::class, 'destroy'])->name('customer.destroy');

Route::resource('mandatory-saving', MandatorySavingController::class);


});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
