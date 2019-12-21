<?php
   if(!defined('INDEX')) die("");

   $query = mysqli_query($con, "INSERT INTO kategori_mobil SET
      tipe = '$_POST[tipe]',
      jumlah = '$_POST[jumlah]',
      bagasi = '$_POST[bagasi]'
   ");

   if($query){
      echo "Data berhasil disimpan!";
      echo "<meta http-equiv='refresh' content='1; url=?hal=kategori'>";
   }else{
      echo "Tidak dapat menyimpan data!<br>";
      echo mysqli_error();
   }
?>