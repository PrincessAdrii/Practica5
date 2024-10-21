
@extends("plantillas/plantilla2")

@section("contenido1")

@include("Deptos/tabla")
@endsection

@section("contenido2")

    <h1>Insertar form</h1>
@endsection

@section("contenido3")
@if ($accion=='C')
<form action="{{route('deptos.store')}}" method="POST">
  <h1>Insertar form</h1>
  @endif
  @if ($accion=='E')
  <form action="{{route('deptos.update',$depto->id)}}" method="POST">
    <h1>Actualizar</h1>
@endif
@if ($accion=='D')
<form action="{{route('deptos.eliminar', $depto)}}" method="POST">
  <h1>ver y eliminar</h1>
@endif


  @csrf
  {{-- <div class="row mb-3">
    <label for="idDepto" class="col-sm-3 col-form-label">Id Depto</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="idDepto" name="idDepto" value="{{old('idDepto',$depto->idDepto)}}" {{$des}}>
      @error('idDepto')
      <p class="text-danger">Error en: {{$message}}</p>
      @enderror
    </div>
  </div> --}}
    
    <div class="row mb-3">
      <label for="nombreDepto" class="col-sm-3 col-form-label">Nombre del Departamento</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombreDepto" name="nombreDepto" value="{{old('nombreDepto',$depto->nombreDepto)}}" {{$des}}>
        @error('nombreDepto')
        <p class="text-danger">Error en: {{$message}}</p>
        @enderror
      </div>
    </div>
    <div class="row mb-3">
      <label for="nombreMediano" class="col-sm-3 col-form-label">Nombre Mediano</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombreMediano" name="nombreMediano" value="{{old('nombreMediano',$depto->nombreMediano)}}" {{$des}}>
        @error('nombreMediano')
        <p class="text-danger">Error en: {{$message}}</p>
        @enderror
      </div>
    </div>

    <div class="row mb-3">
      <label for="nombreCorto" class="col-sm-3 col-form-label">Nombre Corto</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombreCorto" name="nombreCorto" value="{{old('nombreCorto',$depto->nombreCorto)}}" {{$des}}>
        @error('nombreCorto')
        <p class="text-danger">Error en: {{$message}}</p>
        @enderror
      </div>
    </div>

    <button type="submit" class="btn btn-primary">{{$txtbtn}}</button>
    
 

    
      
    
      
    
   

    
  </form>
  @endsection