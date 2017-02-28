<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class inspeccionModel extends Model
{
    
     use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     
     */
    
     protected $table = 'inspecciones';
    protected $fillable = [
		'id','fecha','finca_id','num_visita',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
       //
    ];
    public function finca()
    {
        return $this->hasMany('App\fincaModel');
    }
public function detalle()
    {
        return $this->belongsTo('App\detalleInspeccionModel');
    }
}
