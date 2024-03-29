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
                      <th>dishname</th>
                      <th>image</th>
                      <th>Price</th>
                      <th>description</th>
                      <th>category</th>
                  </thead>

                    <?php
                        $sql = "SELECT * FROM menu WHERE deleted = 1 ORDER BY id DESC";
                        $res = mysqli_query($connect, $sql);
                        if(mysqli_num_rows($res) > 0){
                            $num = 1; 
                            while($rows = mysqli_fetch_assoc($res)){ 
                    ?>
                   <tbody>
                      <tr>
                            <td><?= $num++ ?></td>
                            <td><?=$rows['name']?></td>
                            <td><img src="includes/post/<?=$rows['img']?>" alt=""></td>
                            <td><?=$rows['price']?></td>
                            <td><?=$rows['description']?></td>
                            <td><?=$rows['category']?></td>
                            <td><?=$rows['createddate']?></td>
                            <td><a href="includes/deletetable.php?id=<?=$rows['id']?>" class="btn btn-danger">delete</a></td>
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
</body>

</html>