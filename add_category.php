<?php
include('config.php');




if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $description = $_POST['description'];
    $file_name = $_FILES['icon']['name'];
    $tmp_name = $_FILES['icon']['tmp_name'];

    move_uploaded_file($tmp_name, $file_name);

    $query = "INSERT INTO `category` ( `name`, `icon`, `description`) VALUES ('$name', '$file_name','$description')";

    $connection_query = mysqli_query($connection, $query);

    if($connection_query){
        echo "<script>
        alert('Category Added Successfully');
        window.location.href = 'category.php';
        </script>
        ";

    }

}

    ?>

