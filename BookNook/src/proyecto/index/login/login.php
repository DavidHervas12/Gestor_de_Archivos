<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="login.css">
  <title>Inicio de sesion</title>
</head>

<body>
  <div class="login">
    <div class="caja-titulo">
      <h1>BOOK NOOK</h1>
    </div>
    <div class="caja-form">
      <h3>Acceso a la pagina web</h3>
      <form action="source_login.php" method="post">
        <p>
          Usuario:<br />
          <input type="text" name="nombre_usuario" placeholder="Introduce el nombre" />
        </p>
        <p>
          Contraseña:<br />
          <input type="text" name="clave" placeholder="Introduce la contraseña" />
        </p>
        <p>
          Nombre del servidor:<br />
          <input type="text" name="servidor" placeholder="Introduce la la base de datos" />
        </p>
        <div class="botones">
          <button type="submit">Enviar</button>
          <button type="reset">Restablecer</button>
        </div>
      </form>
    </div>
  </div>
</body>

</html>