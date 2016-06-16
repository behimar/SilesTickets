{!! csrf_field() !!}
<div class="form-group has-feedback">
    <label for="titul">Titulo</label>
    <input type="text" value="{{$event->titulo}}" class="form-control"  placeholder="Titulo" name="titulo" required>
    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
</div>

<div class="form-group has-feedback">
    <label >Fecha del evento</label>
    <input type="datetime" value="{{date('Y-m-d',strtotime($event->fecha_event)) }}" name="fecha" placeholder="AAAA-MM-DD">
    <input type="time" value="{{date('H:i',strtotime($event->fecha_event))}}" name="hora" placeholder="HH:MM">

</div>
<div class="form-group has-feedback">
    <label for="descripcion">Descripción</label>
    <textarea class="form-control form-inline" value="{{$event->descripccion }}" rows="3" placeholder="Descripción del evento" name="descripccion" required></textarea>
    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
</div>
<div class="form-group">
    <label for="exampleInputFile">Portada</label>
    <input type="file" id="exampleInputFile" name="path">
    <p class="help-block">Cargue una imagen para el evento</p>
</div>
