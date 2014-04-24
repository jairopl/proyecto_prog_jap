<html lang="es">
<head>
  <title>Proyecto JAPL</title>
  <meta name="author" content="Jairo Alberto Prieto">
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" />
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="content-wrapper">
<ul class="nav nav-tabs nav-justified">
  <li><a href="index.php">Inicio</a></li>
  <li class="active"><a href="registrar_usuario.php">Usuarios sistema</a></li>
  <li class="disabled"><a href="#">Propietarios</a></li>
  <li class="disabled"><a href="#">Equipos</a></li>
</ul>
<div class="page-header"><h1>Registrar usuario</h1></div>
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