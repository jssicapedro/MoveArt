<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'foto',
        'primeiro',
        'apelido',
        'email',
        'data_nasc',
        'cc',
        'nif',
        'genero',
        'perfil',
        'password',       
    ];/* colunas de preenchimento possivel */

/* select * from = user:: */

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function modalidade(){
        return $this->belongsToMany(Modalidade::class, "users_modalidades");
    }   

    public function deletemodalidade(){
        return $this->hasMany(UserModalidade::class, 'user_id', 'id');
    }  
}
