<?php
   if(!defined('INDEX')) die("");

   if(file_exists("image/$_GET[foto]")) unlink("image/$_GET[foto]");
   $query = mysqli_query($con, "DELETE FROM mobil WHERE mobil_id='$_GET[id]'");

   if($query){
      echo "Data berhasil dihapus!";
      echo "<meta http-equiv='refresh' content='1; url=?hal=mobil'>";
   }else{
      echo "Tidak dapat menyimpan data!<br>";
      echo mysqli_error();
   }
?>