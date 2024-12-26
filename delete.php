<?php
include('config.php');

$user_id = $_GET['user_id'];

$query = "DELETE FROM category WHERE id = '$user_id'";
$query_run =mysqli_query($connection, $query);

if($query_run){
    echo "<script>
    // alert('Category deleted Successfully');
    window.location.href = 'category.php';
    </script>
    ";
}
else{
    echo "<script>
    // alert('Category can`t deleted Successfully');
    window.location.href = 'category.php';
    </script>
    ";
}


?>