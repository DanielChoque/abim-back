<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\asociadoController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/student', [asociadoController::class, 'index']);

Route::get('/student/{id}', function(){
    return 'obtener un studiante Student';
});

Route::post('/student', function(){
    return 'Crear Student';
});

Route::put('/student/{id}', function(){
    return 'actualizar Student';
});

Route::delete('/student/{id}', function(){
    return 'borrar Student';
});