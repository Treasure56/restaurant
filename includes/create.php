<?php
    require_once('connection.php');
    if(isset($_POST['create'])){
        // print_r($_POST);
        // die;
        $name = isset($_POST['dishName']) ? $_POST['dishName'] : '';
        $price = isset($_POST['price']) ? $_POST['price'] : '';
        $category = isset($_POST['category']) ? $_POST['category'] : '';
        $description = isset($_POST['description']) ? $_POST['description'] : '';
        // $img = isset($_POST['image']) ? $_POST['image'] : '';
        // $adminid = $_POST['adminid'];

        if($name == "" || $price == "" || $description == "" || $category == ""){
            $error = 'All fields are required';
            header('Location: ../dashboard.php?error='.$error);
            return false;
        }

        $name = sanitize($connect, $name);
        $price = sanitize($connect, $price);
        $description = sanitize($connect, $description);
        $category = sanitize($connect, $category);
        // $img = sanitize($connect, $img);
        $today = date('Y-m-d');

       
        if(isset($_FILES['image'])){
            $allow = array('png', 'jpeg', 'jpg', 'gif', 'heic');
            $filename = $_FILES['image']['name'];
            $fileTmp = $_FILES['image']['tmp_name'];
            $filesize = $_FILES['image']['size'];
            $fileext = explode('.', $filename);
            $fileActualext = strtolower(end($fileext));
            
            if($filesize < 800000){
                if(in_array($fileActualext, $allow)){
                    $pic = uniqid('',true).'.'.$fileActualext;
                    $location2 = 'post/'.$pic;
                    if(move_uploaded_file($fileTmp, $location2)){
                    
                        $sql = "INSERT INTO `menu`(`name`, `price`, `description`, `img`, `category`, `createddate`) VALUES('$name', '$price', '$description', '$pic', '$category', $today)";
                        $result = mysqli_query($connect, $sql);
                        if($result){
                            $success = 'Post Created';
                            header('Location: ../upload.php?success='.$success);
                            return false;
                        }else{
                            $error = 'error creating post';
                            header('Location: ../upload.php?error='.$error);
                            return false;
                        }
                    }else{
                        $error = 'error uploading file';
                        header('Location: ../upload.php?error='.$error);
                        return false;
                    }
                }else{
                    $error = 'upload pictures only';
                    header('Location: ../upload.php?error='.$error);
                    return false;
                }
            }else{
                $error = 'File uploaded is too large';
                header('Location: ../upload.php?error='.$error);
                return false;
            }
        }
    }else{
        $error = 'unauthorized access';
        header('Location: ../login.php?error='.$error);
        return false;
    }

?>