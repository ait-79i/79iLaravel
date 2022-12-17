<?php

use App\Http\Controllers\ProduitController;
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
    return view('welcome');
});

// test session

Route::match(['get', 'post'], '/login', [ProduitController::class,'loginForm']);

///! connect with database  
//* AddProduct to database
Route::match(['get','post'],'/addProduct',[ProduitController::class,'addProduct']);

//* get Products from database
Route::get('/products',[ProduitController::class,'getProducts']);

//! delete product

Route::get("/products/delete/{id}", [ProduitController::class, "deleteProduct"])->name("deletePro");


//! update Product

Route::match(['post', 'get'], "/products/update/{id}", [ProduitController::class, "updateProduct"])->name("updatePro");