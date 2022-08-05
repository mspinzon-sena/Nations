<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //La tabla con la cual el modelo se relaciona:
    protected $table = "countries";
    //La clave primaria de la tabla
    protected $primaryKey = "country_id";
    //Anular los campos de auditoria
    public $timestamps = false;
    use HasFactory;  
    
    //Relacion inversa , es decir M:1 (belongsTo) entre Pais y Región
    public function region(){
        return $this->belongsTo(Region::class,'region_id');
    }
}
