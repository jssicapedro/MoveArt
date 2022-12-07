<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventoModalidade extends Model
{
    use HasFactory;

    protected $table= "eventos_modalidades"; /* diz qual é a tabela que vai está a ser chamada */ 

    protected $fillable = [
        'evento_id',
        'modalidade_id',
    ];
}
