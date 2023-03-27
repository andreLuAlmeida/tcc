<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;

    protected $filllable = [
        'nome',
        'cpf',
        'data_nascimento',
        'numero_telefone',
        'cep',
        'rua',
        'numero_residencia',
        'bairro',
        'cidade',
        'estado',
        'email',
    ];

    protected $casts = [
        'nome' => 'string',
        'cpf' => 'string',
        'data_nascimento' => 'date',
        'numero_telefone' => 'string',
        'cep' => 'string',
        'rua' => 'string',
        'numero_residencia' => 'string',
        'bairro' => 'string',
        'cidade' => 'string',
        'estado' => 'string',
        'email' => 'string',
    ];

    public function secretarias(){
        return $this->hasMany(Secretaria::class, 'pessoa_id', 'id');
    }
    public function medicos(){
        return $this->hasMany(Medico::class, 'pessoa_id', 'id');
    }
    public function pacientes(){
        return $this->hasMany(Paciente::class, 'pessoa_id', 'id');
    }
    
}
