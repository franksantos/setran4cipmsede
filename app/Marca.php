<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    //
    protected $fillable = ['id', 'nome'];
    public $timestamps = false;
    
    public function modelos(){
        return $this->hasMany('App\Modelo');
    }
}
