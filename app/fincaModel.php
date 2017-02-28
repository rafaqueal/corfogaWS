<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class fincaModel extends Model
{
     use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     
     */
    
     protected $table = 'fincas';
    protected $fillable = [
        'id','nombre','region','propietario_id',
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
        return $this->hasOne('App\propietarioModel');
    }
    public function inspeccion()
    {
        return $this->belongsTo('App\inspeccionModel');
    }
}
