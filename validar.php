<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña']; 
session_start();
$_SESSION ['usuario'] =$usuario;

include("db.php");

$consulta="SELECT*FROM usuarios where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($connexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:home.php" );
     
}else{
    ?>
    <?php
    include("login.html");
    ?>
    <h1>Error en la autentificacion</h1>
    <?php
}

myqli_from_result($resultado);
mysqli_close($connexion);