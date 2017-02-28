<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class detalleInspeccionModel extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     
     */
    
     protected $table = 'detalles_inspecciones';
    protected $fillable = [
        'detalle_id','inspeccion_id','animal_codigo',('comentario',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
       //
    ];
    
public function detalle()
    {
        return $this->hasOne('App\detalleModel');
    }

    public function inspeccion()
    {
        return $this->hasOne('App\inspeccionModel');
    }

    public function animal()
    {
        return $this->hasOne('App\animalModel');
    }
}
