@isset($mesaje)
    

<p>{{$mensaje}}</p>
@endisset
    <a
        name=""
        id="nuevo"
        class="btn btn-primary"
        href="{{route('carreras.create')}}"
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
                <th scope="col">Nombre</th>
                <th scope="col">Nombre Mediano</th>
                <th scope="col">NombreCorto</th>
               
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead >
        <tbody class="table-group-divider">
            @foreach ($carreras as $carrera)
            
      
            <tr class="">
                <td scope="row"> {{$carrera->id}}</td>
                <td scope="row"> {{$carrera->nombreCarrera}}</td>
                <td> {{$carrera->nombreMediano}}</td>
                <td> {{$carrera->nombreCorto}}</td>
                
                <td><a
                    name=""
                    id=""
                    class="btn btn-warning"
                    href="{{route('carreras.editar',$carrera->id)}}"
                    role="button"
                    >editar</a
                >
                </td>
                <td><a
                    name=""
                    id=""
                    class="btn btn-danger"
                    href="{{route('carreras.ver',$carrera->id)}}"
                    role="button"
                    >Eliminar</a
                >
                </td>
                <td><a
                    name=""
                    id=""
                    class="btn btn-primary"
                    href="{{route('carreras.ver',$carrera->id)}}"
                    role="button"
                    >Ver</a
                >
                </td>
            </tr>
            @endforeach
        </tbody>
    </table> 
    {{$carreras->links() }}
   </div>
   
   
