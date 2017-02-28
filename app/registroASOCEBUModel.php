<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class registroASOCEBUModel extends Model
{
     use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     
     */
    
     protected $table = 'registro_asocebu';
    protected $fillable = [
        'id','fecha_emitido','propietario_id','animal_registro',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
       //
    ];

    public function registro()
    {
        return $this->belongsTo('App\propietarioModel');
    }
     public function animal()
    {
        return $this->hasOne('App\animalModel');
    }
}
