<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;

Route::get('/', [ProdutosController::class, 'index']);


Route::get('/produtos/novo/create', [ProdutosController::class, 'create']);

Route::post('/produtos/novo', [ProdutosController::class, 'store'])->name('registrar_produto');

Route::get('produtos/ver{id}', [ProdutosController::class, 'show']);

Route::get('produtos/editar/{id}', [ProdutosController::class, 'edit'])->name('alterar_produto');