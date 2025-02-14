<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



//user
Route::post("/user/register",[UserController::class,'create'])->name("create");
Route::post("/user/login",[UserController::class,'login'])->name("login");


Route::group(['middleware' => 'auth:sanctum'], function(){

Route::get('/user', function (Request $request) {
return $request->user();
});
    
   //products
Route::post("/products/register",[ProductController::class,'create'])->name("create");
Route::get("/products/list",[ProductController::class,'index'])->name("index");
Route::get("/products/search/{id}",[ProductController::class,'show'])->name("show");
Route::delete("/products/destroy/{id}",[ProductController::class,'destroy'])->name("destroy");
Route::put("/products/edit/{id}",[ProductController::class,'update'])->name("update");
 });
    




