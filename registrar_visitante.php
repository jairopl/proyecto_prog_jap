<html lang="es">
<?php
$pagina = "registro_visitante";
require_once "include/include_page_elements.php";
require_once "include/include_element_from_db.php";

print_header(array('titulo' => 'Registrar visitante'));
?>

<body>
<?php print_nav_bar('visitantes') ?>
<div class="content-wrapper">
  <?php print_page_title('Registrar visitante de equipo') ?>
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
      <?php print_select_from_basic_table('tipo_doc', 'tipo_documento'); ?>
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
      <?php print_select_from_basic_table('tipo_visitante', 'rol_usuario'); ?>
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
