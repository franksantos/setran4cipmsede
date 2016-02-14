<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AitImportFromExcel extends Model
{
    //
    protected $table = "aits";
    protected $fillable = array('veiculos_id', 'infracao_id', 'numero_ait', 'data', 'situacao', 'motivo_cancel', 'obs', 'cidade', 'updated_at', 'created_at');
}
