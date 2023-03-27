<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    use HasFactory;

    protected $fillable = [
        'senha',
        'crm',
    ];

    protected $casts = [
        'senha' => 'string',
        'crm' => 'string',
    ];

    public function pessoa(){
        return $this->belongsTo(Pessoa::class);
    }
    public function documentos(){
        return $this->hasMany(Documento::class);
    }
    public function validas(){
        return $this->hasMany(Valida::class);
    }
}
