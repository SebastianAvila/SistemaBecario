@include('../layouts/header')
@include('../layouts/sidebar')


<div class="container">

    <h2>Registro de alumnos </h2>

    <!-- <form class="row g-3 needs-validation" novalidate action="/alumnos" method="POST">
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
    </form> -->

    <form action="/alumno" action="/becario" method="POST">
        @csrf
        <h2>Datos becario</h2>

        <h3>ID personalizado</h3>
        <input type="text" name="id_UnicoAlum" id="id_UnicoAlum" require>
        <h3>Primer Nombre</h3>
        <input type="text" name="primerNomBeca" id="primerNomBeca" placeholder="Obligatorio*">

        <h3>Segundo Nombre</h3>
        <input type="text" name="segundoNomBeca" id="segundoNomBeca" placeholder="Opcional*">

        <h3>Primer Apellido</h3>
        <input type="text" name="apellidoPaterBeca" id="apellidoPaterBeca" placeholder="Obligatorio*">

        <h3>Segundo Apellido</h3>
        <input type="text" name="apellidoMaterBeca" id="apellidoMaterBeca" placeholder="Obligatorio*">

        <h3>Celular a 10 digitos</h3>
        <input type="text" name="celular" id="celular" placeholder="Lada + 7 numeros restantes">

        <h3>Correo Electronico</h3>
        <input type="text" name="correoElec" id="correoElec" placeholder="correo@gmail.com">

        <h3>usuario para su login </h3>
        <input type="text" name="usuarioBecario" id="usuarioBecario" placeholder=" datos+@becario.uady.mx">

        <h3>Password</h3>
        <input type="password" name="passwordBecario" id="passwordBecario">
        <br><br>

        <!-- consulta para poder obtener datos de una tabla e imprimirlos en el select  -->
        <?php
        $link = mysqli_connect("localHost", "root", "");
        if ($link) {
            mysqli_select_db($link, "sistemabecariolaravel");
        }
        ?>
        <h3>Plantel de procedencia</h3>

        <select name="id_UnicoPro" id="id_UnicoPro" require>
            <option name="id_UnicoPro" id="id_UnicoPro" value="0">Seleccione Uno</option>
            <option name="id_UnicoPro" id="id_UnicoPro" value="Practicas Profesionales">Practicas Profesionales</option>
            <option name="id_UnicoPro" id="id_UnicoPro" value="Servicio Social "> Servicio Social</option>
            <option name="id_UnicoPro" id="id_UnicoPro" value="Residencia "> Residencia</option>
        </select>

        <select name="clavePlantel" id="" require>
            <option value="">Planteles Disponibles</option>
            <?php
            $v = mysqli_query($link, "SELECT * FROM plantels");
            while ($planteles  = mysqli_fetch_row($v)) {
            ?>
                <option value="<?php echo $planteles[0] ?>"><?php echo $planteles[2] ?> </option>
            <?php } ?>
        </select>

        <input type="submit" value="Registrar" name="registraAlumno" class="btn btn-success btn-block">

    </form>

</div>
<script src="js/validation-form.js"></script>

@include('../layouts/footer')