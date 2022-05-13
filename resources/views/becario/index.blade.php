@include('../layouts/header')
@include('../layouts/sidebar')

<div class="container">

    <h1>Hola Mundo index becario cuenta</h1>

    <table class="table  mt-4">
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
    </table>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
            </tr>
        </tbody>
    </table>
</div>

@include('../layouts/footer')