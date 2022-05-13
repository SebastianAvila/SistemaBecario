@include('../layouts/header')
@include('../layouts/sidebar')



<div class="container">

    <h2>Registro de alumnos </h2>

    <form class="row g-3 needs-validation" novalidate action="/alumnos" method="POST">
        @csrf

        <div class="col-md-4 position-relative">
            <label for="primerNomBeca" class="form-label">Primer Nombre </label>
            <input type="text" class="form-control" id="primerNomBeca" name="primerNomBeca" required>
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>

        <div class="col-md-4 position-relative">
            <label for="segundoNomBeca" class="form-label">Segundo nombre</label>
            <input type="text" class="form-control" id="segundoNomBeca" name="segundoNomBeca" required>
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>

        <div class="col-md-4 position-relative">
            <label for="apellidoPaterBeca" class="form-label">Apellido Paterno</label>
            <input type="text" class="form-control" id="apellidoPaterBeca" name="apellidoPaterBeca" required>
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>

        <div class="col-md-4 position-relative">
            <label for="apellidoMaterBeca" class="form-label">Apellido materno</label>
            <input type="text" class="form-control" id="apellidoMaterBeca" name="apellidoMaterBeca" required>
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>

        <div class="col-md-4 position-relative">
            <label for="apellidoMaterBeca" class="form-label">Numero de telefono </label>
            <input type="number" class="form-control" id="apellidoMaterBeca" name="apellidoMaterBeca" required>
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>

        <div class="col-md-4 position-relative">
            <label for="correoElec" class="form-label">Correo Electronico</label>
            <input type="correoElec" class="form-control" id="correoElec" name="" required>
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>

        <div class="col-md-4 position-relative">
            <label for="" class="form-label">Correo de registro</label>
            <input type="email" class="form-control" id="" name="" required>
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>

        <div class="col-md-4 position-relative">
            <label for="" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="" name="" required>
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>


        <div class="col-md-4 position-relative">
            <label for="" class="form-label">Usuario para el login</label>
            <input type="" class="form-control" id="" name="" required>
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>


        <div class="col-md-3 position-relative">
            <label for="" class="form-label">Plantel de procedencia</label>
            <select class="form-select" id="" required>
                <option selected disabled value="">Choose...</option>
                <option>...</option>
            </select>
            <div class="invalid-tooltip">
                Selecciona un plantel valido
            </div>
        </div>

        <div class="col-md-3 position-relative">
            <label for="" class="form-label">Servicio que prestara a la universidad</label>
            <select class="form-select" id="" required>
                <option selected disabled value="">Choose...</option>
                <option>...</option>
            </select>
            <div class="invalid-tooltip">
                Selecciona un plantel valido
            </div>
        </div>

        <div class="col-12">
            <button class="btn btn-primary" type="submit">Submit form</button>
            <a href="/alumno"><button class="btn btn-danger" type="button">Cancel</button></a>

        </div>
    </form>

</div>
<script src="js/validation-form.js"></script>

@include('../layouts/footer')