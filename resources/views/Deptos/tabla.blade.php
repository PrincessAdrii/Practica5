@isset($mesaje)
    

<p>{{$mensaje}}</p>
@endisset
    <a
        name=""
        id="nuevo"
        class="btn btn-primary"
        href="{{route('deptos.create')}}"
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
                <th scope="col">idDepto</th>
                <th scope="col">Nombre</th>
                <th scope="col">Nombre Mediano</th>
                <th scope="col">NombreCorto</th>
               
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead >
        <tbody class="table-group-divider">
            @foreach ($deptos as $depto)
            
      
            <tr class="">
                <td scope="row"> {{$depto->id}}</td>
                <td scope="row"> {{$depto->nombreDepto}}</td>
                <td> {{$depto->nombreMediano}}</td>
                <td> {{$depto->nombreCorto}}</td>
                
                <td><a
                    name=""
                    id=""
                    class="btn btn-warning"
                    href="{{route('deptos.editar',$depto->id)}}"
                    role="button"
                    >editar</a
                >
                </td>
                <td><a
                    name=""
                    id=""
                    class="btn btn-danger"
                    href="{{route('deptos.ver',$depto->id)}}"
                    role="button"
                    >Eliminar</a
                >
                </td>
                <td><a
                    name=""
                    id=""
                    class="btn btn-primary"
                    href="{{route('deptos.ver',$depto->id)}}"
                    role="button"
                    >Ver</a
                >
                </td>
            </tr>
            @endforeach
        </tbody>
    </table> 
    {{$deptos->links() }}
   </div>
   
   
