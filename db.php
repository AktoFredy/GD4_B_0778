<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $name = "GD4_B_0778";

    $con = mysqli_connect($host,$user,$pass,$name);

    if(mysqli_connect_errno()){
        echo "Failde to connect : " . mysqli_connect_error();
    }
?>