<?php

$con=mysqli_connect('localhost','root','','prueba') or die('Error en la conexion servidor');
$sql= "INSERT INTO envio values(null,'".$_POST["Last_Name"]."','".$_POST["First_Name"]."','".$_POST["Street"]."','".$_POST["Street2"]."','".$_POST["Town_City"]."','".$_POST["Postal_Code"]."','".$_POST["State"]."','".$_POST["Phone"]."')";
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
    <link rel="stylesheet" href="pago.css">
</head>

<body>
<header class="header">
<a href="index.html">
    
<img class="header__logo" src="img/logo5.png" alt="Logotipo"> 
</header>
<nav class="navegacion">
    <a class="navegacion__enlace " href="login.html">Account</a>
    <a class="navegacion__enlace " href="index.html">Store</a> 
    <a class="navegacion__enlace " href="nosotros.html">About us</a>
    <a class="navegacion__enlace " href="soporte.html">Repair</a>
    <a class="navegacion__enlace " href="contactanos.html">Contact us</a>
</nav>


<h1 class="dicho"></h1>




<main class="contenedor sombra">
    <section >
     <form action="pago.php" method="POST" class="formularios">
        <fieldset>    
            <legend>Payment method</legend>
    
        <div class="contenedor-campos">
           
        <div class="campo">
            <label>Cardholder's name</label>
            <input class="input-text" type="text"  name="Name" placeholder="Pancho Lopez" required>
        </div>
        <p>Type:</p>
        <select class="formulario__campo"name="Type_Card">
            <option disabled selected>--Choose an option--</option>
             <option>Visa</option>
             <option>Mastercard</option>
             <option>American Express</option>
             <option>Discover</option>
         </select>
        <div class="campo">
            <label>Card number</label>
            <input class="input-text" type="tel"tabindex="0" name="Card_Number" autocomplete="off" maxlength="16" placeholder="4213123412341234" required>
        </div>
        <div class="campo">
            <label>Expiry date</label>
            <input class="input-text" type="tel" name="Expiry_Date" maxlength="5" placeholder="MM/YY" required>
        </div>
        <div class="campo">
            <label>Security code</label>
            <input class="input-text" type="tel" name="CVC" maxlength="4" placeholder="CVC" required>
        </div>
            </div> <!--contenedor-->
            <br>
            <div>
                <div>
                    <input class="boton" type="submit" name="enviar" value="Enviar">
                </div>
    
           
    
    
    
    
        </fieldset>
    </form>
    
    </section>
    
    
    
    
        </fieldset>
    </form>
    
    </section>
        </main>

</body>






