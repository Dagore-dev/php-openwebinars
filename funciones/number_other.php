<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Otras funciones de números</title>
</head>
<body>
  <h1>Otras funciones de números</h1>

<?php

  // Ni me molesto en poner un ejemplo: `abs`, `max`, `min`, `rand`.
  // `decbin`, `bindec`, `dechex`, `hexdec`.

  $three_in_bin = decbin(3);
  echo "<p>3 decimal => $three_in_bin binario.</p>";

  $full_byte_in_decimal = bindec('11111111');
  echo "<p>11111111 binario => $full_byte_in_decimal decimal.</p>";

  $full_byte_in_hex = dechex(255);
  echo "<p>255 decimal => $full_byte_in_hex hexadecimal.</p>";

?>

<a href="./">Volver</a>
</body>
</html>
