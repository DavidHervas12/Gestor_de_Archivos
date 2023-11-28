<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="inicio_sesion.css">
  <title>Inicio de sesion</title>
</head>

<body>
  <div class="login">
    <div class="caja-titulo">
      <h1>BOOK NOOK</h1>
    </div>
    <div class="caja-form">
      <h3>Inicio de sesión</h3>
      <form action="source_inicio_sesion.php" method="post">
        <p>
          Usuario:<br />
          <input type="text" name="nombre_usuario" placeholder="Introduce el nombre" />
        </p>
        <p>
          Contraseña:<br />
          <input type="text" name="clave" placeholder="Introduce la contraseña" />
        </p>
        <div class="botones">
          <button type="submit">Enviar</button>
          <button type="reset">Restablecer</button>
        </div>
        <p>No tienes cuenta? <a href="/proyecto/index/login/registro/registro.php">Registrarte</a></p>
      </form>
    </div>
  </div>
</body>

</html>