<body style="background-image:url(imagenes/fondo.jpg); background-size: cover; font-family: Arial, Helvetica, sans-serif;">
      <?php
      $usu=$_POST['usuario'];
      $cont=$_POST['contraseña'];
      
      if ($usu == 'LCP' and $cont == '123') {
          echo '<script language="javascript">alert("Datos correctos");
          window.location.href="princi.php"</script>';
      } else {
          echo '<script language="javascript">alert("Datos erroneos vuelve a intentarlo");
          window.location.href="index.html"</script>';
          
      }
      
      ?>
        