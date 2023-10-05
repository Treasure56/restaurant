<?php
require_once('connection.php');
session_start();

if(isset($_POST['submit'])){
    // die;
    $email = isset($_POST['email'])?trim($_POST['email']): '';
    $password = isset($_POST['password'])?trim($_POST['password']): '';

        $email = mysqli_escape_string($connect, $email);
        $password = mysqli_escape_string($connect, $password);
       
        // compare encrypted password in database with login password
        $new_pass = md5($password);
        $sql = "SELECT * FROM admin WHERE email = '$email' AND password = '$new_pass'";
        $result = mysqli_query($connect, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)){
                session_start();
                $_SESSION['email'] = $row['email'];
                $_SESSION['id'] = $row['id'];

                if (isset($_SESSION['email'])){
                    // $success = "welcome";
                    header('location: ../admin.php');
                }else{
                    $error = "Invalid Email or Password";
                    header('location: ../login.php?error='.$error);
                }
            }
        }else{
            $error = "user does not exist";
            header('location: ../login.php?error='.$error);
        }
        
  
}
?>