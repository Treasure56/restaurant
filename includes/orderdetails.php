<?php
require_once('connection.php');
// session_start();

if (isset($_POST['submit'])) {
    $fullname = isset($_POST['fullName'])?trim($_POST['fullName']):'';
    $phone = isset($_POST['phoneNumber'])?trim($_POST['phoneNumber']):'';
    $email = isset($_POST['email'])?trim($_POST['email']):'';
    $dishname = isset($_POST['Dishname'])?trim($_POST['Dishname']):'';
    $price = isset($_POST['price'])?trim($_POST['price']):'';
    $category = isset($_POST['category'])?trim($_POST['category']):'';
    $address = isset($_POST['address'])?trim($_POST['address']):'';
    $fid = $_POST['id'];
  

    if ($fullname == ""  || $phone == "" || $email == "" || $dishname == "" || $price == "" || $category == "" || $address == "") {
        $error = 'All fields are required';
        header('Location: ../menu-single.php?fid=.&error=' . $error . '&fid=' .$fid);
    
    } else {
        $fullname = sanitize($connect, $fullname);
        $phone = sanitize($connect, $phone);
        $email = sanitize($connect, $email);
        $dishname = sanitize($connect, $dishname);
        $price = sanitize($connect, $price);
        $category = sanitize($connect, $category);
        $address = sanitize($connect, $address);
        $today = date('Y-m-d');

        
        
            $sql = "INSERT INTO corder(fullname, phone, email, dishname, price, category, address, createddate) VALUES ('$fullname', '$phone', '$email', '$dishname', '$price', '$category', '$address', '$today')";
            $result = mysqli_query($connect, $sql);
            if ($result) {
                $success = 'order successful';
                header('Location: ../menu-single.php?success=' . $success . '&fid=' .$fid);
            } else{
                $error = ' Failed';
                header('Location: ../menu-single.php?error=' . $error . '&fid=' .$fid);

            }
    }                         
} 
?>
