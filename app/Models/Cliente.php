<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'endereco',
        'telefone',
        'cpf',
        'email',
        'senha'
    ];

    // O campo senha e o campo token não vão ser exibidos quando procurarmos com find por exemplo
    protected $hidden = [
        'senha',
        'remeber_token'
    ];

    public function pedidos(){
        // return $this->hasMany(Pedido::class);
    }

    
}
