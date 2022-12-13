
<?php 

/*session_start();

    $usuario=$_SESSION['usuario'];
     $ubicacion=$_SESSION['ubicacion'];
     $ruta=$_SESSION['ruta'];

date_default_timezone_set("Chile/Continental");
 include('conect.php');
*/
$fecha=date("d/m/Y");
$hora=date("H:i:s");

     if (isset($_POST['Guardar'])) {

$comment=$_POST['comment'];
$fecha=date("d/m/Y");
$hora=date("H:i:s");

if (empty($comment)) 
  {  
echo "<script> alert('Registro Vacio');</script>";
  }

else {
  $insert=("INSERT INTO anotacion VALUES ('".$u."','".$comment."','".$ubicacion."','".$fecha."','".$hora."')");
$con=mysqli_query($conexion, $insert);
}

}

 $o=("SELECT * FROM poreria WHERE Fecha='$fecha' ORDER BY Hora DESC");
 $lop=mysqli_query($conexion, $o);

$na = mysqli_fetch_array( $lop);

$alfin=$na[0];

mysqli_close($conexion);


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/business-casual.min.css" rel="stylesheet">




</head>



<body background="img/rosas.jpg">

<div class='container mt-2 mb-4'>
 
  <div class='row'>
    <div class='p-1 col-12 col-md-10'>

   <h1 class='text-center ml-5 text-white d-none d-lg-block pl-5'>
    <span class='text-warning mb-3 ml-5'>Sistema</span><br>
    <span class=' ml-5 mb-5'> Registro Actividad</span>
  </h1>
 </div>
    <div class='col-6 col-md-2 p-1 flex-shrink-1 bd-highlight'>
<center>

<form method="post">

<div class="dropdown bg-transparent">
  <button class="btn btn-transparent dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <?php echo "<img class='rounded-pill bg-white nav-link w-75 ml-3' src='$ruta'>" ?>
      <p><?php  echo "<p class=''>".$usuario."</p>"; ?></p>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
<input class="dropdown-item" type="submit" name="Cerrar" value="Cerrar">
        <a href="borrarp.php"class="dropdown-item" type="submit" name="Eliminar">Eliminar Cuenta</a>
  </div>
</div>

</form>
</center>
 </div>
  
 

</div>

  </div>



<div>



<ul class="nav justify-content-center bg-primary">
  <li class="nav-item">
    <a class="nav-link active text-warning pb-3 " href="#">Inicio</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="registro.php">Registros</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="#">Ajustes</a>
  </li>
  <li class="nav-item">
  </li>
</ul>
</div>

<form method="post" action="">
<div class="jumbotron jumbotron-fluid mt-5 alert alert-success" role="alert">
  <div class="container">
  <textarea class="form-control p-5 border-danger" name="comment"  aria-label="With textarea"></textarea></div>
  <center>
  <input type="submit" class="btn btn-success mt-5" name="Guardar" value="Guardar">
   <input type="reset" class="btn btn-danger mt-5" value="Limpiar">
  </center>
</div>
  </form>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>