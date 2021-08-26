<?php

include 'connection.php';

$id = $_GET['idth'];

$deletequery = "delete from jobsregistration where id=$id";
$query = mysqli_query($con,$deletequery);

if($query){
    ?>
    <script>
        alert("Deleted successfully");
    </script>
    <?php
}else{
    ?>
    <script>
        alert("not deleted");
    </script>
    <?php
}
header('location:display.php');

?>  