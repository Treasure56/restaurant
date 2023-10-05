<?php 
  require_once('includes/connection.php');
  if(isset($_GET['fid'])){
    $fid = $_GET['fid'];
    $sql = "SELECT * FROM menu WHERE id = '$fid'";
    $res = mysqli_query($connect, $sql);
    $rows = mysqli_fetch_assoc($res);
    $id = $rows['id'];
    $img = $rows['img'];
    $name = $rows['name'];
    $price = $rows['price'];
    $category = $rows['category'];
    $description = $rows['description'];
    // echo $id;
  }else{
    header('Location: menu.php');
    return false;
  }

  require_once('includes/header.php'); 
?>

<!-- ======= menu  Single ======= -->
    <section class="property-single nav-arrow-b  d-flex">

       

 
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Item Details</title>
    <!-- Include necessary CSS files -->
    <link rel="stylesheet" href="path/to/bootstrap.min.css">
    <link rel="stylesheet" href="path/to/custom.css">
</head>

<body>
    <div class="container mt-5" style="padding-top: 50px;">
        <div class="row">
            <!-- Menu Item Details -->
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <h3 class="title-d"><?=$name?></h3>
                    </div>
                    <img src="includes/post/<?=$img?>" alt="<?=$name?>" class="card-img-top" height="410px" style="object-fit:cover;">
                    <div class="card-body">
                        <h4 class="mb-3">$ <?=number_format($price)?></h4>
                        <p class="mb-4"><?=$description?></p>
                        <ul class="list-unstyled">
                            <li><strong>Category:</strong> <?=$category?></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Delivery Details Form -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h2 class="mb-4">Delivery Details</h2>
                    </div>
                    <div class="card-body">
                    <form action="./includes/orderdetails.php" method="POST" enctype="multipart/form-data">
                    <?php if(isset($_GET['error'])){ ?>
                                <div class="alert alert-danger alert-dismissible">
                                <button class="btn-close" data-bs-dismiss="alert"></button>
                                <p><?=$_GET['error']; ?></p>
                                </div>
                            <?php } else if(isset($_GET['success'])){ ?>
                                <div class="alert alert-success alert-dismissible">
                                <button class="btn-close" data-bs-dismiss="alert"></button>
                                <p><?=$_GET['success']; ?></p>
                                </div>
                            <?php } ?>

                            <div class="form-group">
                                <label for="fullName">Full Name:</label>
                                <input type="text" class="form-control" id="fullName" name="fullName" required>
                                <input type="hidden" name="id" value="<?=$fid?>">
                            </div>
                            <div class="form-group">
                                <label for="phoneNumber">Phone Number:</label>
                                <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="dishname">Dish name:</label>
                                <input type="dishname" class="form-control" id="dishname" readonly value="<?=$name?>" name="Dishname" required>
                            </div>
                            <div class="form-group">
                                <label for="price">price:</label>
                                <input type="price" class="form-control" id="price" readonly value="<?=$price?>" name="price" required>
                            </div>
                             <div class="form-group">
                                <label for="category">category:</label>
                                <input type="category" class="form-control" id="category" readonly value="<?=$category?>" name="category" required>
                            </div>
                            <div class="form-group">
                                <label for="address">Billing Address:</label>
                                <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block" name="submit">Place Order</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include necessary JavaScript files -->
    <script src="path/to/jquery.min.js"></script>
    <script src="path/to/bootstrap.min.js"></script>
</body>

</html>

    
      


            



    </section>


 

</body>

</html>