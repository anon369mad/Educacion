
<!DOCTYPE html>
<html>
<head>
	<title>Inicio Sesión</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">		
</head>
<body background="img/paisajes-rurales-el-campo.jpg">

	<center>

<div class="card mt-4 bg-transparent rounded mb-3m" style="max-width: 740px;">

  <div class="row no-gutters">
      <div class="col-md-6">
      <div class="card-body bg-transparent">
      
        <h6 class="display-4">Bienvenido al registro de actividad</h6>
        	  <img src="img/la.webp" class="mt-4" alt="...">
      </div>
    </div>
    <div class="col-md-6">
    <img src="img/user.png" class="mt-3"width="175">

                              <form method="post" action="inspect.php">


  <div class="form-group ml-4 mr-4 rounded-pill" >
 
    <input type="text" class="form-control border border-white rounded-pill bg-transparent border-primary text-white mt-4" name="user" placeholder="                            Usuario">

  </div>
  <div class="form-group ml-4 mr-4">
    <input type="password" class="form-control border border-white rounded-pill bg-transparent border-primary text-white" name="pass"placeholder="                         Contraseña">
  </div>
  <div class="form-group form-check">
  </div>
  <div class="container mt-3">
  <input type="submit" value="Inicio"name="Inicio" class="btn btn-primary btn-block mt-3 ">
  <input type="reset"  value="Limpiar" class="btn btn-danger btn-block mb-3 mt-3">
 <small class="mt-3"><a href="main.php" class="text-white btn btn-success">Crear Sesión</a></small> 

  </div>


                                   </form>
    </div>

  </div>
</div>


      </center>
      <!--
      <footer class="footer text-faded text-center py-3 bg-info mt-5 pb-5">
      Copyright @Liceo Bicentenario Agricola</footer>-->
</body>

</html>