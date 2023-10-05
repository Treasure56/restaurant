<?php
require_once('connection.php');
session_start();

if (isset($_POST['submit'])) {
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    if ($name == "" || $phone == "" || $email == "" || $password == "") {
        $error = 'All fields are required';
        header('Location: ../register.php?error=' . $error);
    } else {
        $name = sanitize($connect, $name);
        $phone = sanitize($connect, $phone);
        $email = sanitize($connect, $email);
        $today = date('Y-m-d');

        // Use password_hash()
        $hashedPassword = md5($password);

        $sql = "SELECT * FROM admin WHERE email = ?";
        $stmt = mysqli_prepare($connect, $sql);
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($result && mysqli_num_rows($result) > 0) {
            $error = 'Email address already taken';
            header('Location: ../register.php?error=' . $error);
        } else {
            $sql = "INSERT INTO admin(name, phone, email, password, createddate) VALUES(?, ?, ?, ?, ?)";
            $stmt = mysqli_prepare($connect, $sql);
            mysqli_stmt_bind_param($stmt, "sssss", $name, $phone, $email, $hashedPassword, $today);
            $result = mysqli_stmt_execute($stmt);

            if ($result) {
                $success = 'Registration successful';
                header('Location: ../login.php?success=' . $success);
            } else {
                $error = 'Error creating account';
                header('Location: ../register.php?error=' . $error);
            }
        }
    }
} else {
    $error = 'Unauthorized access';
    header('Location: ../register.php?error=' . $error);
}
?>
