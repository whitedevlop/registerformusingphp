<?php

$username = "root";//from 'config.inc.php' file
$password = ""; //from 'config.inc.php' file
$server = "localhost"; //servername i.e. available in config.php
$db = "emailphp"; //name of the database created in phpmyadmin

$con = mysqli_connect($server, $username, $password, $db); //'$con' is a variable used to store server, username,password, database for other necessary purpose

if($con){
    ?>
    <script>
        alert('connection successful');
    </script>
    <?php
}else{
    ?> 
    <script>
        alert("Connection unsuccessfull")
    </script>
    <?php
}

?> 