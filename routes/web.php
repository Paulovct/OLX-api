<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdController;


Route::middleware("auth:sanctum")->group(function(){
	Route::get("/user/me" , [UserController::class , "info"]);
	Route::post("/ads" , [AdController::class , "store"]);
	Route::delete("/ad/{id}", [AdController::class , "destroy"]);
	Route::post("/ad/{id}" , [AdController::class , "update"]);
});

Route::get("/states" , [StateController::class , "index"]);
Route::get("/categories" , [CategoryController::class , "index"]);

Route::post("/user/signup" , [UserController::class , "signup"]);
Route::post("/user/signin" , [UserController::class , "signin"]);

Route::get("/ads" , [AdController::class , "index"]);
Route::get("/ad/{id}" , [AdController::class , "show"]);


Route::get("/auth/error" , function(){
	return response()->json(["error" => "Unauthorized"]);
})->name("Unauthorized");




