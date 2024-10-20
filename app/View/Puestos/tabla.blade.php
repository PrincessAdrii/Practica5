

<a
name=""
id="nuevo"
class="btn btn-primary"
href="{{route('puestos.create')}}"
role="button"
>Nuevo</a
>

{{--  --}}
<div
class="table-responsive-md"
>
<table
class="table  table-hover table-striped custom-table"
>
<thead class="table-dark ">
    <tr>
        <th scope="col">id</th>
        <th scope="col">IdPuesto</th>
        <th scope="col">Nombre</th>
        <th scope="col">Puesto</th>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col"></th>
    </tr>
</thead >
<tbody class="table-group-divider">
    @foreach ($puestos as $puesto)
    

    <tr class="">
        <td scope="row"> {{$puesto->id}}</td>
        <td scope="row"> {{$puesto->idPuesto}}</td>
        <td scope="row"> {{$puesto->nombrePuesto}}</td>
        <td> {{$puesto->tipo}}</td>
       
        <td><a
            name=""
            id=""
            class="btn btn-warning"
            href="{{route('puestos.editar',$puesto->id)}}"
            role="button"
            >editar</a
        >
        </td>
        <td><a
            name=""
            id=""
            class="btn btn-danger"
            href="{{route('puestos.ver',$puesto->id)}}"
            role="button"
            >Eliminar</a
        >
        </td>
        <td><a
            name=""
            id=""
            class="btn btn-primary"
            href="{{route('puestos.ver',$puesto->id)}}"
            role="button"
            >Ver</a
        >
        </td>
    </tr>
    @endforeach
</tbody>
</table> 
{{$puestos->links() }}
</div>


