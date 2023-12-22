<?php

$server="localhost";
$user="root";
$bd="bitacora";

$conexion = mysqli_connect( $server, $user, "" ) or die ("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db( $conexion, $bd) or die ("No se ha podido conectar al servidor de Base de datos");

$fecha1=$_POST['fecha1'];
$fecha2=$_POST['fecha2'];
$lugar=$_POST['Ubicacion'];

if(isset($_POST['generar_reporte']))
{


	// NOMBRE DEL ARCHIVO Y CHARSET
	header('Content-type:application/xls');
	header('Content-Disposition: attachment; filename=usuarios.xls');
	$query="SELECT * FROM anotacion where Ubic='".$lugar."' AND Fecha between '".$fecha1."' AND '".$fecha2."'";
	$result=mysqli_query($conexion, $query);
?>
<meta charset="utf-8">
<table border="1">
	<tr style="background-color:red;">
		<th>Fecha</th>
		<th>Hora</th>
		<th>Funcionario</th>
		<th>Comentario</th>
		<th>Ubicacion</th>
	</tr>
	<?php
		while ($row=mysqli_fetch_array($result)) {
			?>
				<tr>
					<td><?php echo $row['Fecha']; ?></td>
					<td><?php echo $row['Hora']; ?></td>
					<td><?php echo $row['UserName']; ?></td>
					<td><?php echo $row['Comentario']; ?></td>
					<td><?php echo $row['Ubic']; ?></td>
				</tr>	
			<?php
		}
	}
	?>
</table>