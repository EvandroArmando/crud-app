<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/test', function (Request $request) {
    return "amor";
});

Route::post("/products/register",[ProductController::class,'create'])->name("create");
Route::get("/products/list",[ProductController::class,'index'])->name("index");
Route::get("/products/search/{id}",[ProductController::class,'show'])->name("show");
Route::delete("/products/destroy/{id}",[ProductController::class,'destroy'])->name("destroy");
Route::put("/products/edit/{id}",[ProductController::class,'update'])->name("update");
