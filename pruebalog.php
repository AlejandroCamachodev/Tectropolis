<?php
$vcorreo = $_POST['user'];
$vpass = $_POST['pass'];

session_start();
$_SESSION=['user']=$vcorreo;

$conexion=mysqli_connect($HOST="localhost","root","",
"prueba");
$consulta= "SELECT * FROM `usuario` WHERE usuario ='".$vcorreo."' and contraseña='".$vpass."'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);
if ($conexion==false)
{
	/*echo "<br> sin conexion";
	die(print_r(sqlsrv_errors(), true));*/
	//die();
	echo"<script> alert ('Intente mas tarde');
	        window.location='index.html';
			</script>";
	die();
}
else{//laconexion fue exitosa{
{
	if($filas){
		header("location:login.html");
	}	
	else{
		?>
		<?php
		include("index.html");
		?>
		<h1 class="bad">correo existente</h1>
		<?php
		
		
	}
}
mysqli_free_result($resultado);
mysql_close($conexion);