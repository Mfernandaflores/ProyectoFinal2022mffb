<?php
error_reporting(0);
include 'base.php';

if (isset($_POST['aceptar'])) {
$us=$conectar->real_escape_string($_POST['usuariobd']);
$pass=$conectar->real_escape_string($_POST['contrasenabd']);
$consulta="SELECT * FROM contactologin WHERE USUARIO='$us' and CONTRASENA='$pass'";

if ($resultado=$conectar->query($consulta)) {
  while ($row=$resultado->fetch_array()) {
    $usok=$row['USUARIO'];
    $pasok=$row['CONTRASENA'];
  }
  $resultado->close();
}

$conectar->close();
if (isset($us) && isset($pass)) {
  if ($us==$usok && $pass==$pasok) {
    $_SESSION['logeosi'] = TRUE;
    $_SESSION['USUARIO'] = $us;
    header("location:mensajes.php");
  }

  else{ 
    echo '<script lenguage="javascript">';
    echo 'alert("¡Intentalo de nuevo)!")
    window.location = "login.php";
    </script>';
  }
}
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="diseñoscss/login.css">
    <title>Document</title>
</head>

<body style="background: url(imagenes/fondoprogreso.jpg); background-size: cover; background-repeat: no-repeat;"">
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" align="center">
    <div class="imgcontainer">
        <img src="imagenes/lblogotipo.png" alt="Avatar" class="avatar">
    </div>
    <div class="container">
        <label for="uname"><b>Usuario</b></label><br>
        <input type="text" placeholder="Enter Username" name="usuariobd" required><br>
        <label for="psw"><b>Contraseña</b></label><br>
        <input type="password" placeholder="Enter Password" name="contrasenabd" required><br>
        <button type="submit" name="aceptar">Login</button>
        <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
    </div>
    </form>
</body>

</html>