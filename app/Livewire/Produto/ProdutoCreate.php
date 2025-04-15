<?php

namespace App\Livewire\Produto;

use App\Models\Produto;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProdutoCreate extends Component
{
    use WithFileUploads; 
    
    public $nome;
    public $ingredientes;
    public $valor;
    public $imagem;

    protected $rules = [
        'nome' => 'required|min:3',
        'ingredientes' => 'required|min:7',
        'valor' => 'required|decimal:2',
        'imagem' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048'
    ];

    protected $messages = [
        'nome.required' => 'O campo é obrigatório',
        'nome.min' => 'O campo precisa ter no mínimo 3 caracterers',
        'ingredientes.required' => 'O campo é obrigatório',
        'ingredientes.min' => 'O campo precisa ter no mínimo 7 caracteres',
        'valor.required' => 'O campo é obrigatório',
        'valor.decimal' => 'O campo precisa ter dois carateres depois do ponto',
        'imagem.image' => 'Este campo precisa ser uma imagem',
        'imagem.mimes' => 'Esta imagem precisa ser do tipo jpg, jpeg, png ou gif',
        'imagem.max' => 'A imagem só pode ter até no maxímo 2048'

    ];
    public function render()
    {
        return view('livewire.produto.produto-create');
    }

    public function store()
    {
        $this->validate();

        if ($this->imagem) {
            $imagemText = $this->imagem->store('images', 'public');

            Produto::create([
                'nome' => $this->nome,
                'ingredientes' => $this->ingredientes,
                'valor' => $this->valor,
                'imagem' => $imagemText ?? null,
            ]);

            return redirect()->route('produtos.index');


            session()->flash('success', 'Cadastro Realizado');
        }
    }
}
