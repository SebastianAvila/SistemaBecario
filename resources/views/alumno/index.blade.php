@include('../layouts/header')
@include('../layouts/sidebar')

<div class="container">

    <table class=" table table-hover table-responsive">
        <h2>Alumnos registrados</h2>
        <p>Desglose de alumnos registrados en la institucion </p>
        <thead>
            <tr>
                <th>ID</th>
                <th>ID Alumno </th>
                <th>Primer Nombre </th>
                <th>Segundo Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Num Celular </th>
                <th>Correo Electronico</th>
                <th>Horas Cubiertas</th>
                <th>Servicio Proporcionado </th>
                <th>Plantel de procedencia</th>
                <th>Fecha de registro </th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alumnos as $alumno)
            <tr>
                <td> {{$alumno->id}} </td>
                <td> {{$alumno->id_UnicoAlum}} </td>
                <td> {{$alumno->primerNomBeca}} </td>
                <td> {{$alumno->segundoNomBeca}} </td>
                <td> {{$alumno->apellidoPaterBeca}} </td>
                <td> {{$alumno->apellidoMaterBeca}} </td>
                <td> {{$alumno->celular}} </td>
                <td> {{$alumno->correoElec}} </td>
                <td> {{$alumno->horasCubiertas}} </td>
                <td> {{$alumno->id_UnicoPro}} </td>
                <td> {{$alumno->clavePlantel}} </td>
                <td> {{$alumno->fechaRegistro}} </td>
                <td>

                <form action="{{route('alumnos.destroy', $alumno->id)}}" method="post">

                </form>
                    <a href="/alumno/{{$alumno->id}}/edit" class="btn btn-secondary">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"> Eliminar</button>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="seleccionAdmin">
        <button type="button" class="btn btn-outline-success btn-lg">Regresar</button>
    </a>
    <a href="alumno/create">
        <button
         type="button" class="btn btn-outline-success btn-lg">Crear</button>
    </a>
</div>

@include('../layouts/footer')