<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formato de números</title>
</head>
<body>
  <h1>Formato de números</h1>

<?php
  $grade = 7.85;
  $result;

  if (is_int($grade))
  {
    $result = "$grade es un número entero";
  }
  elseif (is_float($grade))
  {
    $result = "$grade es un número en coma flotante";
  }
  else
  {
    $result = "$grade no es un número";
  }

  echo "<p>$result.</p>";

  $big_number = 1_000_000;
  $big_number_str = number_format($big_number, decimals: 2, decimal_separator: ',', thousands_separator: '.');
  
  echo "<p>$big_number_str</p>"
?>

<a href="./">Volver</a>
</body>
</html>
