<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Empleado extends Model
{
    use SoftDeletes;

    protected $table = 'empleados';

    protected $fillable = ['apellido_1', 'apellido_2', 'nombres', 'interno', 'user_id', 'cargo_id'];

    /*
     * Relationships
     */
    public function cargo(){
        return $this->belongsTo('App\Cargo');
    }

    public function sede(){
        return $this->belongsTo('App\Sede');
    }

    public function usuaio(){
        return $this->belongsTo('App\User');
    }
}
