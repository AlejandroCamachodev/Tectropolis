<?php
include ('conexion.php');
$sql= "INSERT INTO users values(null,'".$_POST["user"]."','".$_POST["pass"]."','".$_POST["pass2"]."')";
$resultado=mysqli_query($con,$sql)  or die ('Error en el query database');
mysqli_close($con);


echo'<script type="text/javascript">
    alert("Registro exitoso");
    window.location.href="login.html";
    </script>';

?>




