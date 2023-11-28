<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BOOK NOOK</title>
  </head>
  <body>
    <!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="venta.css" />
        <title>BOOK NOOK</title>
      </head>

      <body>
        <div class="login">
          <div class="caja-titulo">
            <h1>BOOK NOOK</h1>
          </div>
          <div class="caja-form">
            <h3>Actualizar Precio de Libro</h3>
            <form action="operaciones/actualizar_libro.php" method="post">
              <p>
                ISBN:<br />
                <input
                  type="text"
                  name="isbn"
                  placeholder="Introduce el isbn"
                />
              </p>
              <p>
                Nuevo precio:<br />
                <input
                  type="text"
                  name="precio"
                  placeholder="$$$$$$$$$$$$$"
                />
              </p>
              <div class="botones">
                <button type="submit">Actualizar</button>
                <button type="reset">Restablecer</button>
              </div>
            </form>
          </div>
        </div>
      </body>
    </html>
  </body>
</html>
