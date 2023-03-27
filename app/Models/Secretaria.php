<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secretaria extends Model
{
    use HasFactory;

    protected $fillable = [
        'senha',
    ];

    protected $casts = [
        'senha' => 'string',
    ];

    public function pessoa(){
        return $this->belongsTo(Pessoa::class);
    }
}
