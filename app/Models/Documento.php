<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    use HasFactory;
    protected $fillable = [
        'conteudo',
        'data',
        'tipo',
    ];
    protected $casts = [
        'conteudo'=>'text',
        'data'=>'dateTime',
        'tipo' => 'string',
    ];
    public function medico(){
        return $this->belongsTo(Medico::class);
    }
    public function paciente(){
        return $this->belongsTo(Paciente::class);
    }
}
