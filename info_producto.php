<?php
include ('conexion.php');
$sql= "INSERT INTO info_producto values(null,'".$_POST["Paqueteria"]."','".$_POST["Cantidad"]."')";
$resultado=mysqli_query($con,$sql)  or die ('Error en el query database');
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
    <link rel="stylesheet" href="envio.css">
    <link rel="stylesheet" href="whatsap.css">
</head>

<body>
    <!-- BOTON DE WHATSAPP-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a href="https://wa.me/526647313057" class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
    </a>
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
    <a class="navegacion__enlace " href="social.html">Social media</a>
</nav>


<h1 class="dicho">Shipping Address</h1>




<main class="contenedor sombra">
    <section>
        <form action="envio.php" method="POST" class="formularios">
        <fieldset>    
    
        <div class="contenedor-campos">

            
            
                <div class="campo">
                <label>Last Name</label>
                <input class="input-text" type="text" name="Last_Name" placeholder="Lopez" required>
                </div>

                <div class="campo">
                    <label>First Name</label>
                    <input class="input-text" type="text" name="First_Name" placeholder="Pancho" required>
                    </div>
    
                <div class="campo">
                <label>Street</label>
                <input  class="input-text" type="text" name="Street" placeholder="" required>
                </div>

                     <div class="campo">
                    <label>Street 2</label>
                    <input  class="input-text" type="text" name="Street2" placeholder="" required>
                    </div>
                    <div class="campo">
                        <label>Town City</label>
                        <input  class="input-text" type="text" name="Town_City" placeholder="" required>
                        </div>

                        <div class="campo">
                            <label>Postal code</label>
                            <input  class="input-text" type="tel" name="Postal_Code" placeholder="" required>
                            </div>

                            <div class="campo">
                                <label>State/Province</label>
                                <input  class="input-text" type="text" name="State" placeholder="" required>
                                </div>

                            <div class="campo">
                            <label>Phone number</label>
                            <label></label>
                            <input  class="input-text" type="tel" name="Phone" placeholder="6641234567" required maxlength="10">
                            </div>
                            </div> <!--contenedor-->
                    
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

