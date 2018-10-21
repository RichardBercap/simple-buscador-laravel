<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    /* ----- con query scope se evita hacer consultas anidadas ---- */
    //scope
    //puede haber ,mas parametros minimo uno
    public function scopeName($query, $name)
    {
      if($name)
      {
        //todo lo que incluya la palabra en la variable $name
        //comillas dobles para aceptar variables
        return $query->where('name','LIKE',"%$name%");
      }

    }
    public function scopeEmail($query,$email)
    {
      if ($email)
        return $query->where('email','LIKE',"%$email%");
    }
    public function scopeBio($query,$bio)
    {
      if ($bio)
        return $query->where('email','LIKE',"%$bio%");
    }
}
