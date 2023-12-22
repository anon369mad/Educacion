
<?php
include('conect.php');
$usuario=$_POST["user"];
$contraseña=$_POST["pass"];
$pass="";
$n="";

	if ($usuario=="")
	{
		header("location:index.php?val=Usuario no valido");
	}
	elseif($contraseña=="")
		{
			header("location:index.php?val=Contraseña no valida&val1=$usuario");
		}
		else
		{

			/* crear una sentencia preparada */
			  $query="SELECT * FROM usuarios WHERE UserName='".$usuario."' and UserPass='".$contraseña."'";
			  $result = mysqli_query($conexion,$query);

			  $res = mysqli_fetch_array($result);
              $ruta=$res['UserImg'];
              $ubicacion=$res['UserUbic'];

     		if ($result->num_rows > 0)
				 {

					      session_start();
					      $_SESSION['usuario']=$usuario;
					          $_SESSION['ruta']=$ruta;
                                  $_SESSION['ubicacion']=$ubicacion;
					    if ($res['UserCharge']=="Inspector") {

 header("Location:inspect.php");
}

if ($res['UserCharge']=="Supervisor") {

 header("Location:Supervisor.php");
}

if ($res['UserCharge']=="Portero") {

 header("Location:Portero.php");

}

				  }
				 elseif($n=="")
				 {
					 header("location:index.php?val=Usuario o contraseña Invalidas");
					 
				 }
			 }


?>