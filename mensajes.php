<?php
error_reporting(0);
session_start();
include 'base.php';
/*Validar la sesión*/
$us = $_SESSION['USUARIO'];
if (!isset($us)) {

    header("location:login.php");

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="cerrarsesion.php">cerrar sesión</a>
</body>
</html>