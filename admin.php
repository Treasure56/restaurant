<?php
require_once('includes/headertwo.php');?>
    <!-- ! Main -->
    <main class="main users chart-page" id="skip-target">
      <div class="container">
        <h2 class="main-title">Admin  <?=$fullname?></h2>
        
        <div class="row">
          <div class="col-lg-12">
           
            <div class="users-table table-wrapper table-responsive">
              <table class=" table">
                  <thead>                
                      <th>S/N</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Appointment Date</th> 
                      <th> People</th>
                      <th>Request</th>
                      <th>Date Created</th>
                      <th>Action</th>
                  </thead>

                    <?php
                        $sql = "SELECT * FROM booking WHERE deleted = 1 ORDER BY id DESC";
                        $res = mysqli_query($connect, $sql);
                        if(mysqli_num_rows($res) > 0){
                            $num = 1; 
                            while($rows = mysqli_fetch_assoc($res)){ 
                    ?>
                   <tbody>
                      <tr>
                            <td><?= $num++ ?></td>
                            <td><?=$rows['name']?></td>
                            <td><?=$rows['email']?></td>
                            <td><?=$rows['dateandtime']?></td>
                            <td><?=$rows['people']?></td>
                            <td><?=$rows['request']?></td>
                            <td><?=$rows['createddate']?></td>
                            <td><a href="includes/deletemsg.php?id=<?=$rows['id']?>" class="btn btn-danger">delete</a></td>
                        </tr>

                        
                   </tbody>
                        <?php } ?>
                    <?php }else{ ?>
                        <tr><td>nothing is here</td></tr>
                    <?php } ?>
              </table>
            </div>
          </div>
          
        </div>
      </div>
    </main>
    <!-- ! Footer -->
    <footer class="footer">
  <div class="container footer--flex">
    <div class="footer-start">
      <p>©Dashboard - <a href=" " target="_blank"
          rel="noopener noreferrer">!!!</a></p>
    </div>
    <ul class="footer-end">
      <li><a href="##">About</a></li>
      <li><a href="##">Support</a></li>
      <li><a href="##">Puchase</a></li>
    </ul>
  </div>
</footer>
  </div>
</div>
<!-- Chart library -->
<script src="./plugins/chart.min.js"></script>
<!-- Icons library -->
<script src="plugins/feather.min.js"></script>
<!-- Custom scripts -->
<script src="js/script.js"></script>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>