<?php
require_once('connection.php');
session_start();

if(isset($_POST['submit'])){
    $fullname = isset($_POST['fullname'])?trim($_POST['fullname']): '';
    $phone = isset($_POST['phone'])?trim($_POST['phone']): '';
    $email = isset($_POST['email'])?trim($_POST['email']): '';
    $dishname = isset($_POST['dishname'])?trim($_POST['dishname']): '';
    $price = isset($_POST['price'])?trim($_POST['price']): '';
    $category = isset($_POST['category'])?trim($_POST['category']): '';
    $address = isset($_POST['address'])?trim($_POST['address']): '';

    
    if (empty($error)) {
        $email = mysqli_escape_string($connect, $email);
        $password = mysqli_escape_string($connect, $password);
        // compare encrypted password in database with login password
        $new_pass = md5($password);
        $sql = "SELECT * FROM user WHERE email = '$email' AND passwords = '$new_pass'";

        $result = mysqli_query($connect, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)){
                session_start();
                $_SESSION['email'] = $row['email'];
                $_SESSION['id'] = $row['id'];

                if (isset($_SESSION['email'])){
                    $success = "welcome";
                    header('location: ../userdashboard.php');
                }else{
                    $error = "Invalid Email or Password";
                    header('location: ../userlogin?error='.$error);
                }
            }
        }else{
            $erro = "user does not exist";
            header('location: ../login?error='.$error);
        }
        
    }else{
        $error = 'unauthorized access';
        header('Location: ../userregister.php?error='.$error);
        return false;
    }
}
?>