<?php
require_once('includes/headertwo.php')
?>
  <div class="con">
    <div class="top-bar p-3 d-flex bg-light">
      <h4 style="font-weight: 700;">profile</span> </h4>
      <!-- <div id="menu-icon"><i class="fas fa-bars"></i></div> -->
    </div>
    <div class="container">
    <div class="row">
      <div class="col-md-4 mt-1 mb-3">
        <div class="card text-center sidebarr">
          <div class="card-body pat">
            <img src="./includes/dp/dp.png" alt="" class="rounded-circle" width="100">
            <div class="rat mt-3">
              <h3><?=$fullname?></h3>


            </div>
          </div>
        </div>
      </div>

      <div class="col-md-8 mt-1">
        <div class="card mb-3 content">
          <h1 class="m-3 pt-3">Profile</h1>
          <div class="card-body px-5">
            <div class="row">
              <table class="table table-bordered mt-4">
                <tbody>
                  <tr>
                    <td><label for="firstName">name<p</label></td>
                    <td><?=$fullname?></</td>
                  </tr>
                  <tr>
                    <td><label for="email">Email Address *</label></td>
                    <td><?=$email?></</td>
                  </tr>
                  <tr>
                    <td><label for="phone">Phone No *</label></td>
                    <td><?=$phone?></</td>
                  </tr>
                  </tr>
                </tbody>

                <a href="../restaurant_updated/profilesettings.php?id=<?= base64_encode($id)?> " class="btn btn-warning"> Edit profile</a>
              </table>
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