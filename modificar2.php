<?php 

	$host ="localhost";
 $user ="id12999946_usuario";
 $pass ="contraseña123X";
 $db="id12999946_basededatos";
 $con = mysqli_connect($host,$user,$pass,$db);

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Registros</title>
	<link rel="stylesheet" href="estilos2.css">
    <link rel="stylesheet" href="estilos3.css">
    <link rel="stylesheet" href="estilos4.css">
</head>
<body>
<nav class="navegacion">
		<ul class="menu">

			<li class="first-item">
				<a href="index.html">
					<img src="img/inicio.jpg" alt="" class="imagen">
					<span class="text-item">Inicio</span>
					<span class="down-item"></span>
				</a>
			</li>

			

			<li>
				<a  href="servicios.html">
					<img src="img/torta.jpg" alt="" class="imagen">
					<span class="text-item">Servicios</span>
					<span class="down-item"></span>
				</a>
			</li>

			<li>
				<a href="apartar.html">
					<img src="img/apartar.jpg" alt="" class="imagen">
					<span class="text-item">Apartar</span>
					<span class="down-item"></span>
				</a>
			</li>

			<li>
				<a href="cambios.html">
					<img src="img/torta2.jpg" alt="" class="imagen">
					<span class="text-item">Modificar/eliminar</span>
					<span class="down-item"></span>
				</a>
			</li>

		</ul>
	</nav>
<br>

	<table border="1" >
		<tr>
			<td class="enc" >Nombre</td>
			<td class="enc" >Alimento</td>
			<td class="enc" >Consola</td>
			<td class="enc" >Hora</td>	
		</tr>

		<?php 
		$sql="SELECT * from datos";
		$result=mysqli_query($con,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['name2'] ?></td>
			<td><?php echo $mostrar['alimento'] ?></td>
			<td><?php echo $mostrar['consola2'] ?></td>
			<td><?php echo $mostrar['hora'] ?></td>
			
		</tr>
	<?php 
	}
	 ?>
	</table>

	
    <div class="form3" >
    <form  action="modificar.php" method="POST">
    <label >MODIFICAR REGISTRO</label>
    <input  type="text" name="modificar" placeholder="Nombre que desea modificar" >
   
    <input  type="text" name="alimento3" placeholder="Nuevo alimento:" >
    <input  type="text" name="consola3" placeholder="Nueva consola:" >
    <input  type="text" name="hora3" placeholder="Nueva hora:" >
    <input  type="text" name="contra" placeholder="Contraseña" >
    <input type="submit" value="modificar" name="btnmodificar">

    </div> 

    </form>
              





<footer>
       
       <div class="container-footer-all">
        
            <div class="container-body">

                <div class="colum1">
                    <h1>Mas informacion del negocio</h1>

                    <p>Este negocio se dedica a la renta de consolas xbox one dentro del local
                    con diversos juegos, tales como Fortnite, Gears of war, FIFA, etc.
                    Además de alimentos como tortas, maruchan, papas, refrescos.</p>

                </div>

                <div class="colum2">

                    <h1>Redes Sociales</h1>

                    <div class="row">
                        <img src="icon/facebook.png">
                        <label>Siguenos en <a class="color2" target="_blank" href="https://www.facebook.com/CrazyGames.Tlax/">Facebook</a></label>
                    </div>
                    
                </div>

                <div class="colum3">

                    <h1>Informacion Contactos</h1>

                    <div class="row2">
                        <img src="icon/house.png">
                        <label><a target="_blank" href="https://www.google.com/maps/place/Calle+2+%26+Calle+35,+La+Loma+Xicohtencatl,+Xicoht%C3%A9ncatl,+90070+Tlaxcala+de+Xicoht%C3%A9ncatl,+Tlax./@19.3039337,-98.2444951,17z/data=!3m1!4b1!4m5!3m4!1s0x85cfd94211133b71:0x2f4b5d91381fdcb4!8m2!3d19.3039337!4d-98.2423064">Calle 2 & Calle 35
                        La loma Xicohtencatl,Xicohtencatl
                        90070 Tlaxcala de Xicohtencatl, Tlax.</a>
                        </label>
                    </div>

                    <div class="row2">
                        <img src="icon/smartphone.png">
                        <label>246 462 2630</label>
                    </div>

                    <div class="row2">
                        <img src="icon/contact.png">
                         <label>
                         mr.crazy-games@hotmail.com</label>
                    </div>

                </div>

            </div>
        
        </div>
        
        <div class="container-footer">
               <div class="footer">
                    <div class="copyright">
                        © 2020 Todos los Derechos Reservados | <a href="">Gussx03</a>
                    </div>

             
                </div>

            </div>
        
    </footer>
</body>
