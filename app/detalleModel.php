<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class detalleModel extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     
     */
    
     protected $table = 'detalles';
    protected $fillable = [
        'id','peso','ce','sa','observaciones',
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
    public function historia()
    {
        return $this->belongsTo('App\historialRevisionModel');
    }
}
