<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "prueba";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn)
{
    die("No hay conexion: " .mysqli_connect_error());
}

$vuser = $_POST["user"];
$vpass = $_POST["pass"];

$query = mysqli_query($conn,"SELECT * FROM users WHERE correo = '".$vuser."' and contraseña = '".$vpass."'");
$nr = mysqli_num_rows($query);

if($nr == 1)
{

    echo'<script type="text/javascript">
    alert("Ingreso exitoso");
    window.location.href="index.html";
    </script>';
}
else if ($nr == 0)
{
    echo'<script type="text/javascript">
    alert("Verifica tus datos y vuelve a intentarlo");
    window.location.href="login.html";
    </script>';
}



?>