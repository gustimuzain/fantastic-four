<?php
   if(!defined('INDEX')) die("");

   $query = mysqli_query($con, "SELECT * FROM kategori_mobil WHERE kategori_id='$_GET[id]'");
   $data = mysqli_fetch_array($query);
?>

<h2 class="judul">Edit Kategori</h2>
<form method="post" action="?hal=kategoriUpdate">
   <input type="hidden" name="id" value="<?= $data['kategori_id'] ?>">

   <div class="form-group">
      <label for="nama">Tipe</label>   
      <div class="input">
         <input type="text" id="tipe" name="tipe" value="<?= $data['tipe'] ?>">
      </div> 
   </div>

   <div class="form-group">
      <label for="nama">Jumlah</label>   
      <div class="input">
         <input type="text" id="jumlah" name="jumlah" value="<?= $data['jumlah'] ?>">
      </div> 
   </div>

   <div class="form-group">
      <label for="nama">Bagasi</label>   
      <div class="input">
         <input type="text" id="bagasi" name="bagasi" value="<?= $data['bagasi'] ?>">
      </div> 
   </div>

   <div class="form-group">
      <input type="submit" value="Simpan" class="btn btn-primary">
      <input type="reset" value="Batal" class="btn btn-outline-primary m-3" onclick="history.back();">
   </div>
</form>