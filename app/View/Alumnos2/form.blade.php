
@extends("plantillas/plantilla2")

@section("contenido1")

@include("Alumnos2/tabla")
@endsection

@section("contenido2")

    <h1>Insertar form</h1>
@endsection

@section("contenido3")
@if ($accion=='C')
<form action="{{route('Alumnos.store')}}" method="POST">
  <h1>Insertar form</h1>
  @endif
  @if ($accion=='E')
  <form action="{{route('Alumnos.update',$alumno->id)}}" method="POST">
    <h1>Actualizar</h1>
@endif
@if ($accion=='D')
<form action="{{route('Alumnos.eliminar', $alumno)}}" method="POST">
  <h1>ver y eliminar</h1>
@endif


  @csrf
  <div class="row mb-3">
    <label for="nombre"  class="col-sm-2 col-form-label">No. Ctrl</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nombre" name="noctrl" value="{{old('noctrl',$alumno->noctrl)}}" {{$des}}>
      @error("noctrl")
        <p class="text-danger">Error en {{$message}}</p>
      @enderror
    </div>
  </div>
    <div class="row mb-3">
      <label for="nombre"  class="col-sm-2 col-form-label">Nombre</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nombre" name="nombre" value="{{old('nombre',$alumno->nombre)}}" {{$des}}>
        @error("nombre")
          <p class="text-danger">Error en {{$message}}</p>
        @enderror
      </div>
    </div>

    <div class="row mb-3">
        <label for="apellidoP"  class="col-sm-2 col-form-label">Apellido Paterno</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nombre" name="apellidoP" value="{{old('apellidoP',$alumno->apellidoP)}}" {{$des}}>
          @error("apellidoP")
          <p class="text-danger">Error en {{$message}}</p>
        @enderror
        </div>
      </div>
      <div class="row mb-3">
        <label for="apellidoP"  class="col-sm-2 col-form-label">Apellido Materno</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nombre" name="apellidoM" value="{{old('apellidoM',$alumno->apellidoM)}}" {{$des}}>
          @error("apellidoM")
          <p class="text-danger">Error en {{$message}}</p>
        @enderror
        </div>
      </div>

      <div class="row mb-3">
        <label for="sexo" class="col-sm-3 col-form-label">Sexo</label>
        <div class="col-sm-9">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="sexo" id="sexoM" value="M"
                {{ old('sexo', $alumno->sexo) == 'M' ? 'checked' : '' }} {{$des}}>
            <label class="form-check-label" for="sexoM">
                Masculino
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="sexo" id="sexoF" value="F"
                {{ old('sexo', $alumno->sexo) == 'F' ? 'checked' : '' }} {{$des}}>
            <label class="form-check-label" for="sexoF">
                Femenino
            </label>
        </div>
          @error('sexo')
          <p class="text-danger">Error en: {{$message}}</p>
        @enderror

    
  
     

    
        <div class="row mb-3">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary">{{$txtbtn}}</button>
        </div>
      </div>
     

    
      
    
      
    
   

    
  </form>
  @endsection