<?php
   if(!defined('INDEX')) die("");

   if(file_exists("image/$_GET[foto]")) unlink("image/$_GET[foto]");
   $query = mysqli_query($con, "DELETE FROM mobil WHERE mobil_id='$_GET[id]'");

   if($query){
      echo '<div class="alert alert-success" role="alert">Data berhasil dihapus</div>';
      echo "<meta http-equiv='refresh' content='1; url=?hal=mobil'>";
   }else{
      echo '<div class="alert alert-danger" role="alert">Tidak dapat menghapus data</div>';
      echo mysqli_error();
   }
?>