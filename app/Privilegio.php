<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Privilegio extends Model
{
    protected $table = 'privilegios';

    public $timestamps = false;

    protected $fillable = ['descripcion'];

    /*
     * Relationships
     */
    public function usuarios(){
        return $this->belongsToMany('App\User');
    }
}
