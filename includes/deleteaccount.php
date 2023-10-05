<?php 
require_once('connection.php');
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "DELETE from admin WHERE id = '$id'";
    $result = mysqli_query($connect, $sql);
    if($result){
        header('location: ../index.php');
        return false;
    }else{
         header('location: ../index.php');
        return false;
    }
}
?>