<?php

$con=mysqli_connect('localhost','root','','prueba') or die('Error en la conexion servidor');
$sql= "INSERT INTO formulario2 values(null,'".$_POST["Name"]."','".$_POST["Phone"]."','".$_POST["Email"]."','".$_POST["Message"]."')";
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
    <link rel="stylesheet" href="confirmation.css">
</head>

<body>
<header class="header">
<a href="index.html">
    
<img class="header__logo" src="img/logo5.png" alt="Logotipo"> 
</header>



<h1 class="dicho">Thank you.</h1>
<h2 class="dicho">We've received your message and appreciate you reaching out.</h2>
<h2 class="dicho">We will contact you as soon as possible.</h2>
    <footer class="footer">
        <p class="footer__texto">CopyrightÂ© 2020-2021,Powertech Advanced Technologies</p >
    </footer>
    
</body>
