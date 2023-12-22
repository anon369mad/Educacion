
<?php 
date_default_timezone_set("Chile/Continental");

$server="localhost";
$user="root";
$bd="bitacora";

$fecha=date("d/m/Y");
$hora=date("H:i:s");

$conexion = mysqli_connect( $server, $user, "" ) or die ("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db( $conexion, $bd) or die ("No se ha podido conectar al servidor de Base de datos");


   if(isset($_POST['Inicio'])){

$userb=$_POST['user'];
$pass=$_POST['pass'];

 $elim=("SELECT * FROM usuarios WHERE '".$userb."'= UserName and UserPass='".$pass."'");
 $res=mysqli_query($conexion, $elim);

$col = mysqli_fetch_array( $res);


/*Realidad de lo que quiero hacer-------------------------Recuperar datos en otra tabla*/
   if(mysqli_num_rows($res)>0) {


 $im=("INSERT INTO registro VALUES ('".$userb."','".$col['UserCharge']."','".$fecha."','".$hora."')");
 $lutser=mysqli_query($conexion, $im);

 $cargo=("SELECT UserCharge FROM usuarios WHERE'".$userb."'= UserName");
 $r=mysqli_query($conexion, $cargo);

$columna = mysqli_fetch_array( $r);

if ($columna['UserCharge']=="Inspector") {

 header("Location:inspect.php");









}

if ($columna['UserCharge']=="Supervisor") {

 header("Location:Supervisor.php");
}

if ($columna['UserCharge']=="Portero") {

 header("Location:Portero.php");
}

          }
    else {
  
      echo "<script type='text/javascript'>
           alert('no Existe usuarios');
           </script>";
  
  header("Location:index.php");
  
  }



}

     if (isset($_POST['Guardar'])) {

 $o=("SELECT UserName FROM registro");
 $op=mysqli_query($conexion, $o);

$n = mysqli_fetch_array( $op);

$u=$n['UserName'];


$comment=$_POST['comment'];
$fecha=date("d/m/Y");
$hora=date("H:i:s");

$insert=("INSERT INTO anotacion VALUES ('".$u."','".$comment."','".$fecha."','".$hora."')");
$con=mysqli_query($conexion, $insert);

}


 $go=("SELECT * FROM registro ORDER BY Hora DESC");
 $lop=mysqli_query($conexion, $go);

$na = mysqli_fetch_array( $lop);

$alfin=$na[0];

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



<body background="img/rosa.jpg">

<div class='container mt-2 mb-4'>
 
  <div class='row'>
    <div class='col-12 col-md-10'>

   <h1 class='site-heading text-center text-white d-none d-lg-block'>
    <span class='site-heading-upper text-warning mb-3 ml-5'>Sistema</span><br>
    <span class='site-heading-upper ml-5 mb-5'>Registro de Actividad</span>
  </h1>

    </div>

    <div class='col-6 col-md-2'>
      
  <img class='rounded bg-white nav-link w-50 justify-content-center' src='img/user.png' width=''>

 <p><?php  echo "<p class=''>".$alfin."</p>"; ?></p>
    </div>
  

</div>

  </div>



<div>



<ul class="nav justify-content-center bg-primary">
  <li class="nav-item">
    <a class="nav-link active text-warning pb-3 " href="#">Inicio</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="#">Registros</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="#">Ajustes</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="#" tabindex="-1" aria-disabled="true">No se que colocar</a>
  </li>
</ul>
</div>

<form method="post" action="">
<div class="jumbotron jumbotron-fluid mt-5 border border-primary">
  <div class="container">
  <textarea class="form-control p-5 border-danger" name="comment"  aria-label="With textarea"></textarea></div>
  <center>
  <input type="submit" class="btn btn-success mt-5" name="Guardar" value="Guardar">
   <input type="reset" class="btn btn-danger mt-5" value="Limpiar">
  </center>
</div>
  </form>


</body>
</html>