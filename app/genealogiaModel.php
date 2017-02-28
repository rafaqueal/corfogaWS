<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class genealogiaModel extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     
     */
    
     protected $table = 'genealogia';
    protected $fillable = [
		'id','animal_registro','registro_padre','registro_madre',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
       //
    ];
    public function animal()
    {
         return $this->hasMany('App\animalModelo');
    }
    public function progenitores()
    {
         return $this->hasMany('App\propietarioModel');
    }
   
}
