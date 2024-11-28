<!-- header start -->
<?php
include('includes/header.php');
?>
<!-- header end -->



      <!-- start Sidebar -->
       <?php
       include('includes/sidebar.php');
       ?>
      <!-- End Sidebar -->

      <!-- navbar start -->
       <?php
       include('includes/navbar.php');
       ?>
      <!-- navbar end -->

    

        <div class="container">
          <div class="page-inner">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Add category
             </button>
           <h2 class="m-3">job Categories</h2>
           <table class="table table-responsive">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Description</td>
                    <td>Icons</td>
                </tr>
            </thead>
            <tbody>
            <?php
      include('config.php');



      $query = "SELECT * FROM category";

      $connect_query = mysqli_query($connection, $query);

      if(mysqli_num_rows($connect_query) > 0){
        


      
      ?>
              <?php
                // $counter = 1;
              while($row = mysqli_fetch_assoc($connect_query)){
          
              
              ?>
                <tr>
                    <td><?php echo $row ['id'] ?></td>
                    <td><?php echo $row ['name'] ?></td>
                    <td><?php echo $row ['description'] ?></td>
                    <td><img height="50px"width="50px" src="<?php echo $row ['icon'] ?>" alt=""></td>
                </tr>
                <?php
                }
              }
              // $counter++;
                ?>
            </tbody>
           </table>
            
          </div>
        </div>

             <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1>Edit Category</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="add_category.php"method="POST"enctype="multipart/form-data" class="form-group">
          <label for="name">Name</label>
          <input class="form-control" type="text"name="name"placeholder="Enter Name">
          <label for="description">Description</label>
          <textarea class="row-5 col-10 form-control" name="description"placeholder="Enter description here"></textarea>
          <label for="">Icon</label>
          <input class="form-control" type="file"id="icon" name="icon">
         
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit"name="submit" class="btn btn-primary">Save</button>
            </form>
            </div>
    </div>
  </div>
</div>

       <!-- footer start -->
        <?php
        include('includes/footer.php');
        ?>
       <!-- footer end -->

     
    </div>
      Core JS Files  
    <script src="assets/js/core/jquery-3.7.1.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

    <!-- Chart JS -->
    <script src="assets/js/plugin/chart.js/chart.min.js"></script>

    <!-- jQuery Sparkline -->
    <script src="assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

    <!-- Chart Circle -->
    <script src="assets/js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <script src="assets/js/plugin/datatables/datatables.min.js"></script>

    <!-- Bootstrap Notify -->
    <script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

    <!-- jQuery Vector Maps -->
    <script src="assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
    <script src="assets/js/plugin/jsvectormap/world.js"></script>

    <!-- Sweet Alert -->
    <script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Kaiadmin JS -->
    <script src="assets/js/kaiadmin.min.js"></script>

    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <script src="assets/js/setting-demo.js"></script>
    <script src="assets/js/demo.js"></script>
    <script>
      $("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#177dff",
        fillColor: "rgba(23, 125, 255, 0.14)",
      });

      $("#lineChart2").sparkline([99, 125, 122, 105, 110, 124, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#f3545d",
        fillColor: "rgba(243, 84, 93, .14)",
      });

      $("#lineChart3").sparkline([105, 103, 123, 100, 95, 105, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#ffa534",
        fillColor: "rgba(255, 165, 52, .14)",
      });
    </script>
  </body>
</html>