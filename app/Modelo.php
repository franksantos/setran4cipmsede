<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    //
    protected $fillable = ['id', 'nome', 'marca_id'];
    
    public function marcas(){
        return $this->belongsTo('App\Marca');
    }
}
