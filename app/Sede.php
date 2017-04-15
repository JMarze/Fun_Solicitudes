<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    protected $table = 'sedes';

    public $timestamps = false;

    protected $fillable = ['descripcion'];

    /*
     * Relationships
     */
    public function empleados(){
        return $this->hasMany('App\Empleado');
    }
}
