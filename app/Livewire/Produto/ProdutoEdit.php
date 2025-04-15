<?php

namespace App\Livewire\Produto;

use App\Models\Produto;
use Livewire\Component;

class ProdutoEdit extends Component
{
    public $produtoId;
    public $nome;
    public $ingredientes;
    public $valor; 

    protected $rules = [
        'nome' => 'required|min:3',
        'ingredientes' => 'required|min:7',
        'valor'=> 'required|decimal:2',
        'imagem'=> 'image|mimes:jpg,jpeg,png,gif|max:2048'
    ];

    protected $messages = [
        'nome.required' => 'O campo é obrigatório',
        'nome.min' => 'O campo precisa ter no mínimo 3 caracterers',
        'ingredientes.required' => 'O campo é obrigatório',
        'ingredientes.min' => 'O campo precisa ter no mínimo 7 caracteres',
        'valor.required' => 'O campo é obrigatório',
        'valor.decimal' => 'O campo precisa ter dois carateres depois do ponto'
        
    ];

    public function mount($id){
        $produto = Produto::find($id);

        $this->produtoId = $produto->id;
        $this->nome = $produto->nome;
        $this->ingredientes = $produto->ingredientes;
        $this->valor = $produto->valor;

    }

    public function salvar(){
        $produto = Produto::find($this->produtoId);

        $this->validate();
        $produto->nome = $this->nome;
        $produto->ingredientes = $this->ingredientes;
        $produto->valor = $this->valor;
        $produto->save();
        session()->flash('success', 'Dados do produto atualizadados');
    }

    public function render()
    {
        return view('livewire.produto.produto-edit');
    }
}
