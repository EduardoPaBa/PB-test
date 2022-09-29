<?php

namespace App\Http\Livewire;
use App\Models\Materia;
use App\Models\Grado;
use App\Models\Alumno;
use App\Models\MateriaGrado;

use Livewire\Component;

class Alumnos extends Component
{
    public $materias, $grados, $alumnos, $mateGrad,
            $nombreMateri, $nombregrado,
            $codigo, $nombre, $edad, $sexo, $grado_id, $observacion
            ;
    protected $rules = [

        'codigo' => 'required',
        'nombre' => 'required',
        'edad' => 'required',
        'sexo' => 'required',
        'grado_id' => 'required',
        'observacion' => 'required',

    ];
    public function mount() {
        $this->materias=Materia::All();
        $this->grados=Grado::All();
        $this->alumnos=Alumno::All();
        $this->mateGrad=MateriaGrado::All();
    }
    public function render()
    {
        return view('livewire.alumnos');
    }
    public function saveMater(){
        $this->validate();
        //dd($this->nombreMateri);
        $newValue = Materia::create([
            'nombre' => $this->nombreMateri,
        ]);
        $newValue->save();
        $this->clear();
        return session()->flash("success", "This is success message");
    }
    public function saveGrad(){
        $this->validate();
        $newValue = Grado::create([
            'nombre' => $this->nombregrado,
        ]);
        $newValue->save();
        $this->clear();
        return session()->flash("success", "This is success message");
    }

    public function saveAlum(){
        $this->validate();
        $newValue = Alumno::create([

            'codigo' => $this->codigo,
            'nombre' => $this->nombre,
            'edad' => $this->edad,
            'sexo' => $this->sexo,
            'grado_id' => $this->grado_id,
            'observacion' => $this->observacion,
        ]);
        //dd("test");
        $newValue->save();
        $this->clear();
        $this->alumnos=Alumno::All();
        return session()->flash("success", "This is success message");
    }

    public function clear()
    {
        $this->nombreMateri="";
        $this->nombregrado="";
        $this->codigo="";
        $this->nombre="";
        $this->edad="";
        $this->sexo="";
        $this->grado_id="";
        $this->observacion="";
    }
}
