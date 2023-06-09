<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;
    public function pessoa(){
        return $this->belongsTo(Pessoa::class);
    }
    public function documentos(){
        return $this->hasMany(Documento::class);
    }
}
