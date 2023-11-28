<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="registro.css" />
    <title>Registro</title>
  </head>

  <body>
    <div class="login">
      <div class="caja-titulo">
        <h1>BOOK NOOK</h1>
      </div>
      <div class="caja-form">
        <h3>Registro de Usuario</h3>
        <form action="agregar_usuario.php" method="post">
          <p>
            Nombre de usuario:<br />
            <input
              type="text"
              name="username"
              placeholder="Introduce el nombre de usuario"
            />
          </p>
          <p>
            Email:<br />
            <input
              type="text"
              name="email"
              placeholder="Introduce el email"
            />
          </p>
          <p>
            Contraseña<br />
            <input
              type="text"
              name="clave"
              placeholder="Introduce la contraseña"
            />
          </p>
          <p>
            Dirección<br />
            <input
              type="text"
              name="direccion"
              placeholder="Introduce tu direccion"
            />
          </p>
          <p>
            Teléfono<br />
            <input
              type="text"
              name="telefono"
              placeholder="Introduce tu número de teléfono"
            />
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
