{!! csrf_field() !!}

    <div class="form-group has-feedback">
        <label for="areas" >Localidad</label>
        <select name="localidad" id="areas" class="form-control" required>
            <option value="">Elija un area del estadio</option>
            <option value="Curva Norte">Curva Norte</option>
            <option value="Curva Sur">Curva Sur</option>
            <option value="General">General</option>
            <option value="Preferencia">Preferencia</option>
            <option value="Butacas">Butacas</option>
            <option value="Palco">Palco</option>
        </select>
        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
    </div>
    <div class="form-group has-feedback">
        <label for="cantidades">Cantidad</label>
        <input type="number" class="form-control" id="cantidades" placeholder="Cantidad de entradas disponibles para la localidad" name="cantidad" required>
        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
    </div>
    <div class="form-group has-feedback">
        <label for="precios">Precio</label>
        <input type="number" class="form-control" id="precios" placeholder="Precio de las localidades (por unidad)" name="precio" required>
        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
    </div>
