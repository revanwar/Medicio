<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeCotroller;
use App\Http\Controllers\AdminController;

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

Route::get('/', [HomeCotroller::class, 'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect', [HomeCotroller::class, 'redirect']);
Route::get('/product_details/{id}', [HomeCotroller::class, 'product_details']);
Route::get('/add_cart/{id}', [HomeCotroller::class, 'add_cart']);

Route::get('/catagory', [AdminController::class, 'catagory']);
Route::post('/add_catagory', [AdminController::class, 'add_catagory']);
Route::get('/delete_catogories/{id}', [AdminController::class, 'delete_catogories']);
Route::get('/product', [AdminController::class, 'product']);
Route::post('/add_product', [AdminController::class, 'add_product']);
Route::get('/show_product', [AdminController::class, 'show_product']);
Route::get('/delete_product/{id}', [AdminController::class, 'delete_product']);
Route::get('/edit_product/{id}', [AdminController::class, 'edit_product']);
Route::post('/update_product', [AdminController::class, 'update_product']);
