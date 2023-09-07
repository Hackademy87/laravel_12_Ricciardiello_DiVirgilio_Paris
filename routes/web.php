<?php

use App\Http\Controllers\ProductController;
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

Route::get('/',[ProductController::class, 'welcome'])->name('welcome');

Route::get('product/create',[ProductController::class, 'create'])->name('product.create');

Route::post('product/store',[ProductController::class, 'store'])->name('product.store');

Route::get('product/category/{category}',[ProductController::class,'indexByCategory'])->name('product.byCategory');

Route::get('product/gender/{gender}/{category}',[ProductController::class,'filterBygender'])->name('product.gender');