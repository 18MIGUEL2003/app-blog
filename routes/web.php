<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

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
    return view('login');
});


Route::get('/register', function () {
    return view('registro');
});


// Route::resource('/datos', UserController::class);
Route::post('/registro', [UserController::class, 'create'])->name('user.create');

// Route::post('/datos', [UserController::class, 'create'])->name('register.create');

Route::post('/login', [UserController::class, 'verify'])->name('verify');

