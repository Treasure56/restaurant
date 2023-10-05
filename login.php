<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Favicon -->
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
    <title>Document</title>

  <style>
    /* Additional CSS styles if needed */
  </style>
</head>
<body style="background-image: url(./img/images/bg-intro-01.jpg); object-fit: cover; background-position: center;">
  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-md-6">
        <h2 class="text-center text-white">login</h2>
        <p class="text-white">fill the form below to login </p>
        <form action="includes/loginsub.php" method="POST">

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
                  
         
          <div class="mb-3">
            <label for="email" class="form-label  text-white">Email Address</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label  text-white">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary  text-white col-md-12" name="submit">submit</button>
          </div>
          <span>  don't have account ?<a href="../restaurant_updated/register.php"> Create Account</a></span>
        </form>
        <div class="mt-3 text-center" id="confirmation" style="display: none;">
          <p class="text-success  ">Registration successful! You can now log in.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Include Bootstrap and other scripts here -->
  <script src="path-to-your-bootstrap-js-file.js"></script>
  <script>
    document.getElementById('registrationForm').addEventListener('submit', function(event) {
      event.preventDefault();

      // Get form values
      const fullName = document.getElementById('fullName').value;
      const email = document.getElementById('email').value;
      const password = document.getElementById('password').value;
      const confirmPassword = document.getElementById('confirmPassword').value;

      // Simulate registration (replace with actual implementation)
      // For demonstration purposes, just show the confirmation message
      document.getElementById('registrationForm').style.display = 'none';
      document.getElementById('confirmation').style.display = 'block';
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
</html>