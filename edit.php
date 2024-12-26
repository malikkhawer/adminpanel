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
       <?php
       include('config.php');
       ?>

    
    <?php
    if(isset($_GET['user_id'])){
        $user_id = $_GET['user_id'];
        $query = "SELECT * FROM category WHERE id = '$user_id'";
        $query_run = mysqli_query($connection,$query);
        if(mysqli_num_rows($query_run) > 0){
            while($row = mysqli_fetch_assoc($query_run)){
                ?>
                 <div class="container">
                <center>
                <h2>Category Edit</h2>
                  </center>
        <form action="update.php"method="POST"enctype="multipart/form-data" class="form-group">
          <input type="hidden"name="user_id"value="<?php echo $row['id']?>">
          <label for="name">Name</label>
          <input class="form-control" type="text"name="name"value="<?php echo $row['name']?>"placeholder="Enter Name">
          <label for="description">Description</label>
          <textarea class="row-5 col-10 form-control" name="description"value="<?php echo $row['description']?>"placeholder="Enter description here"></textarea>
          <label for="">Icon</label>
          <input class="form-control" type="file"id="icon" name="icon"value="<?php echo $row['icon']?>">
            </div>
            <div class="modal-footer">
                <button type="submit"name="submit" class="btn btn-info" >Update</button>
            </form>
    </div>
                <?php

            }
        }
    }
    
    
    ?>
       
  </body>
</html>