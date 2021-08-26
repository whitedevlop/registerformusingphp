<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "emailphp";

    $con = mysqli_connect($server,$user,$password,$db);

    if($con){
        ?>
        <script>
            alert("Connection successful");
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("Connection unsuccessful");
        </script>
        <?php
    }
?>