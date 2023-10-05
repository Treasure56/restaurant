<?php
    require_once('connection.php');
    if(isset($_POST['submit'])){
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        // $adminid = $_POST['id'];
        $id = $_POST['id'];

        if($name == "" || $phone == "" || $email == ""  ){
            $error = 'All fields are required';
            header('Location: ../profilesettings.php?error='.$error.'&id='.base64_encode($id));
            return false;
        }

        $name = sanitize($connect, $name);
        $phone = sanitize($connect, $phone);
        $email = sanitize($connect, $email);
    
        $sql = "UPDATE `admin` SET `name` = '$name', `phone` = '$phone', `email` = '$email' WHERE `id` = '$id'";
        $result = mysqli_query($connect, $sql);
        if($result){
            $success = 'profile updated';
            header("Location: ../profilesettings.php?success=".$success.'&id='.base64_encode($id));
            return false;
        }else{
            $error = 'error creating account';
            header('Location: ../profilesettings.php?error='.$error.'&id='.base64_encode($id));
            return false;
        } 
    
    }else{
        $error = 'unauthorized access';
        header('Location: ../profilesettings.php?error='.$error);
        return false;
    }

?>