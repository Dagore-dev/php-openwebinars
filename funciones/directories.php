<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Directorios</title>
</head>
<body>
  <h1>Directorios</h1>

<?php
  echo '<p>Mi directorio actual es ' . getcwd() . '. En este directorio encontramos: </p>';

  $directory_files = scandir(getcwd());

  echo '<ul>';

  foreach ($directory_files as $file)
  {
    echo "<li><code>$file</code></li>";
  }

  echo '</ul>';

  echo '<p>Puedo usar <code>chdir</code> para cambiar de directorio, lo que afecta al output de <code>getcwd</code></p>';

  chdir('../');

  echo '<p>Ahora mi directorio actual es ' . getcwd() . '</p>';
?>

<a href="./">Volver</a>
</body>
</html>