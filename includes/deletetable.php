<?php 
require_once('connection.php');
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "DELETE from menu WHERE id = '$id'";
    $result = mysqli_query($connect, $sql);
    if($result){
        header('location: ../table.php');
        return false;
    }else{
         header('location: ../table.php');
        return false;
    }
}
?>