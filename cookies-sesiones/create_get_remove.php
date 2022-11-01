<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Creación, obtención y eliminación</title>
</head>
<body>
  <h1>Creación, obtención y eliminación</h1>

<?php
  setcookie('no_espira', 1);
  setcookie('espira_en_veinte', 2, time() + 20);

  foreach ($_COOKIE as $key => $value)
  {
    echo "<p>$key => $value</p>";
  }

  // Para eliminar una cookie se usa la propia función `setcookie` haciendo que espire en el pasado y usando la función `unset`.
  unset($_COOKIE['no_expira']);
  setcookie('no_espira', '', time() - 3600);
?>

  <a href="./">Volver</a>
</body>
</html>
