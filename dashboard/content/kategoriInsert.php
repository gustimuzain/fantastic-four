<?php
   if(!defined('INDEX')) die("");

   $query = mysqli_query($con, "INSERT INTO kategori_mobil SET
      tipe = '$_POST[tipe]',
      jumlah = '$_POST[jumlah]',
      bagasi = '$_POST[bagasi]'
   ");

   if($query){
      echo '<div class="alert alert-success" role="alert">Data berhasil disimpan</div>';
      echo "<meta http-equiv='refresh' content='1; url=?hal=kategori'>";
   }else{
      echo '<div class="alert alert-danger" role="alert">Tidak dapat menyimpan data</div>';
      echo mysqli_error();
   }
?>