<?php
include('bd.php');

if (isset($_POST['aceptar'])) {
    $idd=$_POST['id'];
    $nom=$_POST['nombre'];
    $tel=$_POST['telefono'];
    $corre=$_POST['correo'];
    $men=$_POST['mensaje'];

    $query="INSERT INTO contactosmensajes(id, nombre, telefono,	correo,	mensaje) VALUES ('$idd','$nom','$tel','$corre', '$men')";
    $resultado=mysqli_query($conn, $query);
    if ($result) {
        echo '<script lenguage="javascript">';
        echo 'alert("¡Tu mensaje a sido enviado exitosamente, Gracias por usar nuestros servicios:)!")
        window.location = "index.php";
        </script>';
        }
    }
    mysqli_close($conn);
    ?>

    header("location:colegio_alumno.php");
}
?>