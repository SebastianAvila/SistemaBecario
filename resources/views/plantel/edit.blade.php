@include('../layouts/header')
<div class="container">
    <h1>Registro de planteles </h1>
    <form class="row g-3" action="/planteles/{{$plantel->id}}" method="POST">
    @csrf
    @method('PUT')
        <div class="col-md-4">
            <label for="" class="form-label">Nombre Plantel</label>
            <input type="text" class="form-control " id="nombrePlantel" name="nombrePlantel" required value="{{$plantel->nombrePlantel}}">
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-4">
            <label for="" class="form-label">Clave del Plantel </label>
            <input type="text" class="form-control " id="clavePlantel" name="clavePlantel" required value="{{$plantel->clavePlantel}}">
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-4">
            <label for="" class="form-label">Direccion/Localidad</label>
            <input type="text" class="form-control " id="localidad" name="localidad" required value="{{$plantel->localidad}}">
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Submit form</button>
            <a href="/planteles">
                <button class="btn btn-danger">Cancel a</button>
            </a>
        </div>
    </form>

</div>

@include('../layouts/footer')