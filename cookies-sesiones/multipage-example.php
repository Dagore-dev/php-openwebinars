<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Valores de la sesión</title>
</head>
<body>
  
  <?php
    // Es necesario 'reanudar' la sesión.
    session_start();

    if (session_status() === PHP_SESSION_ACTIVE)
    {
      echo '<ul>';
      foreach ($_SESSION as $key => $value)
      {
        echo "<li>$key => $value</li>";
      }
      echo '</ul>';
    }
    else
    {
      echo '<p>No se ha iniciado sesión</p>';
    }
  ?>

  <a href="./end_session.php">Finalizar sesión</a>
  <a href="./">Volver</a>

</body>
</html>