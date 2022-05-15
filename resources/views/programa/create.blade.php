@include('../layouts/header')
@include('../layouts/sidebar')

<div class="container">
    <h1>Registro Programas</h1>
    <form class="row g-3" action="/programas" method="POST">
        @csrf
        <div class="col-md-4">

            <h4>ID de personalizado</h4>
            <input type="text" class="form-control" name="id_UnicoPro" id="id_UnicoPro" aria-describedby="inputGroupPrepend" required>
            <h4>Tipo de Programa</h4>
            <select name="tipoProgra" id="tipoProgra" require>
                <option name="tipoProgra" id="tipoProgra" value="0">Seleccione Uno</option>
                <option name="tipoProgra" id="tipoProgra" value="Practicas Profesionales">Practicas Profesionales</option>
                <option name="tipoProgra" id="tipoProgra" value="Servicio Social "> Servicio Social</option>
                <option name="tipoProgra" id="tipoProgra" value="Residencia "> Residencia</option>
            </select>
            <h4>Fecha de incio del servicio del becario</h4>
            <input type="date" name="fechaInicioBeca" id="fechaInicioBeca">
            <h4>Fecha limite del servicio del becario</h4>
            <input type="date" name="fechaFinBeca" id="fechaFinBeca">
            <h4>Horas por cubrir</h4>
            <input type="text" class="form-control" name="horasCubrir" id="horasCubir">
            <h4>Seleccione de que plantel es este Programa</h4>

            <?php
            // Coneccion temporal a la basede datos 
            $link = mysqli_connect("localHost", "root", "");
            if ($link) {
                mysqli_select_db($link, "sistemabecariolaravel");
            }

            ?>

            <select name="clavePlantel" id="" require>
                <option value="">Planteles Disponibles</option>
                <?php
                $v = mysqli_query($link, "SELECT * FROM plantels");
                while ($planteles  = mysqli_fetch_row($v)) {
                ?>
                    <option value="<?php echo $planteles[0] ?>"><?php echo $planteles[2] ?> </option>
                <?php } ?>
            </select>


            <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit form</button>
            </div>
    </form>
</div>
@include('../layouts/footer')