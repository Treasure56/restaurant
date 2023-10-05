<?php
require_once('includes/headertwo.php');
if(isset($_GET['id'])){
  $adminid = base64_decode($_GET['id']);
  // echo $adminid;
  // die;
  $sql4 = "SELECT * FROM admin WHERE id = '$adminid'";
  $res4 = mysqli_query($connect, $sql4);
    $rows3 =mysqli_fetch_assoc($res4);
    $fullname = $rows3['name'];
    $phone = $rows3['phone'];
    $email = $rows3['email'];
    $id = $rows3['id'];
  }

?>
  <div class="co">
    
    
    <div class="container">
    <div class="row">
      <div class="col-md-4 mt-1 mb-3">
        <div class="card text-center sidebarr">
          <div class="card-body pat">
          <img src="includes/dp/dp.png" alt="" width="100" height="100" class="rounded-circle">
            <div class="rat mt-3">
              <h6><?=$fullname?></h6>
              <h6><?=$email?></h6>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-8 mt-1">
        <div class="card mb-3 content">
          <h1 class="m-3 pt-3">Edit account</h1>
          <div class="card-body px-5">
            <form class=" p-lg-5 col-12 row g-3" action="includes/settingssub.php" method="POST" enctype="multipart/form-data">

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
                <div class="col-lg-6">
                  <label for="Name" class="form-label">First name *</label>
                  <input type="text" class="form-control border" value="<?=$fullname?>" name="name" />
                  <input type="hidden" name="id" value="<?=$id?>">
                </div>
                <div class="col-lg-6">
                  <label for="userName" class="form-label">Email Address *</label>
                  <input type="email" class="form-control border" value="<?=$email?>" name="email" />
                </div>
                <div class="col-lg-12">
                  <label for="userName" class="form-label">Phone No *</label>
                  <input type="phone" class="form-control border" value="<?=$phone?>" name="phone" />
                </div>

               <div class="col-12">
                 <button class="btn btn-warning" name="submit">Update</button>
               </div>
                
              </form>

            </div>
          </div>
        </div>
      </div>


    </div>
    </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
</body>
<script src="../assets/bootstrap-5.3.0-dist/js/bootstrap.min.js"></script>
<script>
   // side navigation
    
   const sidebar = document.getElementById("sidebar");
        const menuIcon = document.getElementById("menu-icon");

        menuIcon.addEventListener("click", () => {
            sidebar.classList.toggle("show-sidebar");
        });
    
</script>
</html>