<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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

Route::get('/', [HomeController::class, 'index']);


Route::get('/redirect', [HomeController::class, 'redirect'] )->middleware('auth','verified');

Route::get('/view_category', [AdminController::class, 'view_category'] );
Route::post('/add_category', [AdminController::class, 'add_category'] );
Route::get('/delete_category/{id}', [AdminController::class, 'delete_category'] );

Route::post('/add_product_item', [AdminController::class, 'add_product_item'] );
Route::get('/view_orders', [AdminController::class, 'view_orders'] );
Route::get('/print/{id}', [AdminController::class, 'print'] );
Route::post('/update_product_item/{id}', [AdminController::class, 'update_product_item'] );

Route::get('/add_product', [AdminController::class, 'view_product'] );
Route::get('/show_product', [AdminController::class, 'show_product'] );
Route::get('/delete_product/{id}', [AdminController::class, 'delete_product'] );
Route::get('/update_product/{id}', [AdminController::class, 'update_product'] );

Route::get('/product_details/{id}', [HomeController::class, 'product_details'] );

Route::post('/add_cart/{id}', [HomeController::class, 'add_cart'] );
Route::get('/show_cart', [HomeController::class, 'show_cart'] );
Route::get('/remove_cart/{id}', [HomeController::class, 'remove_cart'] );

Route::get('/cash_order', [HomeController::class, 'cash_order'] );




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

