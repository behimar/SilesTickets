<div class="form-group has-feedback">
    <label for="nombre">Nombre</label>
    <input type="text" name="name" class="form-control validate" id="nombre" placeholder="Nombre" required>
    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
</div>
<div class="form-group has-feedback">
    <label for="mail">Correo Electrónico</label>
    <input type="email" name="email" class="form-control validate" id="mail" placeholder="Correo Electrónico" required>
    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
</div>
<div class="form-group has-feedback">
    <label for="inputPassword" class="control-label">Contraseña</label>
    <input type="password" name="password" data-minlength="6" class="form-control" id="inputPassword" placeholder="Contraseña" required>
    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
    <div class="help-block">Minimo 6 caracteres</div>

</div>
<div class="form-group has-feedback">
    <label for="inputPasswordConfirm" class="control-label">Confirme Contraseña</label>
    <input type="password" name="password_confirmation" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Deben coincididrir" placeholder="Contraseña" required>
    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
</div>


