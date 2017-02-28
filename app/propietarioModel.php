<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class propietarioModel extends Model
{
     use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     
     */
    
     protected $table = 'propietarios';
    protected $fillable = [
        'id','usuario_cedula',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
       //
    ];
    public function Usuario()
    {
        return $this->hasOne('App\usuariosModel');
    }
    public function finca()
    {
        return $this->belongsTo('App\fincaModel');
    }

    public function registro()
    {
        return $this->belongsTo('App\registroASOCEBUModel');
    }
    

}
