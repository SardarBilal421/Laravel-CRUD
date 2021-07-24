<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum','verified'])->group(function () {

    Route::get("ProductInputFoam/create", [\App\Http\Controllers\NewTableController::class, 'create'])
        ->name('product.create');
//->middleware(['auth:sanctum','verified']);
    Route::post("EnterDataInTable", [\App\Http\Controllers\NewTableController::class, 'store'])
        ->name('addNewProduct.store');
    Route::delete('deleteRecord/{newTable}', [\App\Http\Controllers\NewTableController::class, 'destroy'])
        ->name('deleteProduct.delete');
    Route::get("Product/{newTable}/edit", [\App\Http\Controllers\NewTableController::class, 'edit'])
        ->name('product.edit');
    Route::put("products/{newTable}", [\App\Http\Controllers\NewTableController::class, 'update'])
        ->name('addNewProduct.update');
    Route::get('NewTable/{newTable}',[\App\Http\Controllers\NewTableController::class,'show'])
        ->name('products.show');
});


    Route::get('NewTable',[\App\Http\Controllers\NewTableController::class,'index'])
        ->name('ViewProducts');




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
