<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Redondeo de números</title>
</head>
<body>
  <h1>Redondeo de números</h1>

<?php

  echo '<p> round 0.6 => ' . round(0.6) . '</p>';
  echo '<p> round 0.5 => ' . round(0.5) . '</p>';
  echo '<p> round 0.5 (mode: HALF_DOWN) => ' . round(0.5, mode: PHP_ROUND_HALF_DOWN) . '</p>';
  echo '<p> round 0.49 (precision: 2) => ' . round(0.49, precision: 2) . '</p>';
  echo '<p> round 0.49 (precision: 1) => ' . round(0.49, precision: 1) . '</p>';
  echo '<p> round -0.40 => ' . round(-0.40,) . '</p>';
  echo '<p> round -0.60 => ' . round(-0.60) . '</p>';
  echo '<p> ceil 0.6 => ' . ceil(0.6) . '</p>';
  echo '<p> ceil 0.5 => ' . ceil(0.5) . '</p>';
  echo '<p> floor 0.6 => ' . floor(0.6) . '</p>';
  echo '<p> floor 0.5 => ' . floor(0.5) . '</p>';

?>

<a href="./">Volver</a>
</body>
</html>
