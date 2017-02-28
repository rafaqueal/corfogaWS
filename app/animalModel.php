<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class animalModel extends Model
{
       use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     
     */
    
     protected $table = 'animales';
    protected $fillable = [
        'registro','codigo','nombre','raza','fecha_nacimiento','sexo','origen_reproductivo','fecha_destete','foto',
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
        return $this->belongsTo('App\detalleInspeccionModel');
    }
    public function geanologia()
    {
        return $this->belongsTo('App\genealogiaModel');
    }
     public function historia()
    {
        return $this->belongsTo('App\historialRevisionModel');
    }
    public function registro()
    {
        return $this->belongsTo('App\registroASOCEBUModel');
    }
}
