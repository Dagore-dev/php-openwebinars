<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Escribir ficheros</title>
</head>
<body>
  <h1>Escribir ficheros</h1>

<?php
  $filename = 'file_to_write.txt';
  // El modo `a+` es el modo *append* para lectura y escritura.
  $file_cursor = fopen($filename, 'a+');

  if ($file_cursor !== false)
  {
    fwrite($file_cursor, 'Escribiendo en el fichero');
    // `fflush` fuerza la escritura del buffer en el fichero.
    fflush($file_cursor);

    echo '<p>Contenido actual del fichero tras modificarlo:</p>';
    
    rewind($file_cursor);

    while (!feof($file_cursor))
    {
      $line = fgets($file_cursor);
      echo "<p>$line</p>";
    }

    $file_info = stat($filename);
    $file_size = filesize($filename);

    echo '<ul>';
    foreach ($file_info as $key => $value)
    {
      echo "<li>$key: $value</li>";
    }
    echo "<li>filesize: $file_size bytes</li>";
    echo '</ul>';
  }
  else
  {
    echo '<p>No se ha podido crear el cursor del fichero</p>';
  }
?>

  <a href="./">Volver</a>
</body>
</html>
