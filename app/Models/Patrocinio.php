<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patrocinio extends Model
{
    use HasFactory;

    protected $table= "patrocinios";

    protected $fillable = [
        'nome',
        'email',
        'valor',
        'telefone',
        'mensagem',
        'resposta',
        'estado',
    ];
}
