@include('../layouts/header')
@include('../layouts/sidebar')

<div class="container">

    <table class=" table table-hover table-responsive">
        <h2>Programas registrados</h2>
        <p>Desglose de programas registrados en la institucion </p>
        <thead>
            <tr>
                <th>ID</th>
                <th>Clave Plantel</th>
                <th>Nombre Plantel</th>
                <th>Localidad</th>
                <th>Fecha de creacion </th>
                <th>Fecha de modificación</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($planteles as $plantel)
            <tr>
                <td> {{$plantel->id}} </td>
                <td> {{$plantel->clavePlantel}} </td>
                <td> {{$plantel->nombrePlantel}} </td>
                <td> {{$plantel->localidad}} </td>
                <td> {{$plantel->created_at}} </td>
                <td> {{$plantel-> updated_at}}</td>
                <td>
                    <form action="{{route ('planteles.destroy', $plantel->id)}}" method="post">
                    <a href="/planteles/{{$plantel->id}}/edit" class="btn btn-secondary">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"> Eliminar</button>
                    </form>
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