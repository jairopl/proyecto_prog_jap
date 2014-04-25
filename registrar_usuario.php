<html lang="es">
<?php
$pagina = "registro_propietario";
require "include/include_page_elements.php";

print_header(array('titulo' => 'Registrar usuario del sistema'));
?>
<body>
<div class="content-wrapper">
  <?php print_nav('registrar_usuario') ?>
  <?php print_page_title('Registrar usuario') ?>
<div class="panel panel-default">
  <div class="panel-body">
  <form action="insertar_usuario.php" method="post" id="nuevo_usuario" class="form-horizontal">
  <div class="form-group">
  <label for="documento" class="col-sm-2 control-label">Número documento</label>
  <div class="col-sm-10">
    <input type="text" name="documento" id="documento" class="form-control" maxlength="15" required>
  </div>
  </div>

  <div class="form-group">
  <label for="tipo_documento" class="col-sm-2 control-label">Tipo documento</label>
  <div class="col-sm-10">
    <select id="tipo_documento" class="form-control" required>
    <option name="tipo_documento" value="0">Cedula de ciudadania</option>
    <option name="tipo_documento" value="1">Tarjeta de identidad</option>
    <option name="tipo_documento" value="2">Libreta militar</option>
    <option name="tipo_documento" value="3">Pasaporte</option>
    </select>
  </div>
  </div>
  <div class="form-group">
  <label for="nombre" class="col-sm-2 control-label">Nombres</label>
  <div class="col-sm-10">
    <input type="text" name="nombre" id="nombre" class="form-control" required>
  </div>
  </div>
  <div class="form-group">
  <label for="apellidos" class="col-sm-2 control-label">Apellidos</label>
  <div class="col-sm-10">
    <input type="text" name="apellidos" id="apellidos" class="form-control" required>
  </div>
  </div>
  <div class="form-group">
  <label for="telefono" class="col-sm-2 control-label">Telefono</label>
  <div class="col-sm-10">
    <input type="text" name="telefono" id="telefono" class="form-control" required>
  </div>
  </div>
  <div class="form-group">
  <label for="rol_usuario" class="col-sm-2 control-label">Rol</label>
  <div class="col-sm-10">
    <select id="rol_usuario" class="form-control" required>
    <option name="rol_usuario" value="0">Estudiante</option>
    <option name="rol_usuario" value="1">Docente</option>
    <option name="rol_usuario" value="2">Visitante</option>
    </select>
  </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button class="btn btn-default">Guardar</button>
    </div>
  </div>
  </form>
  </div>
</div>
</div>
</body>
</html>