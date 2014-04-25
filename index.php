<html lang="es">
<?php
$pagina = "registro_propietario";
require "include/include_page_elements.php";

print_header(array('titulo' => 'Sistema de control de acceso'));
?>
<body>
<div class="content-wrapper">
  <?php print_nav('index') ?>
  <?php print_page_title('Sistema de control acceso') ?>
  <div class="panel panel-default">
    <div class="panel-body">
    <form action="" class="form">
      <div class="form-group">
        <div class="col-sm-7 col-sm-offset-2">
          <input class="form-control input-lg" type="text" placeholder="Buscar un equipo">
        </div>
      </div>
      <div class="form-group">
        <button class="btn btn-default">Buscar</button>
      </div>
    </form>
    </div>  
  </div>
</div>
</body>
</html>