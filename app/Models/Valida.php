<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Valida extends Model
{
    use HasFactory;
    public function medico(){
        return $this->belongsTo(Medico::class);
    }
    public function farmacia(){
        return $this->belongsTo(Farmacia::class);
    }
}
