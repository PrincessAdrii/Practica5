@isset($mesaje)
    

<p>{{$mensaje}}</p>
@endisset
    <a
        name=""
        id="nuevo"
        class="btn btn-primary"
        href="{{route('reticulas.create')}}"
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
                <th scope="col">Id</th>
                <th scope="col">Descripcion</th>
                <th scope="col">fecha Vigor</th>
                <th scope="col">Carrera</th>
               
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead >
        <tbody class="table-group-divider">
            @foreach ($reticulas as $reticula)
            
      
            <tr class="">
                <td scope="row"> {{$reticula->id}}</td>
                <td scope="row"> {{$reticula->descripcion}}</td>
                <td> {{$reticula->fechav}}</td>
                <td> {{$reticula->carrera->nombreCarrera }}</td>
                
                <td><a
                    name=""
                    id=""
                    class="btn btn-warning"
                    href="{{route('reticulas.editar',$reticula->id)}}"
                    role="button"
                    >editar</a
                >
                </td>
                <td><a
                    name=""
                    id=""
                    class="btn btn-danger"
                    href="{{route('reticulas.ver',$reticula->id)}}"
                    role="button"
                    >Eliminar</a
                >
                </td>
                <td><a
                    name=""
                    id=""
                    class="btn btn-primary"
                    href="{{route('reticulas.ver',$reticula->id)}}"
                    role="button"
                    >Ver</a
                >
                </td>
            </tr>
            @endforeach
        </tbody>
    </table> 
    {{$reticulas->links() }}
   </div>
   
   
