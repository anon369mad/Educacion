<?php
///// CONSULTA A LA BASE DE DATOS /////////////////
$server="localhost";
$user="root";
$bd="bitacora";

$conexion = mysqli_connect( $server, $user, "" ) or die ("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db( $conexion, $bd) or die ("No se ha podido conectar al servidor de Base de datos");


$fe=$_POST['fe'];

$alum="SELECT * FROM anotacion Where Fecha='$fe'";
$resAlumnos=mysqli_query($conexion, $alum);

?>

<html>
  <head>

    <title>Descargar Reportes en Excel desde la BD</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link href="" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body background="img/fondoagua.jpg">
    <header>
      <div class="alert alert-info">
        <center>
      <h2 class="justify-content-center">Descargar Bitacoras</h2>
      </center>
      </div>
    </header>
<center>
<form class="justify-content-center" method="post">
  <input type="text" name="fe" class="align-text-bottom alert alert-danger" value="dd/mm/aaaa">
</form>
</center>


    <section>
      <table class="table text-white">
        <tr class="bg-primary">
          <th>Fecha</th>
          <th>Hora</th>
          <th>Funcionario</th>
          <th>Comentario</th>
          <th>Ubicacion</th>
        </tr>
        <?php
        while ($registroAlumnos = mysqli_fetch_array($resAlumnos))
        {
          echo'<tr class="text-white">
             <td>'.$registroAlumnos['Fecha'].'</td>
             <td>'.$registroAlumnos['Hora'].'</td>
             <td>'.$registroAlumnos['UserName'].'</td>
             <td>'.$registroAlumnos['Comentario'].'</td>
             <td>'.$registroAlumnos['Ubic'].'</td>
             </tr>';
        }
        ?>
      </table>
    </section>
<footer class="bg-dark fixed-relative">
<div class="container">
 <div class="row">
  <div class="col-lg-6 col-md-6">
        <form method="post" class="form col" action="reporte.php">

    
     <select name="Ubicacion" class="form-control bg-transparent border border-primary text-primary mb-2 w-25 ">
        <option class="bg-transparent">Internado A</option>
        <option>Internado B</option>
        <option>Internado D</option>
        <option>Portería</option>
     </select>    <br>
             <input type="text" class="alert alert-success" role="alert" name="fecha1"><br>
             <input type="text" class="alert alert-success" role="alert" name="fecha2"><br>
             <input type="submit" name="generar_reporte" class="btn btn-danger" value="Generar Informe">

        </form>
  </div>
  <div class=" text-white col-lg-6 col-md-6 mt-2">
      <li class="nav-item">
        <a class="nav-link" href="#">El formato con el que se obtiene es XLS.</a>
      </li>
       
      <li class="nav-item">
        <a class="nav-link" href="#">Se descargará con el nombre "USUARIOS".</a>
      </li> 

      <li class="nav-item">
        <a class="nav-link" href="#">La aplicacion con la que se abrirá será EXCEL, presionar Sí.</a>
      </li> 
</div>
</div>
</div>
</footer>

  </body>
</html>

