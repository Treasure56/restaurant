<?php
    require_once('connection.php');
    if(isset($_POST['submit'])){
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $price = isset($_POST['price']) ? $_POST['price'] : '';
        $description = isset($_POST['description']) ? $_POST['description'] : '';
        $mid = $_POST['mid'];
        $img = $_POST['img'];

        if($name == "" || $price == "" || $description == "" || $img == "" ){
            $error = 'All fields are required';
            header('Location: ../edit.php?error='.$error.'&mid='.$mid);
            return false;
        }

        $name = sanitize($connect, $name);
        $price = sanitize($connect, $price);
        $description = sanitize($connect, $description);
        $today = date('Y-m-d');

       
        if($_FILES['file']['name'] != ''){
            $allow = array('png', 'jpeg', 'jpg', 'gif', 'heic');
            $filename = $_FILES['img']['name'];
            $fileTmp = $_FILES['img']['tmp_name'];
            $filesize = $_FILES['img']['size'];
            $fileext = explode('.', $filename);
            $fileActualext = strtolower(end($fileext));
            
            if($filesize < 800000){
                if(in_array($fileActualext, $allow)){
                    $pic = uniqid('',true).'.'.$fileActualext;
                    $location2 = 'post/'.$pic;
                    if(move_uploaded_file($fileTmp, $location2)){

                        $sql = "UPDATE `menu` SET `name` = '$name', `price` = '$price', `description` = '$description', `img` = '$img', `createddate` = '$today'  WHERE `id` = '$mid'";
                    

                        $result = mysqli_query($connect, $sql);
                        if($result){
                            unlink('post/'.$img);
                            $success = 'Post updated';
                            header('Location: ../edit.php?success='.
                            $success.'&pid='.$mid);
                            return false;
                        }else{
                            $error = 'error updating post';
                            header('Location: ../edit.php?error='.$error.'&pid='.$mid);
                            return false;
                        }
                    }else{
                        $error = 'error updating post';
                        header('Location: ../edit.php?error='.$error.'&pid='.$mid);
                        return false;
                    }
                }else{
                    $error = 'upload pictures only';
                    header('Location: ../edit.php?error='.$error.'&pid='.$mid);
                    return false;
                }
            }else{
                $error = 'File uploaded is too large';
                header('Location: ../edit.php?error='.$error.'&pid='.$mid);
                return false;
            }
        }else{
            $sql = "UPDATE `memu` SET `name` = '$name', `price` = '$price', `description` = '$description', `img` = '$img' WHERE `id` = '$mid'";
                    

            $result = mysqli_query($connect, $sql);
            if($result){
                $success = 'Post updated';
                header('Location: ../edit.php?success='.$success.'&mid='.$mid);
                return false;
            }else{
                $error = 'error creating post';
                header('Location: ../edit.php?error='.$error.'&mid='.$mid);
                return false;
            }
        }
    }else{
        header('Location: ../');
        return false;
    }

?>