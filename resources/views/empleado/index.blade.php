{{-- Mostrar lista de empleados --}}
<a href="{{url('empleado/create')}}">Registrar Nuevo empleado</a>

<table class="table table-light">
    {{-- cabezera --}}
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Puesto</th>
            <th>Email</th>
            <th>Acciones</th>
            
        </tr>
    </thead>
    {{-- Cuerpo --}}
    <tbody>
        @foreach ($empleados as $empleado)
        <tr>
            <td>{{$empleado->id}}</td>
            <td>{{$empleado->nombre}}</td>
            <td>{{$empleado->apellido}}</td>
            <td>{{$empleado->puesto}}</td>
            <td>{{$empleado->email}}</td>
            <td><a href="{{url('/empleado/'.$empleado->id.'/edit')}}">Editar</a> 
                | 
                <form action="{{ url('/empleado/'.$empleado->id) }}" method="post">
                    @csrf
                    {{method_field('DELETE')}}
                    <input type="submit" onclick="return confirm('¿Quieres Borrar?')" value="Borrar">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
