
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tabla.css">
    <title>Mensajes</title>
</head>

<body>
<?php 
if (!empty($_POST['corazon']) && !empty($_POST['mesa'])) {
  $mar=$_POST['corazon'];
  $cielo=$_POST['mesa'];
  if ($mar=="admin" && $cielo=="admin"){

  } else {
    echo '<script lenguage="javascript">';
    echo 'alert("datos ingresados invalidos")
    window.location = "index.html";
    </script>';
  }
}

?>
<link rel="stylesheet" href="diseñoscss/botonesinicio.css">
<table>
  <tr>
      <td >
        <section class="boton1">
          <form action="productos.html"><button type="submit">Productos/Servicios</button></form>
        </section>
      </td>
      <td>
        <section class="boton2">
          <form action="tiendas.html"><button type="submit">Tiendas</button></form>
        </section>
      </td>
      <td>
        <section class="boton3">
          <form action="login.php"><button type="submit">Contactenos</button></form>
        </section>
      </td>
    </tr>
  </table>
  <div class="col">
        <table>
          <tr>
            <th>id</th>
            <th>nombre</th>
            <th>telefono</th>
            <th>correo</th>
            <th>mensaje</th>
            <th>accion</th>

          </tr>

          <?php
     include('bd.php');
     $query="SELECT * FROM contactomensajes";
     $resultados=mysqli_query($conectar, $query);
     while($row=mysqli_fetch_array($resultados)){ ?>
     
       <tr>
            <td><?php echo $row['id']?> </td>
            <td><?php echo $row['nombre']?> </td>
            <td><?php echo $row['telefono']?> </td>
            <td><?php echo $row['correo']?> </td>
            <td><?php echo $row['mensaje']?> </td>
            <td>

              <a href="eliminar.php?id=<?php echo $row['id']?>">
              <img src="imagenes/eliminar.jpg" width="40px"> </a>
            </td>
            
       


       
       <?php } ?>
     </table>
      </div>
    </div>
    <a href="dato.php">PDF</a>
</body>
</html>