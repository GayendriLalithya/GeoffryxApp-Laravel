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

Route::get('/register', function () {
    return view('register');
});

Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/complete_profile/{user_id}', [UserProfileController::class, 'edit'])->name('complete_profile');
Route::get('/dashboard/admin', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/dashboard/customer', [CustomerController::class, 'index'])->name('customer.dashboard');


