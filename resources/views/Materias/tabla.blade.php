@isset($mesaje)
    

<p>{{$mensaje}}</p>
@endisset
    <a
        name=""
        id="nuevo"
        class="btn btn-primary"
        href="{{route('materias.create')}}"
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
                <th scope="col">ID</th>
                <th scope="col">Nombre Materia</th>
                <th>nivel</th>
                <th>NombreMediano</th>
                <th>NombreCorto</th>
                <th>Modalidad</th>
                <th>Reticula</th>
                <th></th>
                <th></th>
                <th></th>

            </tr>
        </thead >
        <tbody class="table-group-divider">
            @foreach ($materias as $materia)
                <tr class="">
                    <td scope="row">{{ $materia->id }}</td>
                    <td>{{ $materia->nombreMateria }}</td>
                    <td>{{ $materia->nivel }}</td>
                    <td>{{ $materia->nombreMediano }}</td>
                    <td>{{ $materia->nombreCorto }}</td>
                    <td>{{ $materia->modalidad}}</td>
                    <td>{{ $materia->reticula->descripcion }}</td>

                
                <td><a
                    name=""
                    id=""
                    class="btn btn-warning"
                    href="{{route('materias.editar',$materia->id)}}"
                    role="button"
                    >editar</a
                >
                </td>
                <td><a
                    name=""
                    id=""
                    class="btn btn-danger"
                    href="{{route('materias.ver',$materia->id)}}"
                    role="button"
                    >Eliminar</a
                >
                </td>
                <td><a
                    name=""
                    id=""
                    class="btn btn-primary"
                    href="{{route('materias.ver',$materia->id)}}"
                    role="button"
                    >Ver</a
                >
                </td>
            </tr>
            @endforeach
        </tbody>
    </table> 
    {{$materias->links() }}
   </div>
   
   
