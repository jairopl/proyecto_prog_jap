<?php
if (!isset($pagina)) $pagina = "index";

function print_page_title($title) {
  echo "<div class='page-header'><h1>$title</h1></div>";
}

/** Hecho por JAPL. 25-04-2014 
* Imprime el nav superior donde se muestran las páginas
*/
function print_nav($active = 'index') {
  $links = array(
    'index' => 'index.php',
    'registrar_propietario' => 'registrar_propietario.php',
    'equipos' => '#',
    'registrar_usuario' => 'registrar_usuario.php',
  );
  $nombres_paginas = array(
    'index' => 'Inicio',
    'registrar_usuario' => 'Usuarios sistema',
    'registrar_propietario' => 'Propietarios',
    'equipos' => 'Equipos',
  );
  echo '<div role="navigation" class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <span class="navbar-brand">Proyecto JAPL</span>
        </div>
        <div class="navbar-collapse collapse">
';
  echo "<ul class='nav navbar-nav'>";
  //echo "<ul class='nav nav-tabs nav-justified'>";
  foreach ($links as $page => $link) {
    $class = '';
    if ($active == $page) {
      $class = ' class="active"';
    } elseif ($link == "#") {
      $class = ' class="disabled"';
    }
    echo "<li$class><a href='$link'>{$nombres_paginas[$page]}</a></li>";
  }
  echo "</ul></div></div></div>";
}

/** Hecho por JAPL. 24-04-2014 
* Imprime el header con la configuracion personalizada
*/
function print_header($custom_options = array()) {
  $default_options = array(
    'titulo' => "Inicio",
    'suf_titulo' => "Proyecto JAPL",
    'css_files' => array(
        "css/normalize.css",
        "css/bootstrap.min.css",
        "css/bootstrap-theme.min.css",
        "css/style.css",
      ),
    'js_files' => array(
      "https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js",
      "js/bootstrap.min.js",
    ),
  );
  $options = array_merge($default_options, $custom_options);
  
  echo '<head>
  <meta name="author" content="Jairo Alberto Prieto">
  <meta charset="UTF-8">';
  echo '<title>' . $options['titulo'] . ' - ' . $options['suf_titulo'] . '</title>';
  echo _include_css_js_files($options['css_files'], 'css');
  echo _include_css_js_files($options['js_files'], 'js');
  echo "</head>";
}

/** Hecho por JAPL. 24-04-2014 
* Devuelve un string con los css o js listos para imprimir en el header
*/
function _include_css_js_files($css_files, $type = 'css'){
  if (!is_array($css_files)) return;

  if ($type == "css") {
    $begin = "<link rel='stylesheet' type='text/css' href='";
    $end = "'>";
  } else {
    $begin = "<script src='";
    $end = "'></script>";
  }
  foreach ($css_files as $file) {
    echo $begin . $file . $end;
  };
}
?>