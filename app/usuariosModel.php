<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class usuariosModel extends Model
{
    
     use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     
     */
    
     protected $table = 'usuarios';
    protected $fillable = [
       'cedula','nombre','contrasenia','email','telefono','rol',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
       //
    ];
    public function propietario()
    {
        return $this->belongsTo('App\propietarioModel');
    }
}
