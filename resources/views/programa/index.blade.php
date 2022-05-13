@include('../layouts/header')
@include('../layouts/sidebar')



<div class="container">
    <h2>Programas registrados</h2>
    <p>Desglose de programas registrados en la institucion </p>
    <table class="table table-hover table-responsive">
        <thead>
            <tr>
                <th>ID</th>
                <th>ID de programa</th>
                <th>Tipo de programa</th>
                <th>Fecha de inicio</th>
                <th>Fecha de fin</th>
                <th>Clave Plantel </th>
                <th>Fecha de registro </th>
                <th>Horas a cubrir </th>
                <th>Acciones</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($programas as $programa)
            <tr>
                <td> {{$programa->id}} </td>
                <td> {{$programa->id_UnicoPro}} </td>
                <td> {{$programa->tipoProgra}} </td>
                <td> {{$programa->fechaInicioBeca}} </td>
                <td> {{$programa->fechaFinBeca}} </td>
                <td> {{$programa->clavePlantel}} </td>
                <td> {{$programa->fechaRegistro}} </td>
                <td> {{$programa->horasCubrir}} </td>
                <td>
                    <a href="" class="btn btn-secondary">Editar</a>
                    <button class="btn btn-danger"> Eliminar</button>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="seleccionAdmin">
        <button type="button" class="btn btn-outline-success btn-lg">Regresar</button>
    </a>

</div>



@include('../layouts/footer')