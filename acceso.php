<html>
	 <head>
		<title>
			acceso a BD Mysql
		</title>
	</head>
	<body>
		<h1 style= "color: darkgrey;">Acceso a BD Mysql</h1>
		<form name ="frmalta" action ="alta.php" method ="post">
			<table class ="tablaalta">
				<tr>
					<td colspan="2"> Registro:</td>
				<tr>
				<tr> 
					<td>nombre:</td>
					<td><input type="text" name ="txtnombre" requiered ="requiered"></td>
				</tr>
				<tr>
					<td>genero:</td>
					<td><input type="text" name ="txtgenero" requiered ="requiered"></td>
				</tr>
				<tr>
					<td>comentario:</td>
					<td><input type="text" name ="txtgenero" requiered ="requiered"></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" value="Guardar"></td>
				</tr>
			</table>
		</form>
		<?php
			$conexion = mysqli_connect('localhost','root','','dia_mujer');
			$consulta = mysqli_query($conexion,"select * from datos;");
			if (mysqli_num_rows($consulta) > 0){
				echo "<table border =1>";
				echo "<tr><th colspan =4> Datos en BD</th></tr>";
				echo "<tr><th>nombre</th><th>genero</th><th>comentario</th></tr>";
				while($registro = mysqli_fetch_array($consulta)){
					echo "<tr>";
					echo "<td>".$registro["nombre"]."</td>";
					echo "<td>".$registro["genero"]."</td>";
					if(txtgenero == "femenino")
					{
						echo '<font color="darkred">.$registro["comentario"].</font>';
					}
					echo "<td>".$registro["comentario"]."</td>";
				?>
		<?php
				}
			}
		?>
	</body>
</html>
