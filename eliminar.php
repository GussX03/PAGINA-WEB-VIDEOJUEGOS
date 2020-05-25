<?php
$host ="localhost";
 $user ="id12999946_usuario";
 $pass ="contraseña123X";
 $db="id12999946_basededatos";
 $con = mysqli_connect($host,$user,$pass,$db);
 $clave= $_POST['clave'];
mysqli_query ($con, "DELETE from datos where name2='$clave'")
or die ("Error al eliminar los datos");

mysqli_close($con); 
echo "Datos eliminados correctamente";
echo"<br><a href='modificar2.php'>Regresar a modificar registros</a>";
echo"<br><a href='registros.php'>Regresar a eliminar registros</a>";
?>