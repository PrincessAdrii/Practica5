
@extends("plantillas/plantilla2")

@section("contenido1")

@include("Materias/tabla")
@endsection

@section("contenido2")

    <h1>Insertar form</h1>
@endsection

@section("contenido3")
@if ($accion=='C')
<form action="{{route('materias.store')}}" method="POST">
  <h1>Insertar form</h1>
  @endif
  @if ($accion=='E')
  <form action="{{route('materias.update',$materia->id)}}" method="POST">
    <h1>Actualizar</h1>
@endif
@if ($accion=='D')
<form action="{{route('materias.eliminar', $materia)}}" method="POST">
  <h1>ver y eliminar</h1>
@endif


  @csrf
  
    
  <div class="row mb-3">
    <label for="nombremateria" class="col-sm-3 col-form-label">Nombre de Materia</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="nombreMateria" name="nombreMateria" 
               value="{{ old('nombreMateria', $materia->nombreMateria ?? '') }}" {{$des}}>
        @error('nombreMateria')
        <p class="text-danger">Error en: {{$message}}</p>
        @enderror
    </div>
</div>

<div class="row mb-3">
    <label for="nivel" class="col-sm-3 col-form-label">Nivel</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="nivel" name="nivel" 
               value="{{ old('nivel', $materia->nivel ?? '') }}" {{$des}}>
        @error('nivel')
        <p class="text-danger">Error en: {{$message}}</p>
        @enderror
    </div>
</div>

<!-- Campo para NombreMediano -->
<div class="row mb-3">
    <label for="nombremediano" class="col-sm-3 col-form-label">Nombre Mediano</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="nombreMediano" name="nombreMediano" 
               value="{{ old('nombreMediano', $materia->nombreMediano ?? '') }}" {{$des}}>
        @error('nombreMediano')
        <p class="text-danger">Error en: {{$message}}</p>
        @enderror
    </div>
</div>

<!-- Campo para NombreCorto -->
<div class="row mb-3">
    <label for="nombrecorto" class="col-sm-3 col-form-label">Nombre Corto</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="nombreCorto" name="nombreCorto" 
               value="{{ old('nombreCorto', $materia->nombreCorto ?? '') }}" {{$des}}>
        @error('nombreCorto')
        <p class="text-danger">Error en: {{$message}}</p>
        @enderror
    </div>
</div>

<!-- Campo para Modalidad -->
<div class="row mb-3">
    <label for="modalidad" class="col-sm-3 col-form-label">Modalidad</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="modalidad" name="modalidad" 
               value="{{ old('modalidad', $materia->modalidad ?? '') }}" {{$des}}>
        @error('modalidad')
        <p class="text-danger">Error en: {{$message}}</p>
        @enderror
    </div>
</div>

<!-- Seleccionar Retícula -->
<div class="row mb-3">
    <label for="reticula_id" class="col-sm-3 col-form-label">Seleccionar Retícula</label>
    <div class="col-sm-9">
        <select name="reticula_id" id="reticula_id" class="form-control" {{ $des }}>
            <option value="">-- Seleccione una Retícula --</option>
            @foreach ($reticulas as $reticula)
                <option value="{{ $reticula->id }}" {{ $reticula->id == $materia->reticula_id ? 'selected' : '' }}>
                    {{ $reticula->descripcion }}
                </option>
            @endforeach
        </select>
        @error('reticula_id')
        <p class="text-danger">Error en: {{$message}}</p>
        @enderror
    </div>
</div>






  

{{ $materias->links() }} 



    <button type="submit" class="btn btn-primary">{{$txtbtn}}</button>
    


    
  </form>
  @endsection