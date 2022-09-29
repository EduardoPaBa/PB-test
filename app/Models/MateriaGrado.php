<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MateriaGrado extends Model
{
    use HasFactory;
    protected $fillable = [
        'grado_id',
        'materia_id',
    ];
    public function grado()
    {
        return $this->belongsTo(Grado::class);
    }
    public function materia()
    {
        return $this->belongsTo(Materia::class);
    }
}
