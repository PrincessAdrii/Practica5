
@extends("plantillas/plantilla2")

@section("contenido1")

@include("Reticulas/tabla")
@endsection

@section("contenido2")

    <h1>Insertar form</h1>
@endsection

@section("contenido3")
@if ($accion=='C')
<form action="{{route('reticulas.store')}}" method="POST">
  <h1>Insertar form</h1>
  @endif
  @if ($accion=='E')
  <form action="{{route('reticulas.update',$reticula->id)}}" method="POST">
    <h1>Actualizar</h1>
@endif
@if ($accion=='D')
<form action="{{route('reticulas.eliminar', $reticula)}}" method="POST">
  <h1>ver y eliminar</h1>
@endif


  @csrf
  
    
  <div class="row mb-3">
    <label for="descripcion" class="col-sm-3 col-form-label">Descripcion</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{old('nombre',$reticula->descripcion)}}" {{$des}}>
      @error('descripcion')
      <p class="text-danger">Error en: {{$message}}</p>
      @enderror
    </div>
  </div>
  <div class="row mb-3">
    <label for="fechav" class="col-sm-3 col-form-label">Fecha en Vigor</label>
    <div class="col-sm-9">
        <input type="date" class="form-control" id="fechav" name="fechav" value="{{ old('fechav', $reticula->fechav ?? '') }}" {{$des}}>
        @error('fechav')
        <p class="text-danger">Error en: {{$message}}</p>
        @enderror
    </div>
</div>

<label for="carrera_id">Seleccionar Carrera</label>

<select name="carrera_id" id="carrera_id" class="form-control" {{ $des }}>
  
    <option value="">-- Seleccione una Carrera --</option>
    @foreach ($carreras as $carrera)
        <option value="{{ $carrera->id }}" {{ $carrera->id == $reticula->carrera_id ? 'selected' : '' }}>
            {{ $carrera->nombreCarrera }}
        </option>
    @endforeach
</select>




  

{{ $reticulas->links() }} 



    <button type="submit" class="btn btn-primary">{{$txtbtn}}</button>
    


    
  </form>
  @endsection