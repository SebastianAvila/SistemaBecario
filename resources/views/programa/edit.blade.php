@include('../layouts/header')
<form class="row g-3" action="/programas/{{$programa->id}}" method="POST">
    @csrf
    @method('PUT')

    <div class="col-md-4">

        <h4>ID de personalizado</h4>
        <input type="text" class="form-control" name="id_UnicoPro" id="id_UnicoPro" aria-describedby="inputGroupPrepend" required value="{{$programa->id_UnicoPro}}">
        <h4>Tipo de Programa</h4>
        <select name="tipoProgra" id="tipoProgra" require>
            <option name="tipoProgra" id="tipoProgra" value="{{$programa->tipoProgra}}">Seleccionado anteriormente <?php echo $programa->tipoProgra  ?></option>
            <option name="tipoProgra" id="tipoProgra" value="Practicas Profesionales">Practicas Profesionales</option>
            <option name="tipoProgra" id="tipoProgra" value="Servicio Social "> Servicio Social</option>
            <option name="tipoProgra" id="tipoProgra" value="Residencia "> Residencia</option>
        </select>
        <h4>Fecha de incio del servicio del becario</h4>
        <input type="date" name="fechaInicioBeca" id="fechaInicioBeca" value="{{$programa->fechaInicioBeca}}">
        <h4>Fecha limite del servicio del becario</h4>
        <input type="date" name="fechaFinBeca" id="fechaFinBeca" value="{{$programa->fechaFinBeca}}">
        <h4>Horas por cubrir</h4>
        <input type="text" class="form-control" name="horasCubrir" id="horasCubir" value="{{$programa->horasCubrir}}">
        <h4>Seleccione de que plantel es este Programa</h4>

        <?php
        // Coneccion temporal a la basede datos 
        $link = mysqli_connect("localHost", "root", "");
        if ($link) {
            mysqli_select_db($link, "sistemabecariolaravel");
        }

        ?>

        <select name="clavePlantel" id="" require>
            <?php
            $v = mysqli_query($link, "SELECT * FROM plantels");

            while ($planteles  = mysqli_fetch_row($v)) {
            ?>
                <option value="<?php echo $planteles[0] ?>"><?php echo $planteles[2] ?> </option>
            <?php } ?>
        </select>


        <div class="col-12">
            <button class="btn btn-primary" type="submit">Submit form</button>
            <a href="/programas">
                <button class="btn btn-danger">Cancel</button>
            </a>

        </div>
</form>
@include('../layouts/footer')