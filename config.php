<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "fantasticfour";

    $con = mysqli_connect($host, $user, $pass, $db);
    if(mysqli_connect_error()){
        echo "Koneksi gagal : " . mysqli_connect_error();
    }
?>