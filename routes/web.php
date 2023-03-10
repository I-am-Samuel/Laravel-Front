<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/entrar', function () {
    return view('entrar');
});

Route::get('/cadastro', function () {
    return view('cadastro');
});

Route::get('/recuperacao', function () {
    return view('recuperacao');
});

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/tabelaturma', function () {
    return view('table');
});

Route::get('/tabelaAluno', function () {
    return view('tableAluno');
});