<?php

use App\Livewire\Clientes\Create;
use App\Livewire\Clientes\Index;
use App\Livewire\Produto\ProdutoCreate;
use App\Livewire\Produto\ProdutoEdit;
use App\Livewire\Produto\ProdutoIndex;
use App\Livewire\Produto\ProdutoShow;
use Illuminate\Support\Facades\Route;

// antes da primeira barra ele sempre vai aparecer clientes e depois o nome depois da barra, tipo clientes/index
Route::prefix('clientes')->group(function(){
    Route::get('/', App\Livewire\Clientes\Index::class)->name('clientes.index');
    Route::get('/create', App\Livewire\Clientes\Create::class)->name('clientes.create');
    Route::get('/{id}', App\Livewire\Clientes\Show::class)->name('clientes.show');
    Route::get('/{id}/edit', App\Livewire\Clientes\Edit::class)->name('clientes.edit');
});

Route::prefix('produtos')->group(function () {
    Route::get('/', ProdutoIndex::class)->name('produtos.index');
    Route::get('/create', ProdutoCreate::class)->name('produtos.create');
    Route::get('/{id}', ProdutoShow::class)->name('produtos.show');
    Route::get('/{id}/edit', ProdutoEdit::class)->name('produtos.edit');
});