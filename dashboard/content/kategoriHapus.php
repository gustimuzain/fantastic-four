<?php
   if(!defined('INDEX')) die("");

   $query = mysqli_query($con, "DELETE FROM kategori_mobil WHERE kategori_id='$_GET[id]'");

   if($query){
      echo '<div class="alert alert-success" role="alert">Data berhasil dihapus</div>';
      echo "<meta http-equiv='refresh' content='1; url=?hal=kategori'>";
   }else{
      echo '<div class="alert alert-danger" role="alert">Tidak dapat menghapus data</div>';
      echo mysqli_error();
   }
?>