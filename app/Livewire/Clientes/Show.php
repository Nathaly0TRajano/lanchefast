<?php

namespace App\Livewire\Clientes;

use App\Models\Cliente;
use Livewire\Component;

class Show extends Component
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
            $this->clienteId = $cliente->clienteId;
            $this->nome = $cliente->nome;
            $this->endereco = $cliente->endereco;
            $this->telefone = $cliente->telefone;
            $this->email = $cliente->email;
            $this->cpf = $cliente->cpf;
    }

    public function render()
    {
        return view('livewire.clientes.show');
    }
}
