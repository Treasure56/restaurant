<?php 
require_once('connection.php');
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "DELETE from booking WHERE id = '$id'";
    $result = mysqli_query($connect, $sql);
    if($result){
        header('location: ../admin.php');
        return false;
    }else{
         header('location: ../admin.php');
        return false;
    }
}
?>