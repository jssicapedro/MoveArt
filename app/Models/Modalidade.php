<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Modalidade extends Model 
{
    use HasFactory;
    /* use SoftDeletes; */

    protected $fillable = [
        'modalidade',
        'descricao',
        'foto_desc',
        'valor_mensal',
        'foto_mensal',
        'valor_anual',
        'foto_anual',
        'foto_horario',
        'foto_banner',
    ];


    /* associação de muitos para muitos */
    public function profs(){
        return $this->belongsToMany(User::class, "users_modalidades");
    }

    public function eventos(){
        return $this->belongsToMany(Evento::class, "eventos_modalidades");
    }
}
