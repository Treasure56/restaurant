<?php require_once('includes/header.php'); 
 require_once('includes/connection.php');
 ?>



<style>
  .select-dish-btn {
    width: 90px;
    background-color: #FEA116;
    border: none;
    cursor: pointer;
  }

  .select-dish-btn.selected {
    background-color: green; /* You can customize the style for selected dishes */
  }
</style>

</style>


            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Food Menu</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Menu</li>
                        </ol>
                    </nav>
                </div>
            </div>
        
        <!-- Navbar & Hero End -->


        <!-- Menu Start -->
        <div class="container-xxl py-5" style="margin-bottom:200px;">
            <div class="container" style="padding-bottom:50px;">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
                    <h1 class="mb-5">Most Popular Items</h1>
                </div>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1" name="breakfast">
                                <i class="fa fa-coffee fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Popular</small>
                                    <h6 class="mt-n1 mb-0">Breakfast</h6>
                                </div>
                            </a>
                        </li>
                        <?php
                            if(isset($_POST['']))
                        ?>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                                <i class="fa fa-hamburger fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Special</small>
                                    <h6 class="mt-n1 mb-0">Launch</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                                <i class="fa fa-utensils fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Lovely</small>
                                    <h6 class="mt-n1 mb-0">Dinner</h6>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">

                            <?php
                            $sql = "SELECT * FROM menu WHERE category = 'Breakfast' AND deleted = 1 ORDER BY id DESC";
                            $res = mysqli_query($connect, $sql);
                            if(mysqli_num_rows($res) > 0){
                                while($rows = mysqli_fetch_assoc($res)){
                                $id = $rows['id'];
                                $name = $rows['name'];
                                $price = $rows['price'];
                                $description = $rows['description'];
                                $img = $rows['img'];
                                $category = $rows['category'];
                               
                            ?>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="../restaurant_updated/includes/post/<?=$img?>" alt="" style="width: 80px;">
                                        
                                        <a href="menu-single.php?fid=<?=$id?>"> view menu</a>
                                                  
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span><?=$name?></span>
                                                <span class="text-primary">$ <?=number_format($price)?></span>
                                            </h5>
                                            <small class="fst-italic"><?=$description?></small>
                                           
                                        </div>
                                    </div>
                                </div>
                                <?php } }else{ ?>

                                <div class="col-md-4">
                                <p>no item uploaded yet</p>
                                </div>

                                <?php } ?>
                               
                            </div>
                        </div>

                        <div id="tab-2" class="tab-pane fade show p-0 ">
                            <div class="row g-4">

                            <?php
                            $sql = "SELECT * FROM menu WHERE category = 'Launch' AND deleted = 1 ORDER BY id DESC";
                            $res = mysqli_query($connect, $sql);
                            if(mysqli_num_rows($res) > 0){
                                while($rows = mysqli_fetch_assoc($res)){
                                $id = $rows['id'];
                                $name = $rows['name'];
                                $price = $rows['price'];
                                $description = $rows['description'];
                                $img = $rows['img'];
                                $category = $rows['category'];
                               
                            ?>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="../restaurant_updated/includes/post/<?=$img?>" alt="" style="width: 80px;">

                                               <a href="menu-single.php?fid=<?=$id?>"> view menu</a>

                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span><?=$name?></span>
                                                <span class="text-primary">$ <?=number_format($price)?></span>
                                            </h5>
                                            <small class="fst-italic"><?=$description?></small>

                                          
                                        </div>
                                    </div>
                                </div>
                                <?php } }else{ ?>

                                <div class="col-md-4">
                                <p>no item uploaded yet</p>
                                </div>

                                <?php } ?>
                               
                            </div>
                        </div>

                        <div id="tab-3" class="tab-pane fade show p-0 ">
                            <div class="row g-4">

                            <?php
                            $sql = "SELECT * FROM menu WHERE category = 'Dinner' AND deleted = 1 ORDER BY id DESC";
                            $res = mysqli_query($connect, $sql);
                            if(mysqli_num_rows($res) > 0){
                                while($rows = mysqli_fetch_assoc($res)){
                                $id = $rows['id'];
                                $name = $rows['name'];
                                $price = $rows['price'];
                                $description = $rows['description'];
                                $img = $rows['img'];
                                $category = $rows['category'];
                               
                            ?>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="../restaurant_updated/includes/post/<?=$img?>" alt="" style="width: 80px;">

                                        <a href="menu-single.php?fid=<?=$id?>"> view menu</a>

                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span><?=$name?></span>
                                                <span class="text-primary">$ <?=number_format($price)?></span>
                                            </h5>
                                            <small class="fst-italic"><?=$description?></small> 

                                            
                                        </div>
                                    </div>
                                </div>
                                <?php } }else{ ?>

                                <div class="col-md-4">
                                <p>no item uploaded yet</p>
                                </div>

                                <?php } ?>
                               
                            </div>
                        </div>

                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->
        

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Company</h4>
                        <a class="btn btn-link" href="">About Us</a>
                        <a class="btn btn-link" href="">Contact Us</a>
                        <a class="btn btn-link" href="">Reservation</a>
                        <a class="btn btn-link" href="">Privacy Policy</a>
                        <a class="btn btn-link" href="">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Location, City, Country</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href="https://freewebsitecode.com/"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://facebook.com/freewebsitecode"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://youtube.com/freewebsitecode"><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://freewebsitecode.com"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Opening</h4>
                        <h5 class="text-light fw-normal">Monday - Saturday</h5>
                        <p>09AM - 09PM</p>
                        <h5 class="text-light fw-normal">Sunday</h5>
                        <p>10AM - 08PM</p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Newsletter</h4>
                        <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="https://freewebsitecode.com">Your Site Name</a>, All Right Reserved. 
							
							
							Designed By <a class="border-bottom" href="https://freewebsitecode.com">Free Website Code</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <script src="js/main.js"></script>




<script>
  // Initialize an array to store selected dish IDs
  var selectedDishes = [];

  // Function to toggle the selection of a dish
  function toggleDishSelection(dishId) {
    var index = selectedDishes.indexOf(dishId);
    if (index === -1) {
      // Dish not selected, add it to the list
      selectedDishes.push(dishId);
    } else {
      // Dish already selected, remove it from the list
      selectedDishes.splice(index, 1);
    }
    updateSelectedDishesUI();
  }

  // Function to update the UI based on selected dishes
  function updateSelectedDishesUI() {
    var buttons = document.querySelectorAll('.select-dish-btn');
    buttons.forEach(function(button) {
      var dishId = button.getAttribute('data-dish-id');
      if (selectedDishes.includes(dishId)) {
        button.classList.add('selected');
      } else {
        button.classList.remove('selected');
      }
    });
  }


  function placeOrder() {
    //  to Send the selected dish IDs to the server using AJAX
    $.ajax({
      type: 'POST',
      url: 'process_order.php', 
      data: { selectedDishes: selectedDishes },
      success: function(response) {
        // Handle the response from the server, e.g., show a confirmation message
      }
    });
  }

</script>

</body>

</html>