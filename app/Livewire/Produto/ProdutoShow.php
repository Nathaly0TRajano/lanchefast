<?php

namespace App\Livewire\Produto;

use App\Models\Produto;
use Livewire\Component;

class ProdutoShow extends Component
{
    public $produto;
    public $produtoId;
    public $nome;
    public $ingredientes;
    public $valor;
    public $imagem;

    public function mount($id)
    {
        $produto = Produto::find($id);

        $this->produtoId = $produto->id;
        $this->nome = $produto->nome;
        $this->ingredientes = $produto->ingredientes;
        $this->valor = $produto->valor;
    }

    public function getImagemUrl()
    {
        // Verifica se o produto tem imagem
        if ($this->produto->imagem) {
            return asset('storage/images' . $this->produto->imagem);
        }

        return null;
    }

    public function render()
    {
        return view('livewire.produto.produto-show');
    }
}
