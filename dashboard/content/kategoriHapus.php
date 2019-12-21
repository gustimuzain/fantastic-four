<?php
   if(!defined('INDEX')) die("");

   $query = mysqli_query($con, "DELETE FROM kategori_mobil WHERE kategori_id='$_GET[id]'");

   if($query){
      echo "Data berhasil dihapus!";
      echo "<meta http-equiv='refresh' content='1; url=?hal=kategori'>";
   }else{
      echo "Tidak dapat menyimpan data!<br>";
      echo mysqli_error();
   }
?>