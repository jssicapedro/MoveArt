<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModalidade extends Model
{
    use HasFactory;
    protected $table= "users_modalidades"; /* diz qual é a tabela que vai está a ser chamada */ 

    protected $fillable = [
        'user_id',
        'modalidade_id',
    ];
}
