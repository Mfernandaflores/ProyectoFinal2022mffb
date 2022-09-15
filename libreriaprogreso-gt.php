<!doctype html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="diseñoscss/botonesinicio.css">
  <title>Librerias Progreso</title>
</head>

<body>
<?php 
if (!empty($_POST['flor']) && !empty($_POST['sol'])) {
  $estrella=$_POST['flor'];
  $luna=$_POST['sol'];
  if ($estrella=="LCP" && $luna=="123"){

  } else {
    echo '<script lenguage="javascript">';
    echo 'alert("datos ingresados invalidos")
    window.location = "index.html";
    </script>';
  }
}
?>
  <table width="100%" align="center">
    <tr>
      <td colspan="12">
        <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false"
          data-bs-interval="false">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="imagenes/lb1.PNG" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="imagenes/lb2.PNG" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="imagenes/lb3.PNG" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </td>
    </tr> 
    <tr>
      <td >
        <section class="boton1">
          <form action="productos.html"><button type="submit">Productos/Servicios</button></form>
        </section>
      </td>
      <td>
        <section class="boton2">
          <form action="Tiendas.php"><button type="submit">Tiendas</button></form>
        </section>
      </td>
      <td>
        <section class="boton3">
          <form action="Contacto.php"><button type="submit">Contactenos</button></form>
        </section>
      </td>
    </tr>
  </table>
  <table width="100%" align="center">
    <h1>Ofertas del Mes</h1>
    <tr>
      <td colspan="4" rowspan="2" align="center"><img src="imagenes/utiles-escolares.png" width="500" height="750px">
      </td>
      <td colspan="4" align="center"><img src="imagenes/128065-IM.jpg" width="300px" height="300"></td>
      <td colspan="4" align="center"><img src="imagenes/147008-IM.jpg" width="300px" height="300"></td>
    </tr>
    <tr>
      <td colspan="8" align="center"><img src="imagenes/109029-IM.jpg"></td>
    </tr>
  </table>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

   
        <footer>
            <table width="100%">
              
                    <td>PBX: 7777-8888               DIRECCIÓN:16 calle 8va avenida zona 1</td>
                    <td>Carnet: 2021-40354</td>
                    <td>Nombre: Maryorie Fernanda Flores Blanco</td>
                </tr>
            </table>
        </footer>

        

</body>

</html>

