<?php
error_reporting(0);
include 'base.php';
if (isset($_POST['aceptar'])) {
    $usering = $conn->real_escape_string($_POST['usuariobd']);
    $passwording = $conn->real_escape_string($_POST['contrasenabd']);
    $consulta = "SELECT * FROM contactologin WHERE Usuario='$usering' and Contrasena='$passwording'";
    if ($resultado = $conn->query($consulta)) {
        while ($row = $resultado->fetch_array()) {
            $ussi = $row['Usuario'];
            $passi = $row['Contrasena'];
        }
        $resultado->close();
    }

    $conn->close();
    if (isset($usering) && isset($passwording)) {
        if ($usering == $ussi && $passwording == $passi) {
            $_SESSION['loginsi'] = TRUE;
            $_SESSION['Usuario'] = $usering;
            header("location:contacto.php");
        }
        else {
            echo '<script lenguage="javascript">';
            echo 'alert("¡Los datos son erroneos intentalo de nuevo!")
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
    <form action=" action_page.php" method="post" align="center">
    <div class="imgcontainer">
        <img src="imagenes/lblogotipo.png" alt="Avatar" class="avatar">
    </div>
    <div class="container">
        <label for="uname"><b>Usuario</b></label><br>
        <input type="text" placeholder="Enter Username" name="usuariobd" required><br>
        <label for="psw"><b>Contraseña</b></label><br>
        <input type="password" placeholder="Enter Password" name="contraseñabd" required><br>
        <button type="submit">Login</button>
        <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
    </div>
    </form>
</body>

</html>