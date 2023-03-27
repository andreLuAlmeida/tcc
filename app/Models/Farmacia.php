<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Farmacia extends Model
{
    use HasFactory;

    protected $filllable = [
        'nome',
        'cnpj',
        'numero_telefone',
        'cep',
        'rua',
        'numero_comercio',
        'bairro',
        'cidade',
        'estado',
        'email',
        'senha',
    ];

    protected $casts = [
        'nome' => 'string',
        'cnpj' => 'string',
        'numero_telefone' => 'string',
        'cep' => 'string',
        'rua' => 'string',
        'numero_comercio' => 'string',
        'bairro' => 'string',
        'cidade' => 'string',
        'estado' => 'string',
        'email' => 'string',
        'senha' => 'string',
    ];
    public function validas(){
        return $this->hasMany(Valida::class);
    }
}
