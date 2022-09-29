<div>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}

    {{$materias}}
    {{$nombreMateri}}



    <!-- Button trigger modal -->
    <br>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#materia">
    Ingrese la materia
  </button>
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#grasdo">
    Ingrese el grado
  </button>
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#alummno">
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


  <div class="modal fade" wire:ignore.self id="alummno" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            </div>
        </div>

        <div class="modal-body">
            <div class="form-group">
                <label for="">Nombre</label>
                <input type="text" wire:model="nombre" class="form-control" id="" aria-describedby="" placeholder="nombre">
            </div>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label for="">Edad</label>
                <input type="text" wire:model="edad" class="form-control" id="" aria-describedby="" placeholder="edad">
            </div>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label for="">Sexo</label>
                <input type="text" wire:model="sexo" class="form-control" id="" aria-describedby="" placeholder="sexo">
            </div>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label for="">Grado</label>
                <input type="text" wire:model="grado_id" class="form-control" id="" aria-describedby="" placeholder="grado">
            </div>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label for="">Observacion</label>
                <input type="text" wire:model="observacion" class="form-control" id="" aria-describedby="" placeholder="observacion">
            </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" wire:click="saveGrad()">Save changes</button>
        </div>
      </div>
    </div>
  </div>

</div>
