<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/students', function () {
    return ' obteniendo lista de  estudiantes';
});

Route::get('/students/{id}', function () {
    return ' obteniendo un estudiante';
});


Route::post('/students', function () {
    return 'creando estudiantes';
});

Route::put('/students/{id}', function () {
    return "actualizando estudiante";
});

Route::delete('/students/{id}', function () {
    return "eliminando estudiante";
});
