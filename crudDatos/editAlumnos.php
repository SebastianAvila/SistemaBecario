<?php

include("../coneccionBaseDatos/coneccionEnvio.php");





if (isset($_GET['id_UnicoAlum'])) {
    $id_UnicoAlum = $_GET['id_UnicoAlum'];
    $query = "SELECT * FROM  alumnos WHERE id_UnicoAlum='$id_UnicoAlum'";
    $resulta = mysqli_query($coneccion, $query);

    if (mysqli_num_rows($resulta) == 1) {
        $row = mysqli_fetch_array($resulta);
        $id_UnicoAlum = $row['id_UnicoAlum'];
        $primerNomBeca = $row['primerNomBeca'];
        $segundoNomBeca = $row['segundoNomBeca'];
        $apellidoPaterBeca = $row['apellidoPaterBeca'];
        $apellidoMaterBeca = $row['apellidoMaterBeca'];
        $celular = $row['celular'];
        $correoElec = $row['correoElec'];
        $id_UnicoPro = $row['id_UnicoPro'];
        $clavePlantel = $row['clavePlantel'];
        $fechaRegistro = $row['fechaRegistro'];


       echo $id_UnicoAlum ;
       echo $primerNomBeca ;
       echo $segundoNomBeca ;
       echo $apellidoPaterBeca;
       echo $apellidoMaterBeca;
       echo $celular;
       echo $correoElec;
       echo $id_UnicoPro ;
       echo $clavePlantel ;
       echo $fechaRegistro ;

    }
}



if (isset($_POST['enviaAlumnos'])) {



    $id_UnicoAlum = $_POST['id_UnicoAlum'];
    $primerNomBeca = $_POST['primerNomBeca'];
    $segundoNomBeca = $_POST['segundoNomBeca'];
    $apellidoPaterBeca = $_POST['apellidoPaterBeca'];
    $apellidoMaterBeca = $_POST['apellidoMaterBeca'];
    $celular = $_POST['celular'];
    $correoElec = $_POST['correoElec'];
    $id_UnicoPro = $_POST['id_UnicoPro'];
    $clavePlantel = $_POST['clavePlantel'];
    $fechaRegistro = $_POST['fechaRegistro'];




  $queryAlum ="UPDATE alumnos SET  id_UnicoAlum = '$id_UnicoAlum',primerNomBeca = '$primerNomBeca',segundoNomBeca = '$segundoNomBeca',apellidoPaterBeca = '$apellidoPaterBeca',
  apellidoMaterBeca = '$apellidoMaterBeca',celular = '$celular',correoElec = '$correoElec', id_UnicoPro = '$id_UnicoPro',clavePlantel = '$clavePlantel', fechaRegistro = '$fechaRegistro'
WHERE id_UnicoAlum = '$id_UnicoAlum'"; 


    $resuA = mysqli_query($coneccion, $queryAlum);


    if ($resuA) {
        header("Location:../crudDatos/crudAlumnos.php ");
    } else {
        echo "mamon";
    }
}

?>



