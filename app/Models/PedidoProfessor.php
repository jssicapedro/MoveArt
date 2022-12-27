<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedidoProfessor extends Model
{
    use HasFactory;

    protected $table= "pedidos_professores";

    protected $fillable = [
        'primeiro',
        'apelido',
        'telefone',
        'email',
        'data_nac',
        'modalidade',
    ];
}
