<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Leer ficheros</title>
</head>
<body>

  <h1>Leer ficheros</h1>

<?php
  $filename = 'hello.txt';
  $file_cursor = fopen($filename, 'r');

  if ($file_cursor !== false)
  {
    // Esto sería para leer el fichero completo a lo bruto:
    // $file_content = fread($file_cursor, filesize($filename));
    // echo "<p>$file_content</p>";

    while (!feof($file_cursor))
    {
      $line = fgets($file_cursor);
      echo "<p>$line</p>";
      // Con `rewind` puedo rebobinar el puntero y con `fgetc` puedo leer carácter a carácter el fichero.
    }

    // Con `file_get_contents` se obtiene un string con el contenido del fichero y con y `file` obtiene un array con las líneas en el fichero.
  }
  else
  {
    echo '<p>No se ha podido crear el cursor al fichero.</p>';
  }

?>

  <a href="./">Volver</a>

</body>
</html>
