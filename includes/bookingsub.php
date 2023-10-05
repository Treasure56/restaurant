<?php
require_once('connection.php');
session_start();

if (isset($_POST['submit'])) {
    // print_r($_POST);
    // die;
    $name = isset($_POST['name'])?trim($_POST['name']):'';
    $email = isset($_POST['email'])?trim($_POST['email']):'';
    $dateandtime = isset($_POST['dateandtime'])?trim($_POST['dateandtime']):'';
    $people = isset($_POST['people'])?trim($_POST['people']):'';
    $request = isset($_POST['request'])?trim($_POST['request']):'';
  

    if ($name == "" || $email == "" || $dateandtime == "" || $people == "" || $request == "") {
        $error = 'All fields are required';
        header('Location: ../booking.php?error=' . $error);
    
    } else {
        $name = sanitize($connect, $name);
        $email = sanitize($connect, $email);
        $dateandtime = sanitize($connect, $dateandtime);
        $request = sanitize($connect, $request);
        $today = date('Y-m-d');

        
        
            $sql = "INSERT INTO booking(name,  email, people, request, dateandtime, createddate) VALUES('$name', '$email',  '$people', '$request', '$dateandtime', '$today')";
            $result = mysqli_query($connect, $sql);
            if ($result) {
                $success = 'booking successful';
                header('Location: ../booking.php?success=' . $success);
            } else{
                $error = 'Booking Failed';
                header('Location: ../booking.php?error=' . $error);

            }
    }                         
} 
?>
