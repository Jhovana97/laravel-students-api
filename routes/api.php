<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/students', [StudentController::class, 'index']);

Route::get('/students/{id}', function () {
    return ' obteniendo un estudiante';
});


Route::post('/students', [StudentController::class, 'store']);

Route::put('/students/{id}', function () {
    return "actualizando estudiante";
});

Route::delete('/students/{id}', function () {
    return "eliminando estudiante";
});
