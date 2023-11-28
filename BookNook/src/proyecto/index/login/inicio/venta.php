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
            <h3>Poner Libro a la Venta</h3>
            <form action="operaciones/agregar_libro.php" method="post">
              <p>
                ISBN:<br />
                <input
                  type="text"
                  name="isbn"
                  placeholder="Introduce el isbn"
                />
              </p>
              <p>
                Nombre:<br />
                <input
                  type="text"
                  name="nombre"
                  placeholder="Introduce el nombre"
                />
              </p>
              <p>
                Género<br />
                <input
                  type="text"
                  name="genero"
                  placeholder="Introduce la genero"
                />
              </p>
              <p>
                Número de páginas<br />
                <input
                  type="text"
                  name="num_pag"
                  placeholder="Introduce el número de páginas"
                />
              </p>
              <p>
                Idioma<br />
                <input
                  type="text"
                  name="idioma"
                  placeholder="Introduce tu número de teléfono"
                />
              </p>
              <p>
                Fecha de publicación<br />
                <input
                  type="text"
                  name="fecha"
                  placeholder="yyyy/mm/dd"
                />
              </p>
              <p>
                Precio<br />
                <input
                  type="text"
                  name="precio"
                  placeholder="$$$$$$$$$$$$$"
                />
              </p>
              <div class="botones">
                <button type="submit">Vender</button>
                <button type="reset">Restablecer</button>
              </div>
            </form>
          </div>
        </div>
      </body>
    </html>
  </body>
</html>
