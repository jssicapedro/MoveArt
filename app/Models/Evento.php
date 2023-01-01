<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
   protected $table = 'eventos';
   protected $primaryKey = 'id';
   protected $fillable = ['nome', 'data', 'localizacao', 'foto', 'descricao'];
}


