<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    //La tabla con la cual el modelo se relaciona:
    protected $table = "regions";
    //La clave primaria de la tabla
    protected $primaryKey = "region_id";
    //Anular los campos de auditoria
    public $timestamps = false;
    use HasFactory;

    //Relacion entre region y paises 1:M
    public function paises(){
        return $this->hasMany(Country::class, 'region_id');
    }
}
