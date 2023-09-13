<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [AuthController::class, 'loginIndex'])->name('login.index');
Route::post('login', [AuthController::class, 'loginStore'])->name('login');
Route::get('register', [AuthController::class, 'registerIndex'])->name('register.index');
Route::post('register/store', [AuthController::class, 'registerStore'])->name('register');

Route::get('products', [ProductController::class, 'index'])->name('product.index');
Route::get('product/detail', [ProductController::class, 'show'])->name('product.show');
