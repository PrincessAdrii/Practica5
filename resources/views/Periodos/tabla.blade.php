@isset($mesaje)
    

<p>{{$mensaje}}</p>
@endisset
    <a
        name=""
        id="nuevo"
        class="btn btn-primary"
        href="{{route('periodos.create')}}"
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
                <th scope="col">idPeriodo</th>
                <th scope="col">Periodo</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Inicio</th>
                <th scope="col">Fin</th>
               
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead >
        <tbody class="table-group-divider">
            @foreach ($periodos as $periodo)
            
      
            <tr class="">
                <td scope="row"> {{$periodo->id}}</td>
                <td scope="row"> {{$periodo->periodo}}</td>
                <td> {{$periodo->descripcion}}</td>
                <td> {{$periodo->fechaIni}}</td>
                <td> {{$periodo->fechaFin}}</td>
                
                <td><a
                    name=""
                    id=""
                    class="btn btn-warning"
                    href="{{route('periodos.editar',$periodo->id)}}"
                    role="button"
                    >editar</a
                >
                </td>
                <td><a
                    name=""
                    id=""
                    class="btn btn-danger"
                    href="{{route('periodos.ver',$periodo->id)}}"
                    role="button"
                    >Eliminar</a
                >
                </td>
                <td><a
                    name=""
                    id=""
                    class="btn btn-primary"
                    href="{{route('periodos.ver',$periodo->id)}}"
                    role="button"
                    >Ver</a
                >
                </td>
            </tr>
            @endforeach
        </tbody>
    </table> 
    {{$periodos->links() }}
   </div>
   
   
