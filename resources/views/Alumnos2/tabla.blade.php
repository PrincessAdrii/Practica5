@isset($mesaje)
    

<p>{{$mensaje}}</p>
@endisset
    <a
        name=""
        id="nuevo"
        class="btn btn-primary"
        href="{{route('Alumnos.create')}}"
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
                <th scope="col">No. Ctrl</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Apellido Materno</th>
                <th scope="col">Sexo</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead >
        <tbody class="table-group-divider">
            @foreach ($alumnos as $alumno)
            
      
            <tr class="">
                <td scope="row"> {{$alumno->noctrl}}</td>
                <td scope="row"> {{$alumno->nombre}}</td>
                <td> {{$alumno->apellidoP}}</td>
                <td> {{$alumno->apellidoM}}</td>
                <td> {{$alumno->sexo}}</td>
                <td>{{ $alumno->carrera->nombreCarrera }}</td>

                <td><a
                    name=""
                    id=""
                    class="btn btn-warning"
                    href="{{route('Alumnos.editar',$alumno->id)}}"
                    role="button"
                    >editar</a
                >
                </td>
                <td><a
                    name=""
                    id=""
                    class="btn btn-danger"
                    href="{{route('Alumnos.ver',$alumno->id)}}"
                    role="button"
                    >Eliminar</a
                >
                </td>
                <td><a
                    name=""
                    id=""
                    class="btn btn-primary"
                    href="{{route('Alumnos.ver',$alumno->id)}}"
                    role="button"
                    >Ver</a
                >
                </td>
            </tr>
            @endforeach
        </tbody>
    </table> 
    {{$alumnos->links() }}
   </div>
   
   
