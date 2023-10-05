<?php 
require_once('connection.php');
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "DELETE from corder WHERE id = '$id'";
    $result = mysqli_query($connect, $sql);
    if($result){
        header('location: ../order.php');
        return false;
    }else{
         header('location: ../order.php');
        return false;
    }
}
?>