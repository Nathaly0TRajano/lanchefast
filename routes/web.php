<?php

use App\Livewire\Clientes\Create;
use App\Livewire\Clientes\Index;
use Illuminate\Support\Facades\Route;

// antes da primeira barra ele sempre vai aparecer clientes e depois o nome depois da barra, tipo clientes/index
Route::prefix('clientes')->group(function(){
    Route::get('/', App\Livewire\Clientes\Index::class)->name('clientes.index');
    Route::get('/create', App\Livewire\Clientes\Create::class)->name('clientes.create');
    Route::get('/{cliente}', App\Livewire\Clientes\Show::class)->name('clientes.show');
    Route::get('/{cliente}/edit', App\Livewire\Clientes\Edit::class)->name('clientes.edit');
});

