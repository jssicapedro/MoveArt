<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PedidoProfessor extends Model
{
    use HasFactory, SoftDeletes;

    protected $table= "pedidos_professores";

    protected $fillable = [
        'primeiro',
        'apelido',
        'telefone',
        'email',
        'data_nac',
        'cv',
        'modalidade',
        'resposta',
    ];
}
