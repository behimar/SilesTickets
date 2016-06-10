{!! csrf_field() !!}
<div class="form-group has-feedback">
    <label for="titul">Titulo</label>
    <input type="text" class="form-control"  placeholder="Titulo" name="titulo" required>
    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
</div>

<div class="form-group has-feedback">
    <label >Fecha del evento</label>
    <input type="datetime" name="fecha" placeholder="AAAA-MM-DD">
    <input type="time" name="hora" placeholder="HH:MM">

</div>
<div class="form-group has-feedback">
    <label for="descripcion">Descripción</label>
    <textarea class="form-control form-inline" rows="3" placeholder="Descripción del evento" name="descripccion" required></textarea>
    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
</div>
<div class="form-group">
    <label for="exampleInputFile">Portada</label>
    <input type="file" id="exampleInputFile" name="path">
    <p class="help-block">Cargue una imagen para el evento</p>
</div>
<div>
    <label class="form-group">Habilite los sectores del Stadium</label>
    <br>
    <label class="checkbox-inline">
        <input name="Butacas" type="checkbox" value="Butacas">Butaca
    </label>
    <label class="checkbox-inline">
        <input name="Preferencia" type="checkbox" value="Preferencia">Preferencia
    </label>
    <label class="checkbox-inline">
        <input name="General" type="checkbox" value="General">Recta de general
    </label>
</div>
<br>
<div>
    <label class="checkbox-inline">
        <input name="Curva Norte" type="checkbox" value="Curva Norte">Curva Norte
    </label>
    <label class="checkbox-inline">
        <input name="Curva Sur" type="checkbox" value="Curva Sur">Curva Sur
    </label>
</div>
@section('scripts')

@endsection
