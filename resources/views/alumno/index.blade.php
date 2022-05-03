@include('../layouts/header')

<div class="container">

    <h1>Hola Mundo</h1>
    <table class="table table-dark table-striped mt-4 table-responsive">
        <thead>
            <tr>
                <th scope="col">ID Alumno </th>
                <th scope="col">Primer Nombre </th>
                <th scope="col">Segundo Nombre</th>
                <th scope="col">Apellido Paterno</th>
                <th scope="col">Apellido Materno</th>
                <th scope="col">Num Celular </th>
                <th scope="col">Correo Electronico</th>
                <th scope="col">Servicio Proporcionado </th>
                <th scope="col">Plantel de procedencia</th>
                <th scope="col">Fecha de registro </th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
           @foreach ($alumnos as $alumno)
           <tr>
                <td> {{$alumno->id_UnicoAlumn}} </td>
                <td> {{$alumno->primerNomBeca}} </td>
                <td> {{$alumno->segundoNomBeca}} </td>
                <td> {{$alumno->apellidoPaterBeca}} </td>
                <td> {{$alumno->apellidoMaterBeca}} </td>
                <td> {{$alumno->celular}} </td>
                <td> {{$alumno->correoElec}} </td>
                <td> {{$alumno->horasCubiertas}} </td>
                <td> {{$alumno->id_UnicoPro}} </td>
                <td> {{$alumno->id_UnicoPro}} </td>
                <td> {{$alumno->clavePlantel}} </td>
                <td> {{$alumno->fechaRegistro}} </td>
                <td>
                    <a href="" class="btn btn-secondary">Editar</a>
                    <button class="btn btn-danger"> Eliminar</button>

                </td>

           </tr>
           @endforeach
        </tbody>
    </table>
</div>

@include('../layouts/footer')