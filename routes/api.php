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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/cliente', [clienteController::class,'index']);
Route::post('/cliente', [clienteController::class,'store']);
Route::put('/cliente/{id}', [clienteController::class,'update']);
Route::delete('/cliente/{id}', [clienteController::class,'destroy']);


Route::get('/automovil', [automovilController::class,'index']);
Route::post('/automovil', [automovilController::class,'store']);
Route::put('/automovil/{id}', [automovilController::class,'update']);
Route::delete('/automovil/{id}', [automovilController::class,'destroy']);


Route::get('/marca', [marcaController::class,'index']);
Route::post('/marca', [marcaController::class,'store']);
Route::put('/marca/{id}', [marcaController::class,'update']);
Route::delete('/marca/{id}', [marcaController::class,'destroy']);
