
    {!! csrf_field() !!}
    <div class="form-group has-feedback">
        <label for="titul">Titulo</label>
        <input type="text" class="form-control"  placeholder="Titulo" name="titulo" required>
        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
    </div>
    <div class="form-group has-feedback">
        <label for="fecha_evento">Fecha del evento</label>
        <input type="datetime" name="fecha_event">
    </div>
    <div class="form-group has-feedback">
        <label for="descripcion">Descripción</label>
        <textarea class="form-control" rows="3" placeholder="Descripción del evento" name="descripccion" required></textarea>
        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>

    </div>
    <div class="form-group has-feedback">
        <label for="numEntrada">N° de Localidades</label>
        <input type="number" class="form-control" placeholder="N° de Localidades" required name="numEntradas">
        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
    </div>
