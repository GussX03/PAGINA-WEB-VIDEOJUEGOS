<?php
 //conectamos Con el servidor
 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="porfin";

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
 }

?>