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
        //dd($this->nombreMateri);
        $newValue = Materia::create([
            'nombre' => $this->nombreMateri,
        ]);
        $newValue->save();
        $this->clear();
        return session()->flash("success", "This is success message");
    }
    public function saveGrad(){
        $newValue = Grado::create([
            'nombre' => $this->nombregrado,
        ]);
        $newValue->save();
        $this->clear();
        return session()->flash("success", "This is success message");
    }

    public function clear()
    {
        $this->nombreMateri="";
        $this->nombregrado="";
    }
}
