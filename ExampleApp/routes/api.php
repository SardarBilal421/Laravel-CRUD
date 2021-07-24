<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//PUBLIC ROUTES
Route::get('New_Model/{new_modal}',[\App\Http\Controllers\ModelNameController::class,'show'])
    ->name('products.show');
Route::get("New_Model", [\App\Http\Controllers\ModelNameController::class, 'index'])
    ->name('product.create');
Route::post('register',[\App\Http\Controllers\AuthController::class ,'register'])
    ->name('register');
Route::post('login',[\App\Http\Controllers\AuthController::class ,'login'])
    ->name('login');

//private Routes

Route::middleware(['auth:sanctum'])->group(function (){
Route::post('logout',[\App\Http\Controllers\AuthController::class,'logout'])->name('logout');
Route::delete('New_Model/{new_modal}', [\App\Http\Controllers\ModelNameController::class, 'destroy'])
    ->name('deleteProduct.delete');
Route::put("New_Model/{new_modal}", [\App\Http\Controllers\ModelNameController::class, 'update'])
    ->name('addNewProduct.update');
Route::get('New_Model/{new_modal}',[\App\Http\Controllers\ModelNameController::class,'show'])
    ->name('products.show');
});


//Route::resource('tasks',\App\Http\Controllers\ModelNameController::class);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
