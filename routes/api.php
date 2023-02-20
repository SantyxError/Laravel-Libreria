<?php

use App\Http\Controllers\Api\EditorialController;
use App\Http\Controllers\Api\EscritorController;
use App\Http\Controllers\Api\LibroController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::apiResource('libros', LibroController::class);
Route::apiResource('escritores', EscritorController::class);
Route::apiResource('editoriales', EditorialController::class);


Route::post('login', [LoginController::class, 'login']);
