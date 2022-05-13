@include('../layouts/header')
@include('../layouts/sidebar')
<div class="container">
    <h1>Registro de planteles </h1>
    <form class="row g-3" action="/planteles" method="POST">
        @csrf
        <div class="col-md-4">
            <label for="" class="form-label">Nombre Plantel</label>
            <input type="text" class="form-control " id="nombrePlantel" name="nombrePlantel" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-4">
            <label for="" class="form-label">Clave del Plantel </label>
            <input type="text" class="form-control " id="clavePlantel" name="clavePlantel" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-4">
            <label for="" class="form-label">Direccion/Localidad</label>
            <input type="text" class="form-control " id="localidad" name="localidad" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
    </form>

</div>

@include('../layouts/footer')