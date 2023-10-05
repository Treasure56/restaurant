<?php
require_once('connection.php');
session_start();

if (isset($_POST['submit'])) {
    
    $name = isset($_POST['name'])?trim($_POST['name']):'';
    $phone = isset($_POST['phone'])?trim($_POST['phone']):'';
    $email = isset($_POST['email'])?trim($_POST['email']):'';
    $password = isset($_POST['password'])?trim($_POST['password']):'';
    // echo($name);
    // echo($phone);
    // echo($password);
    // echo($email);
    // die;


    if ($name == "" || $phone == "" || $email == "" || $password == "") {
        $error = 'All fields are required';
        header('Location: ../userregister.php?error=' . $error);
    
    } else {
        $name = sanitize($connect, $name);
        $phone = sanitize($connect, $phone);
        $email = sanitize($connect, $email);
        $today = date('Y-m-d');

        // Use password_hash()
        // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $hashedPassword = md5($password);

        $sqlcheck = "SELECT * FROM user WHERE email = '$email'";
        $resultcheck = mysqli_query($connect, $sqlcheck);

        if (mysqli_num_rows($resultcheck) == 1) {
            $error = 'Email address already taken';
            header('Location: ../userregister.php?error=' . $error);
        } else {
            $sql = "INSERT INTO user(name, phone, email, password, createddate) VALUES('$name', '$phone', '$email', '$hashedPassword','$today')";
            $result = mysqli_query($connect, $sql);
            if ($result) {
                $success = 'Registration successful';
                header('Location: ../userlogin.php?success=' . $success);
            } else {
                $error = 'Error creating account';
                header('Location: ../userregister.php?error=' . $error);
            }
        }
    }
} else {
    $error = 'Unauthorized access';
    header('Location: ../userregister.php?error=' . $error);
}
?>
