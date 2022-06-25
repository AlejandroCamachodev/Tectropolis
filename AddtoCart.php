<?php 
   session_start();
   $message = new stdClass();
    
   if(!isset($_SESSION['id'])){
        $message->status=FALSE;
        $message->detail="Please log in";
        $message->openLogin=true;
   }else{
       include('../connection.php');

       $idUser = $_SESSION['id'];

       $idProduct = $_POST['id'];
       
       $sql = "INSERT INTO orders(id_user, id_product, date, status, user_address, user_tel) VALUES ($idUser, $idProduct, now(), 1, '', '')";

       $res = mysqli_query($conn, $sql);

    if($res){
        $message->status=true;
        $message->detail="Product added succesfully";
    }else{
        $message->status=false;
        $message->detail="Product could not be added succesfully";
    }
   }

   header('Content-type: application/json');

   echo json_encode($message);

?>