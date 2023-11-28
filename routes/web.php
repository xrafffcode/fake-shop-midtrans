<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name("home");
Route::get('/product/{id}', [HomeController::class, 'show'])->name("product");

Route::post('/checkout', [CheckoutController::class, 'process'])->name("checkout-process");

Route::get('/transactions', [TransactionController::class, 'index'])->name("transactions");


Auth::routes();
