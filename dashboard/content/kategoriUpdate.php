<?php
   if(!defined('INDEX')) die("");

   $query = mysqli_query($con, "UPDATE kategori_mobil SET
      tipe = '$_POST[tipe]'
   WHERE kategori_id='$_POST[id]'");

   if($query){
      echo "Data berhasil disimpan!";
      echo "<meta http-equiv='refresh' content='1; url=?hal=kategori'>";
   }else{
      echo "Tidak dapat menyimpan data!<br>";
      echo mysqli_error();
   }
?>