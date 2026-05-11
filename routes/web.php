<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemPerdidoController;
use App\Http\Controllers\AdministracaoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/itensperdidos',[ItemPerdidoController::class, 'index']);

Route::get('/admin', [AdministracaoController::class, 'index']);