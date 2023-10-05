<?php require_once('includes/headertwo.php'); ?>
  <style>
    /* CSS for hiding and showing the sidebar */
    .box-collapse {
      position: fixed;
      top: 0;
      right: -250px; /* Hidden position */
      width: 250px;
      height: 100%;
      background-color: #333;
      transition: right 0.3s ease-in-out;
    }

    .sidebar-open {
      right: 0; /* Shown position */
    }

    /* CSS for title and close icon in the sidebar */
    .title-box-d {
      display: flex;
      justify-content: space-between; /* Align title and close icon */
      padding: 10px;
    }
   </style>

 

  <!-- Main Content Section -->
  <main id="main">
    <section class="container" style="margin-top: 2%;">
      <div class="row">
        <div class="col-md-12">
          <h3>Add Menu Item</h3>
          <p>Fill the form below to add a new menu item.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
                <form action="includes/create.php" method="POST" enctype="multipart/form-data">
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
              <label for="">Dish Name</label>
              <input type="text" class="form-control" name="dishName" id="">
              <!-- <input type="text" class="form-control" name="adminid" id=""> -->
            </div>
            <div class="form-group">
              <label for="">Price</label>
              <input type="text" class="form-control" name="price" id="">
            </div>
            <div class="form-group">
              <label for="">Description</label>
              <textarea name="description" id="" cols="30" rows="5" class="form-control"></textarea>
            </div>

            <div class="form-group">
              <label for="category">category</label>
             <select name="category" id="" class=" col-md-12 form-control" cols="30">
              <option value="Breakfast">breakfast</option>
              <option value="Launch">lunch</option>
              <option value="Dinner">dinner</option>
             </select>
            </div>
            <div class="form-group">
              <label for="">Image</label>
              <input type="file" class="form-control" name="image" id="">
            </div>
            
            <div class="form-group mt-3">
              <button class="btn" name="create" style="background-color: #FEA31B;">Add Item</button>
            </div>
          </form><br><br>
        </div>
      </div>
    </section>
  </main><!-- End Main Content Section -->

  <!-- Include Bootstrap and other scripts here -->
  <script src="path-to-your-bootstrap-js-file.js"></script>
  <script>
    document.getElementById("toggleSidebar").addEventListener("click", function() {
      document.querySelector(".box-collapse").classList.toggle("sidebar-open");
    });

    document.getElementById("closeSidebar").addEventListener("click", function() {
      document.querySelector(".box-collapse").classList.remove("sidebar-open");
    });
  </script>
</body>
</html>



    
</body>
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

<script src="./plugins/chart.min.js"></script>
<!-- Icons library -->
<script src="plugins/feather.min.js"></script>
<!-- Custom scripts -->
<script src="js/script.js"></script>
</html>