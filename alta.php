<html>
	<head>
		<title>
			Registro de datos
		</title>
	</head>
	<body>
		<?php
			$nombre =$_POST["txtnombre"];
			$genero =$_POST["txtgenero"];
			$comentario =$_POST["txtgenero"];
			
			$conexion = mysqli_connect("localhost","root","","dia_mujer");
			$consulta = mysqli_query($conexion,"select * from datos;");
		?>
		<br>
		<p>Los datos se registraron con exito</p>
		<br>
		<a href="acceso.php">Regresar</a>
	</body>
</html>