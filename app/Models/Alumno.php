<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;
    protected $fillable = [
        'codigo',
        'nombre',
        'edad',
        'sexo',
        'grado_id',
        'observacion',
    ];
    public function grado()
    {
        return $this->belongsTo(Grado::class);
    }
    

}
