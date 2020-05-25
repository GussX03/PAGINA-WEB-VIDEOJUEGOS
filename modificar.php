<?php
$host ="localhost";
 $user ="id12999946_usuario";
 $pass ="contraseña123X";
 $db="id12999946_basededatos";
 $con = mysqli_connect($host,$user,$pass,$db);

$newname2= $_POST['modificar'];
$newalimento= $_POST['alimento3'];
$newconsola= $_POST['consola3'];
$newhora= $_POST['hora3'];
$contraseña= $_POST['contra'];

 if($contraseña=="contraseña"){
    

    $sql= "UPDATE datos SET alimento='$newalimento',consola2='$newconsola',hora='$newhora' WHERE name2='$newname2'";
    $resultado=mysqli_query($con,$sql);
    if(!$resultado){
        echo "Ocurrio algún error";
        echo"<br><a href='modificar2.php'>Regresar a modificar registros</a>";
        echo"<br><a href='registros.php'>Regresar a eliminar registros</a>";
    }else{
        echo "Datos guardados correctamente";
        echo"<br><a href='modificar2.php'>Regresar a modificar registros</a>";
        echo"<br><a href='registros.php'>Regresar a eliminar registros</a>";
    }


}else{
    echo"Contraseña incorrecta";
    echo"<br><a href='modificar2.php'>Regresar a modificar registros</a>";
    echo"<br><a href='registros.php'>Regresar a eliminar registros</a>";
}





?>