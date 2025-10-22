<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PerguntaController;

Route::get('/', [PerguntaController::class, 'inicio'])
    ->name('perguntas.inicio');

    Route::get('/responder', [PerguntaController::class, 'responder'])
    ->name('responder');
