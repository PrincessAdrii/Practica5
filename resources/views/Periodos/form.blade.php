
@extends("plantillas/plantilla2")

@section("contenido1")

@include("Periodos/tabla")
@endsection

@section("contenido2")

    <h1>Insertar form</h1>
@endsection

@section("contenido3")
@if ($accion=='C')
<form action="{{route('periodos.store')}}" method="POST">
  <h1>Insertar form</h1>
  @endif
  @if ($accion=='E')
  <form action="{{route('periodos.update',$periodo->id)}}" method="POST">
    <h1>Actualizar</h1>
@endif
@if ($accion=='D')
<form action="{{route('periodos.eliminar', $periodo)}}" method="POST">
  <h1>ver y eliminar</h1>
@endif


  @csrf
  {{-- <div class="row mb-3">
    <label for="nombre"  class="col-sm-2 col-form-label">Id Periodo</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nombre" name="idPeriodo" value="{{old('idDepto',$periodo->idPeriodo)}}" {{$des}}>
      @error("idPeriodo")
        <p class="text-danger">Error en {{$message}}</p>
      @enderror
    </div>
  </div> --}}
  <div class="row mb-3">
    <label for="periodo" class="col-sm-2 col-form-label">Periodo</label>
    <div class="col-sm-10">
        <select class="form-select" id="periodo" name="periodo" {{$des}}>
            <option value="">Seleccione un periodo</option>
            <option value="Ago-Dic 2023" {{ old('periodo', $periodo->periodo) == 'Ene-Jun 2024' ? 'selected' : '' }}>Ago-Dic 2023</option>
            <option value="Ene-Jun 2024" {{ old('periodo', $periodo->periodo) == 'Ago-Dic 2024' ? 'selected' : '' }}>Ene-Jun 2024</option>
            <option value="Ago-Dic 2025" {{ old('periodo', $periodo->periodo) == 'Ene-Jun 2025' ? 'selected' : '' }}>Ago-Dic 2025</option>
        </select>
        @error('periodo')
            <p class="text-danger">Error en {{ $message }}</p>
        @enderror
    </div>
</div>



    <div class="row mb-3">
        <label for="apellidoP"  class="col-sm-2 col-form-label">Descripcion</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nombre" name="descripcion" value="{{old('descripcion',$periodo->descCorta)}}" {{$des}}>
          @error("descripcion")
          <p class="text-danger">Error en {{$message}}</p>
        @enderror
        </div>
      </div>
      <div class="row mb-3">
        <label for="fechav" class="col-sm-3 col-form-label">Fecha en Vigor</label>
        <div class="col-sm-9">
            <input type="date" class="form-control" id="fechav" name="fechaIni" value="{{ old('fechaIni', $reticula->fechaIni ?? '') }}" {{$des}}>
            @error('fechaIni')
            <p class="text-danger">Error en: {{$message}}</p>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
      <label for="fechav" class="col-sm-3 col-form-label">Fecha en Vigor</label>
      <div class="col-sm-9">
          <input type="date" class="form-control" id="fechav" name="fechaFin" value="{{ old('fechaFin', $reticula->fechaFin ?? '') }}" {{$des}}>
          @error('fechaFin')
          <p class="text-danger">Error en: {{$message}}</p>
          @enderror
      </div>
  </div>



    
        <div class="row mb-3">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary">{{$txtbtn}}</button>
        </div>
      </div>
     

    
      
    
      
    
   

    
  </form>
  @endsection