<form action="editAlumnos.php?id_UnicoAlum=<?php echo $_GET['id_UnicoAlum']; ?>" method="POST">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>


    <h4>Datos becario</h4>

    <input type="text" name="id_UnicoAlum" id="id_UnicoAlum" value="<?php echo $id_UnicoAlum ?>">
    <h3>Primer Nombre</h3>
    <input type="text" name="primerNomBeca" id="primerNomBeca" placeholder="Obligatorio" value="<?php echo $primerNomBeca ?>">

    <h3>Segundo Nombre</h3>
    <input type="text" name="segundoNomBeca" id="segundoNomBeca" placeholder="Opcional*" value="<?php echo  $segundoNomBeca ?>">

    <h3>Primer Apellido</h3>
    <input type="text" name="apellidoPaterBeca" id="apellidoPaterBeca" placeholder="Obligatorio*" value="<?php echo  $apellidoPaterBeca ?>">

    <h3>Segundo Apellido</h3>
    <input type="text" name="apellidoMaterBeca" id="apellidoMaterBeca" placeholder="Obligatorii*" value="<?php echo  $apellidoMaterBeca ?>">

    <h3>Celular a 10 digitos</h3>
    <input type="text" name="celular" id="celular" placeholder="Lada + 7 numeros restantes" value="<?php echo $celular ?>">

    <h3>Correo Electronico</h3>
    <input type="text" name="correoElec" id="correoElec" placeholder="corrre@jemplo.com" value="<?php echo  $correoElec ?>">


    <?php
    $consultaCuenta = "SELECT user_becario, pass_becario FROM becariocuenta WHERE id_UnicoAlum='$id_UnicoAlum' ";
    $consultaCuentaQuery = mysqli_query($coneccion, $consultaCuenta);
    if (mysqli_num_rows($consultaCuentaQuery) == 1) {
        $row = mysqli_fetch_array($consultaCuentaQuery);
        $user_becario = $row['user_becario'];
        $pass_becario = $row['pass_becario'];
    }
    ?>

    <h3>usuario para su login </h3>
    <input type="text" name="usuarioBecario" id="usuarioBecario" placeholder=" datos+@becario.uady.mx" value="<?php echo  $user_becario ?>">

    <h3>Password</h3>
    <input type="text" name="passwordBecario" id="passwordBecario" value="<?php echo  $pass_becario ?>">
    <br><br>



    <?php
        
    $consultaPlantel = "SELECT nombrePlantel FROM planteles WHERE clavePlantel='$clavePlantel'";
    $consultaPlantelQuery = mysqli_query($coneccion, $consultaPlantel);
    if (mysqli_num_rows($consultaPlantelQuery) == 1) {
        $rowe = mysqli_fetch_array($consultaPlantelQuery);
        $nombrePlantel = $rowe['nombrePlantel'];
    }
    ?>

    <h3>Plantel elejido Anteriormente </h3>
    <p> <?php echo  $nombrePlantel ?> </p>

    <?php
    
    $consultaPrograma = "SELECT tipoProgra FROM programas WHERE id_UnicoPro='$id_UnicoPro'";
    $consultaProgramaQuery = mysqli_query($coneccion, $consultaPrograma);
    if (mysqli_num_rows($consultaProgramaQuery) == 1) {
        $row = mysqli_fetch_array($consultaProgramaQuery);
        $tipoProgra = $row['tipoProgra'];
    }

    ?>


    <h3>Programa elejido Anteriormente: </h3>
    <p> <?php echo $tipoProgra ?></p>


    <?php
    $link = mysqli_connect("localHost", "root", "");
    if ($link) {
        mysqli_select_db($link, "sistemabecario");
        mysqli_query($link, "SET NAMES 'utf0'");
    }
    ?>
    <h3>Plantel de procedencia</h3>
    <select name="clavePlantel" id="clavePlantel" require>
        <option value="">Planteles Disponibles</option>
        <?php
        $v = mysqli_query($link, "SELECT * FROM planteles");
        while ($planteles  = mysqli_fetch_row($v)) {
        ?>
            <option value="<?php echo $planteles[0] ?>"><?php echo $planteles[2] ?> </option>
        <?php } ?>
    </select>


    <div id="id_UnicoPro" name="id_UnicoPro "></div>

    <input type="submit" value="Registrar" name="enviaAlumnos" />


</form>


<script type="text/javascript">
    $(document).ready(function() {
        $('#clavePlantel').val(1);
        recargarLista();

        $('#clavePlantel').change(function() {
            recargarLista();
        });
    })
</script>
<script type="text/javascript">
    function recargarLista() {
        $.ajax({
            type: "POST",
            url: "obtieneDatos.php",
            data: "id=" + $('#clavePlantel').val(),
            success: function(r) {
                $('#id_UnicoPro').html(r);
            }
        });
    }
</script>