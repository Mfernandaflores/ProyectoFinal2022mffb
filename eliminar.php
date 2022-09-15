<?php
include ( "bd.php" ) ;
if ( isset ( $_GET [ 'id' ] ) ) {
   $id=$_GET [ 'id' ] ;
   $query = " DELETE FROM contactomensajes where id = $id " ;
   $resultados=mysqli_query ( $conectar, $query ) ;
   if ( !$resultados ) {
     die ( " Error al eliminar " ) ;
   }
   header ( " location: mensajes.php " ) ;
}
?>