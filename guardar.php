<?php
 //conectamos Con el servidor
 $host ="localhost";
 $user ="id12999946_usuario";
 $pass ="contraseña123X";
 $db="id12999946_basededatos";

 //funcion llamada conexion con (dominio,usuarios,contraseña,base_de_datos)
 $con = mysqli_connect($host,$user,$pass,$db);
 

 //recuperar las variables
 $name2= $_POST['name2'];
 $alimento= $_POST['alimento'];
 $consola2= $_POST['consola2'];
 $hora= $_POST['hora'];
 //hacemos la sentencia de sql
 $insertar="INSERT INTO datos (name2, alimento, consola2, hora) values ('$name2','$alimento','$consola2','$hora')";
 $query=mysqli_query ($con,$insertar);
 //verificamos la ejecucion
 if(!$query){
  echo"Hubo Algun Error";
 }else{
  echo"Datos Guardados Correctamente<br><a href='apartar.html'>Regresar</a>";
  echo"<br><a href='modificar2.php'> modificar registros</a>";
	echo"<br><a href='registros.php'>eliminar registros</a>";
 }

?>