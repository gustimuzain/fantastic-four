<?php
    if(!define('INDEX')) die("");

    $halaman = array("dashboard", "mobil", "mobil_tambah",
    "mobil_edit", "mobil_update", "mobil_hapus");

    if(isset($_GET['hal'])) $hal = $_GET['hal'];
    else $hal = "dashboard";

    foreach($halaman as $h){
        if($hal == $h){
            include "content/$h.php";
        break;
        }
    }
?>