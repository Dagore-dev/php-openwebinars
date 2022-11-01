<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sesiones</title>
</head>
<body>
  <h1>Sesiones</h1>

<?php
  // El nombre de la sesión es la clave de la cookie que se crea en el navegador para representarla. Por defecto en PHP es `PHPSESSID`.
  $session_name = session_name();
  // El id de la sesión es el valor de la cookie de sesión.
  session_id('my-session');
  $session_id = session_id();
  
  echo "<p>$session_name con id '$session_id'</p>";
  
  session_start();

  $_SESSION['started'] = true;
  $_SESSION['name'] = 'David';

  if ($_SESSION['started'])
  {
    echo "<p>Sesión de $_SESSION[name]</p>";
  }
  else
  {
    echo '<p>No se ha iniciado sesión</p>';
  }

  session_unset();
  session_destroy();
?>

  <a href="./">Volver</a>
</body>
</html>
