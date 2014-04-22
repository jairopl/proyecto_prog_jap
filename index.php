<html lang="es">
<head>
  <title>Proyecto JAPL</title>
  <meta name="author" content="Jairo Alberto Prieto">
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<h1>Registrar usuario</h1>
<form action="insertar_usuario.php" method="post" id="nuevo_usuario">
<div class="field">
<label for="documento">Número documento</label>
<input type="text" name="documento" id="documento" maxlength="15" required>
</div>

<div class="field">
<label for="tipo_documento">Tipo documento</label>
<select id="tipo_documento" required>
<option name="tipo_documento" value="0">Cedula de ciudadania</option>
<option name="tipo_documento" value="1">Tarjeta de identidad</option>
<option name="tipo_documento" value="2">Libreta militar</option>
<option name="tipo_documento" value="3">Pasaporte</option>
</select>
</div>
<div class="field">
<label for="nombre">Nombres</label>
<input type="text" name="nombre" id="nombre" required>
</div>
<div class="field">
<label for="apellidos">Apellidos</label>
<input type="text" name="apellidos" id="apellidos" required>
</div>
<div class="field">
<label for="telefono">Telefono</label>
<input type="text" name="telefono" id="telefono" required>
</div>
<div class="field">
<label for="rol_usuario">Rol</label>
<select id="rol_usuario" required>
<option name="rol_usuario" value="0">Estudiante</option>
<option name="rol_usuario" value="1">Docente</option>
<option name="rol_usuario" value="2">Visitante</option>
</select>
</div>
<button class="btn">Guardar
</button>
</form>
</body>
</html>