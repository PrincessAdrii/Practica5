

<a
name=""
id="nuevo"
class="btn btn-primary"
href="{{route('plazas.create')}}"
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
       
        <th scope="col">Id plaza</th>
        <th scope="col">Nombre</th>
        
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col"></th>
    </tr>
</thead >
<tbody class="table-group-divider">
    @foreach ($plazas as $plaza)
    

    <tr class="">
        <td scope="row"> {{$plaza->id}}</td>
        <td scope="row"> {{$plaza->nombrePlaza}}</td>
        
    
       
        <td><a
            name=""
            id=""
            class="btn btn-warning"
            href="{{route('plazas.editar',$plaza->id)}}"
            role="button"
            >editar</a
        >
        </td>
        <td><a
            name=""
            id=""
            class="btn btn-danger"
            href="{{route('plazas.ver',$plaza->id)}}"
            role="button"
            >Eliminar</a
        >
        </td>
        <td><a
            name=""
            id=""
            class="btn btn-primary"
            href="{{route('plazas.ver',$plaza->id)}}"
            role="button"
            >Ver</a
        >
        </td>
    </tr>
    @endforeach
</tbody>
</table> 
{{$plazas->links() }}
</div>


