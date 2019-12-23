<?php
   if(!defined('INDEX')) die("");
?>

<h2 class="judul">Tambah Kategori</h2>
<form method="post" action="?hal=kategoriInsert">
   
   <div class="form-group">
      <label for="nama">Tipe</label>   
      <input class="form-control" type="text" id="tipe" name="tipe">
   </div>

   <div class="form-group">
      <label for="nama">Jumlah</label>   
      <input class="form-control" type="number" id="jumlah" name="jumlah">
   </div>

   <div class="form-group">
      <label for="nama">Bagasi</label>   
      <input class="form-control" type="number" id="bagasi" name="bagasi">
   </div>

   <div class="form-group">
      <input type="submit" value="Simpan" class="btn btn-primary">
      <input type="reset" value="Batal" class="btn btn-outline-primary m-3">
   </div>
   
</form>