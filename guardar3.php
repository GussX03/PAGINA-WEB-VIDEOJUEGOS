<?php
 //conectamos Con el servidor
 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="apartar";

 //funcion llamada conexion con (dominio,usuarios,contraseña,base_de_datos)
 $con = mysqli_connect($host,$user,$pass,$db);


 //recuperar las variables
 $name= $_POST['name'];
 $email= $_POST['email'];
 $apellido= $_POST['apellido'];
 //hacemos la sentencia de sql
 $insertar="INSERT INTO clientes values ('$name','$email','$apellido')";
 //ejecutamos la sentencia de sql
 $query=mysqli_query ($con,$insertar);
 //verificamos la ejecucion
 if(!$query){
  echo"Hubo Algun Error";
 }else{
  echo"Datos Guardados Correctamente";
 }

?>