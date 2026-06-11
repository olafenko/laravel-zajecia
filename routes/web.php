<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InternalEventController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get("/", [HomeController::class,"index"]);
Route::get('/internal-events',[InternalEventController::class,'index']);
Route::get('/internal-events/edit/{id}',[InternalEventController::class,'editView']);
Route::post('/internal-events/update/{id}',[InternalEventController::class,'update']);
Route::get('/internal-events/create',[InternalEventController::class,'createView']);
Route::post('/internal-events/add-to-db',[InternalEventController::class,'addToDb']);
Route::post('/internal-events/delete/{id}',[InternalEventController::class,'delete']);

Route::get('/tasks',[TaskController::class,'index']);
Route::get('/tasks/edit/{id}',[TaskController::class,'editView']);
Route::post('/tasks/update/{id}',[TaskController::class,'update']);
Route::get('/tasks/create',[TaskController::class,'createView']);
Route::post('/tasks/add-to-db',[TaskController::class,'addToDb']);
Route::post('/tasks/delete/{id}',[TaskController::class,'delete']);
