<?php

namespace App\Livewire\Clientes;

use App\Models\Cliente;
use Livewire\Component;

class Edit extends Component
{
    public $clienteId;
    public $nome;
    public $endereco;
    public $telefone;
    public $email;
    public $cpf;
    public $senha;
    

    public function mount($id){
        $cliente = Cliente::find($id);

        $this->clienteId = $cliente->id;
        $this->nome = $cliente->nome;
        $this->endereco = $cliente->endereco;
        $this->telefone = $cliente->telefone;
        $this->email = $cliente->email;
        $this->cpf = $cliente->cpf;
        $this->senha = $cliente->senha;

    }

    public function salvar(){
        $cliente = Cliente::find($this->clienteId);

        $cliente->nome = $this->nome;
        $cliente->endereco = $this->endereco;
        $cliente->telefone = $this->telefone;
        $cliente->email = $this->email;
        $cliente->cpf = $this->cpf;
        $cliente->senha = $this->senha;
        $cliente->save();
        session()->flash('success', 'Dados do cliente atualizadados');
    }

    public function render()
    {
        return view('livewire.clientes.edit');
    }
}
