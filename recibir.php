<?php

$con=mysqli_connect('localhost','root','','prueba') or die('Error en la conexion servidor');
$sql= "INSERT INTO correos values(null,'".$_POST["email"]."')";
$resultado=mysqli_query($con,$sql) or die ('Error en el query database');
mysqli_close($con);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="confirmation2.css">
</head>

<body>
<header class="header">
<a href="index.html">

    <!-- <p class="titulo">Powertech Gaming   </p> -->

 <img class="header__logo" src="img/logo5.png" alt="Logotipo"> 
</header>
<nav class="navegacion">
    <a class="navegacion__enlace " href="login.html">Account</a>
    <a class="navegacion__enlace " href="index.html">Store</a> 
    <a class="navegacion__enlace " href="nosotros.html">About us</a>
    <a class="navegacion__enlace " href="soporte.html">Repair</a>
    <a class="navegacion__enlace " href="contactanos.html">Contact us</a>
    <a class="navegacion__enlace " href="social.html">Social media</a>
</nav>


<header class="header2">
<a href="index.html">
<img class="header2__logo2" src="img/chu.png" alt="Logotipo"> 
</header>
    <footer class="footer">
        <p class="footer__texto">Copyright© 2020-2021,Powertech Advanced Technologies</p >
    </footer>
    
</body>
