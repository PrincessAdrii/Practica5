
@extends("plantillas/plantilla2")

@section("contenido1")

@include("Carreras/tabla")
@endsection

@section("contenido2")

    <h1>Insertar form</h1>
@endsection

@section("contenido3")
@if ($accion=='C')
<form action="{{route('carreras.store')}}" method="POST">
  <h1>Insertar form</h1>
  @endif
  @if ($accion=='E')
  <form action="{{route('carreras.update',$carrera->id)}}" method="POST">
    <h1>Actualizar</h1>
@endif
@if ($accion=='D')
<form action="{{route('carreras.eliminar', $carrera)}}" method="POST">
  <h1>ver y eliminar</h1>
@endif


  @csrf
  
    
    <div class="row mb-3">
      <label for="nombreDepto" class="col-sm-3 col-form-label">Carrera</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombreDepto" name="nombreCarrera" value="{{old('nombreCarrera',$carrera->nombreCarrera)}}" {{$des}}>
        @error('nombreCarrera')
        <p class="text-danger">Error en: {{$message}}</p>
        @enderror
      </div>
    </div>
    <div class="row mb-3">
      <label for="nombreMediano" class="col-sm-3 col-form-label">Nombre Mediano</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombreMediano" name="nombreMediano" value="{{old('nombreMediano',$carrera->nombreMediano)}}" {{$des}}>
        @error('nombreMediano')
        <p class="text-danger">Error en: {{$message}}</p>
        @enderror
      </div>
    </div>

    <div class="row mb-3">
      <label for="nombreCorto" class="col-sm-3 col-form-label">Nombre Corto</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombreCorto" name="nombreCorto" value="{{old('nombreCorto',$carrera->nombreCorto)}}" {{$des}}>
        @error('nombreCorto')
        <p class="text-danger">Error en: {{$message}}</p>
        @enderror
      </div>
    </div>

    <label for="depto_id">Seleccionar Departamento</label>
    <select name="depto_id" id="depto_id" required>
        <option value="">-- Seleccione un Departamento --</option>
        @foreach ($deptos as $depto)
            <option value="{{ $depto->id }}" {{$des}}>{{ $depto->nombreDepto }}</option>
        @endforeach
    </select>

  

{{ $carreras->links() }} 



    <button type="submit" class="btn btn-primary">{{$txtbtn}}</button>
    
 

    
      
    
      
    
   

    
  </form>
  @endsection