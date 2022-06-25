<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product#1</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="whatsap.css">
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
    <a class="navegacion__enlace " href="soporte.html">Technical service</a>
    <a class="navegacion__enlace " href="contactanos.html">Contact us</a>
    
    
</nav>

<main class="contenedor">
   
    <div class="pc1">
    <img class="pc1__imagen" src="img/pc2.png" alt="pc2">
    <div class="pc1__contenido">
    
    <?php
$con=mysqli_connect('localhost','root','','prueba') or die('Error en la conexion servidor');
$query = "SELECT * FROM productos WHERE id_product = 2";
$resultado = $con->query($query);
while ($row = $resultado->fetch_assoc()){
    ?>
<div>
    <p class="productox"><?php echo $row['Nombre']; ?></p>
    <p class="spec"><?php echo $row['Descripcion']; ?></p>
    <h1><?php echo $row['Precio']; ?></h1>
</div>

<?php
}
?>
                 <form action="info_producto.php" method="POST">
                 <select class="formulario__campo" name="Paqueteria" required>
                    <option disabled selected>--Choose an option--</option>
                     <option >Fedex(6-10 business days)--Free--</option>
                     <option>Estafeta(4-5 business days)--$300</option>
                     <option>DHL express(2-3 business days)--$700</option>
                 </select>
                 
                 <input class="formulario__campo" type="number" name ="Cantidad" placeholder="Quantity" min="1" max="4" required>
                 <div>
                 <input class="botonsillo" type="submit" name="enviar" value="Enviar">
                            </div>
                 
                
                

                 </form>
    </div>


</div>
</main>

<footer class="footer">
    <p class="footer__texto">Copyright© 2020-2021,Powertech Advanced Technologies</p >
</footer>

</body>
</html>


