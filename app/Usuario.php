<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //protected $connection = 'sqlsrv';

    protected $table = 'usuario';


    protected $fillable = [
        'nome', 'login', 'senha', 'email',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'senha',
    ];

    //sobrescrita de método que retorna o campo password para senha
    public function getAuthPassword()
    {

       return $this->senha;

    }
    
}
