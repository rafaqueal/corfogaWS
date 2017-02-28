<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class historialRevisionModel extends Model
{
   use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     
     */
    
     protected $table = 'historial_animales';
    protected $fillable = [
        'id','animal_registro','detalle_id','numero_inspeccion',
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
        return $this->hasOne('App\animalModel');
    }
    public function detalle()
    {
        return $this->belongsTo('App\detalleModel');
    }
}
