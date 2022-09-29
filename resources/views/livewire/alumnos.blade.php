<div>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}

    {{-- {{$materias}}
    {{$nombreMateri}} --}}
    {{-- <br>
    {{$alumnos}}
    <br>
    <br>
    {{$mateGrad}}
    <br> --}}



    <!-- Button trigger modal -->
    <br>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#materia">
    Ingrese la materia
  </button>
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#grasdo">
    Ingrese el grado
  </button>

  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#alummno">
    gestion de las materias del grado
  </button>


  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#mateGrad">
    Ingrese el Alumno
  </button>

  <!-- Modal -->
  <div class="modal fade" wire:ignore.self id="materia" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Registre su  materia</h5>
          <button type="button"  class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label for="">Nombre</label>
                <input type="text" wire:model="nombreMateri" class="form-control" id="" aria-describedby="" placeholder="nombre materia">

            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" wire:click="saveMater()">Save changes</button>
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade" wire:ignore.self id="grasdo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Registre el grado</h5>
          <button type="button"  class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label for="">Nombre</label>
                <input type="text" wire:model="nombregrado" class="form-control" id="" aria-describedby="" placeholder="nombre grado">

            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" wire:click="saveGrad()">Save changes</button>
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade" wire:ignore.self id="mateGrad" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Registre el Alumno</h5>
          <button type="button"  class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label for="">Codigo</label>
                <input type="text" wire:model="codigo" class="form-control" id="" aria-describedby="" placeholder="codigo">
                @error('codigo') <span class="mt-1 error" style="color: red">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="modal-body">
            <div class="form-group">
                <label for="">Nombre</label>
                <input type="text"  wire:model="nombre" class="form-control" id="" aria-describedby="" placeholder="nombre">
                @error('nombre') <span class="mt-1 error" style="color: red">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label for="">Edad</label>
                <input type="text" wire:model="edad" class="form-control" id="" aria-describedby="" placeholder="edad">
                @error('edad') <span class="mt-1 error" style="color: red">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label for="">Sexo</label>
                <input type="text" wire:model="sexo" class="form-control" id="" aria-describedby="" placeholder="sexo">
                @error('sexo') <span class="mt-1 error" style="color: red">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="modal-body">

            <select name="" id=" "wire:model="grado_id">
                <option value="">Escoja el grado</option>
                @foreach ($grados as $grado)
                    <option value="{{ $grado->id }}">
                        {{ $grado->nombre }}
                    </option>
                @endforeach

            </select>
            @error('grado_id') <span class="mt-1 error" style="color: red">{{ $message }}</span> @enderror
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label for="">Observacion</label>
                <input type="text" wire:model="observacion" class="form-control" id="" aria-describedby="" placeholder="observacion">
            </div>
            @error('observacion') <span class="mt-1 error" style="color: red">{{ $message }}</span> @enderror
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" wire:click="saveAlum()">Save changes</button>
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade" wire:ignore.self id="alummno" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Gestione</h5>
          <button type="button"  class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            POR FALTA DE TIEMPO HICE UN SEEDER
            POR FAVOR EJECUTAR ESE COMANDO
            <br>
            <br>
            php artisan migrate:fresh --seed
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" wire:click="saveMater()">Save changes</button>
        </div>
      </div>
    </div>
  </div>



  <div class="col-8">
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Alumno</th>
            <th scope="col">Grado</th>
            <th scope="col">Materias</th>
          </tr>
        </thead>
        <tbody>


            @foreach ($alumnos as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->nombre}}</td>
                <td>{{$item->grado->nombre}}</td>
                <td>
                    @foreach ($mateGrad as $mateGra)
                    {{-- {{ $item->grado_id}} {{$mateGra->$grado_id}} --}}
                        @if ( $item->grado_id == $mateGra->grado_id)
                            {{$mateGra->materia->nombre}},
                        @endif
                    @endforeach
                </td>
            </tr>
            @endforeach

        </tbody>
      </table>
  </div>




</div>
