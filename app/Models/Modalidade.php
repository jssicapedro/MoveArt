<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modalidade extends Model
{
    use HasFactory;

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
