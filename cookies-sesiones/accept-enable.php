<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aceptar y habilitar</title>
</head>
<body>
  <h1>Aceptar y habilitar</h1>

  <?php
    if (isset($_GET['accept']))
    {
      // Si aceptas las cookies creo una que expira en 20 segundos.
      setcookie('my_cookie', 'my_cookie', time() + 20);
    }
    else if (!isset($_COOKIE['my_cookie']))
    {
      // Te doy el prompt si no aceptaste las cookies ni la tienes fijada.
      echo <<<COOKIES
        <section>
          <h2>Cookies</h2>
          <p>Debe aceptar las cookies para continuar navegando por esta página: <a href="?accept=1">Aceptar</a></p>
        </section>
      COOKIES;
    }
  ?>

  <a href="./">Volver</a>
</body>
</html>
