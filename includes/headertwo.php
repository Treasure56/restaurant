<?php
require_once('connection.php');
session_start();
if (isset($_SESSION['email'])) {
 $email = $_SESSION['email'];
 $sql3 = "SELECT * FROM admin WHERE email = '$email'";
$res3 = mysqli_query($connect, $sql3);
if(mysqli_num_rows($res3)){
  $rows3 =mysqli_fetch_assoc($res3);
  $fullname = $rows3['name'];
  $phone = $rows3['phone'];
  $email = $rows3['email'];
  $id = $rows3['id'];
}
}else{
  header('location: ../login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard | Dashboard</title>
  <!-- Favicon -->
  <link rel="shortcut icon" href=" " type="image/x-icon">


  <link href="img/favicon.ico" rel="icon">

      <!-- Google Web Fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">
  
      <!-- Icon Font Stylesheet -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
  
      <!-- Libraries Stylesheet -->
      <link href="lib/animate/animate.min.css" rel="stylesheet">
      <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
      <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
  
      <!-- Customized Bootstrap Stylesheet -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
  
      <!-- Template Stylesheet -->
      <link href="css/style.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/style.min.css">
  <link rel="stylesheet" href="./css/dash.css">
  <link rel="stylesheet" href="./fonts/css/all.css">
</head>

<body>
  <div class="layer"></div>
<!-- ! Body -->
<a class="skip-link sr-only" href="#skip-target">Content</a>
<div class="page-flex">
  <!-- ! Sidebar -->
  <aside class="sidebar " style="background-color:#FEA31B!important;">
    <div class="sidebar-start">
        <div class="sidebar-head">
            <a href="/" class="logo-wrapper" title="Home">
                <span class="sr-only">Home</span>
                <span class="icon logo" aria-hidden="true"></span>
                

            </a>
            <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                <span class="sr-only">Toggle menu</span>
                <span class="icon menu-toggle" aria-hidden="true"></span>
            </button>
        </div>
        <div class="sidebar-body">
            <ul class="sidebar-body-menu">
                <li>
                    <a class="active" href="../restaurant_updated/admin.php"><span class="icon home" aria-hidden="true"></span>Dashboard</a>
                </li>

                <li>
                  <a class="" href="../restaurant_updated/menu.php"><span class="icon home" aria-hidden="true"></span>menu</a>
              </li>

              <li>
                <a class="" href="../restaurant_updated/upload.php"><span class="icon home" aria-hidden="true"></span>upload</a>
            </li>    
            
            <li>
                <a class="" href="../restaurant_updated/order.php"><span class="icon home" aria-hidden="true"></span>orders</a>
            </li> 

            <li>
                <a class="" href="../restaurant_updated/table.php"><span class="icon home" aria-hidden="true"></span>table</a>
            </li> 

             
            <li>
                <a class="" href="../restaurant_updated/profile.php"><span class="icon home" aria-hidden="true"></span>profile</a>
            </li> 
            </ul>
            
        </div>
    </div>
    
</aside>
  <div class="main-wrapper">
    <!-- ! Main nav -->
    <nav class="main-nav--bg">




    <div class="top-bar p-3 d-flex bg-light">
      <h4 style="font-weight: 700;">dashboard</span> </h4>

      <div class="container main-nav">
   
   <div class="main-nav-end">
     <button class="sidebar-toggle transparent-btn justify-" title="Menu" type="button">
       <span class="sr-only">Toggle menu</span>
       <!-- <span aria-hidden="true"> <i class="fa-solid fa-bars"></i></span> -->
     </button>
     
    
     
     <div class="nav-user-wrapper align-item-end justify-content-end" >
       
       <ul class="users-item-dropdown nav-user-dropdown dropdown">
         <li><a href="../restaurant_updated/profile.php">
         <i data-feather="user" aria-hidden="true"></i>
             <span>dashboard</span> 
           </a></li>
         <li><a href="##">
             <i data-feather="settings" aria-hidden="true"></i>
             <span>Account settings</span>
           </a></li>
         <li><a class="danger" href="../restaurant_updated/index.php">
             <i data-feather="log-out" aria-hidden="true"></i>
             <span>Log out</span>
           </a></li>
       </ul>
     </div>
   </div>
 </div>
      
    </div>
 
</nav>