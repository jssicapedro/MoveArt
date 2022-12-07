<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'data',
        'localizacao',
        'foto',
        'descricao',
    ];

    public function modalidade(){
        return $this->belongsToMany(Modalidade::class, "eventos_modalidades");
    }
}
