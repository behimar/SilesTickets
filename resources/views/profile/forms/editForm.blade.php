{!! csrf_field() !!}
<div class="form-group has-feedback">
    <label for="carnet" class="col-md-3">Carnet de Identidad</label>
    <div class="col-lg-9">
        <input type="text" value="{{$user->carnet}}" class="form-control" placeholder="Carnet de Identidad" name="carnet" id="carnet" required>
        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
    </div>
</div>
<div class="form-group has-feedback">
    <label for="nombres" class="col-md-3">Nombres</label>
    <div class="col-lg-9">
        <input type="text" value="{{$user->nombre}}" class="form-control" placeholder="Ingrese sus nombres" name="nombre" id="nombres" required>
        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
    </div>
</div>
<div class="form-group has-feedback">
    <label for="paterno" class="col-md-3">Apellido Paterno</label>
    <div class="col-lg-9">
        <input type="text" value="{{$user->apP}}" class="form-control" placeholder="Apellido Paterno" name="apP" id="paterno" required>
        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
    </div>
</div>
<div class="form-group has-feedback">
    <label for="materno" class="col-md-3">Apellido Materno</label>
    <div class="col-lg-9">
        <input type="text" value="{{$user->apM}}" class="form-control" placeholder="Apellido Materno" name="apM" id="materno" required>
        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
    </div>
</div>
<div class="form-group has-feedback">
    <label for="phone" class="col-md-3">Telefono</label>
    <div class="col-lg-9">
        <input type="text" value="{{$user->telefono}}" class="form-control" placeholder="telefono" name="telefono" id="phone" required>
        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
    </div>
</div>
<div class="form-group has-feedback">
    <label for="fnac"class="col-sm-3 control-label">Fecha de nacimiento</label>
    <input type="date" name="fechaNac" value="{{$user->fechaNac}}">
</div>
<button type="submit" class="btn btn-primary">Guardar</button>
<a href="{{route('home')}}" type="button" class="btn btn-default">Volver</a>
