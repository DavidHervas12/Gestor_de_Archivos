<?php
session_start();
if (!isset($_SESSION['sesion_iniciada']) || $_SESSION['sesion_iniciada'] != true) {
  header("Location: /proyecto/index/login/inicio_sesion/inicio_sesion.php");
  exit;
} else {
?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="inicio.css" />
    <title>BOOK NOOK</title>

  </head>

  <body>
    <div class="titulo">
      <h1>BOOK NOOK</h1>
    </div>
    <div class="funcionalidades">
      <div class="lista-compras">
        <h3>Libros a la venta</h3>
        <?php
        // Este códigoo php se encarga de representar todos los libros que están
        // a la venta en un div.
        mysqli_report(MYSQLI_REPORT_ERROR);
        $servidor="localhost";
        $usuario="root";
        $clave="";

        @$mysqli = new mysqli($servidor,$usuario,$clave);
        if ($mysqli->connect_errno)
        {
            echo "Fallo conexión a Mysql: ".$mysqli->connect_errno." ".$mysqli->connect_error;
            die ("Salida del programa. Error acceso BBDD");
        }

        $basedatos = "bdlibros";
        $mysqli->select_db($basedatos);

        $consulta = "SELECT isbn,nombre,precio FROM libros WHERE vendido=0;";

        if (!$resultado = $mysqli->query($consulta)) {
            echo "Lo sentimos. App falla<br>";
            echo "Error en $consulta <br>";
            echo "Num.error: " . $mysqli->errno . "<br>";
            echo "Error: " . $mysqli->error . "<br>";
            exit;
        }

        while ($fila = $resultado->fetch_assoc()) {
          echo "<p style='font-family: Arial, Helvetica, sans-serif; font-style: italic;font-weight: bold;'>&nbsp&nbsp" .
          $fila['isbn'] . "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" . $fila['nombre'] . "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" . $fila['precio'] . "&nbsp€</p>";
        }
        ?>
      </div>
      <div class="opciones">
        <form action="source_inicio.php" method="post">
          <input type="submit" name="agregar-libro" value="Poner a la venta" />
          <input type="submit" name="eliminar-libro" value="Retirar venta" />
          <input type="submit" name="actualizar-libro" value="Actualizar venta" />
          <input type="submit" name="comprar-libro" value="Comprar libro" />
        </form>
      </div>
    </div>
  </body>

  </html>
<?php
} ?>