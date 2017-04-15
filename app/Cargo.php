<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $table = 'cargos';

    public $timestamps = false;

    protected $fillable = ['descripcion'];

    /*
     * Relationships
     */
    public function empleados(){
        return $this->hasMany('App\Empleado');
    }
}
