<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="diseñoscss/botonesinicio.css">
<table width="100%">
<tr>
    <td >
      <section class="boton1">
        <form action="productos.html"><button type="submit">Productos/Servicios</button></form>
      </section>
    </td>
    <td>
      <section class="boton2">
        <form action="Tiendas.html"><button type="submit">Tiendas</button></form>
      </section>
    </td>
    <td>
      <section class="boton3">
        <form action="logi.php"><button type="submit">Mensajes</button></form>
      </section>
    </td>
  </tr>
</table>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>

<h3>Contactenos</h3>

<div class="container">
  <form method="post">
    <label for="fname">Nombre</label>
    <input type="text" id="fname" name="nom" placeholder="Nombre">

    <label for="lname">Teléfono</label>
    <input type="text" id="lname" name="tel" placeholder="Teléfono">

    <label for="country">Correo</label>
    <input type="text" id="lname" name="correr" placeholder="correo">
   

    <label for="subject">Mensaje</label>
    <textarea id="subject" name="mensaje" placeholder="Escribir" style="height:200px"></textarea>

    <input name="aceptar" type="submit" value="Enviar">
  </form>
</div>

</body>
</html>
<?php
include ( "bd.php" ) ;
if ( isset ( $_POST [ 'aceptar' ] ) ) {
    $nomb = $_POST [ 'nom' ] ;
    $tele = $_POST [ 'tel' ] ;
    $corre = $_POST [ 'correr' ] ;
    $mensa= $_POST [ 'mensaje' ] ;
  
    $query = " INSERT INTO contactomensajes (  nombre,	telefono,	correo,	mensaje ) VALUES ( ' $nomb ' , ' $tele ' , ' $corre ' , ' $mensa ') " ;
    $resultados = mysqli_query ( $conectar , $query ) ;
    if ( $resultados ) {
         echo ' <script lenguage = " javascript " > ';
         echo ' alert ( " Los datos han sido guardados ")
         window.location = " Contacto.php " ;
         </script>';
         }else {
          echo ' <script lenguage = " javascript " > ';
          echo ' alert ( " Los datos no se han enviado ")
          window.location = " Contacto.php " ;
          </script>';
         }
        }
    mysqli_close ( $conectar ) ;

?>