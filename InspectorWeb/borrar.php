<?php
include('conect.php');
session_start();
$usuario=$_SESSION['usuario'];

if (isset($_POST['Si'])) {

	header("Location:index.php");
$delete=("DELETE From usuarios WHERE'$usuario'=UserName ");
$delet=mysqli_query($conexion, $delete);

}
if (isset($_POST['No'])) {

	echo "<script>alert('Cancelaste Eliminacion');</script>";
header("Location:index.php");
}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<h4>¿Quieres Eliminar Tu Cuenta?</h4>
<p>Advertencia:-Todo comentario Ingresado quedara de forma prolongada en el sistema.</p>
<form method="POST" class="alert alert-danger">
	
	<input type="submit" name="Si" value="Si">
	<input type="submit" name="No" value="No">
</form>

</body>
</html>