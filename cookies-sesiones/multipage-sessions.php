<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sesiones en varias páginas</title>
</head>
<body>
  <h1>Sesiones en varias páginas</h1>

<?php
  session_start();

  $_SESSION['name'] = 'David';
  $_SESSION['age'] = 27;
?>

  <a href="./multipage-example.php">Variables de sesión</a>

  <a href="./">Volver</a>
</body>
</html>
