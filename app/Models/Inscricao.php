<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscricao extends Model
{
    use HasFactory;

    protected $table= "inscricoes";

    protected $fillable = [
        'data_inicio',
        'data_fim',
        'type_insc',
        'modalidade_id',
        'user_id',
    ];
}
