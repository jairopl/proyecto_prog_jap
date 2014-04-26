<html lang="es">
<?php
$pagina = "lista_visitantes";
require "include/include_page_elements.php";
require_once "include/include_element_from_db.php";

print_header(array('titulo' => 'Lista de visitantes'));
?>
<body>
<?php print_nav_bar('visitantes') ?>
<?php print_sub_nav('visitantes') ?>
<div class="content-wrapper">
  <?php print_page_title('Lista de visitantes') ?>
  <div class="panel panel-default">
    <div class="panel-body">
      <?php print_table_from_DB('visitante'); ?>
    </div>  
  </div>
</div>
</body>
</html>