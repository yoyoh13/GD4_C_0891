<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $name = "gd4_c_0891";

    $con = mysqli_connect($host,$user,$pass,$name);

    if(mysqli_connect_errno()){
        echo "Failed to connect : " . mysqli_connect_error();
    }
?>
