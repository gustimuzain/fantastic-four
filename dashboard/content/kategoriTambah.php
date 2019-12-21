<?php
   if(!defined('INDEX')) die("");
?>

<h2 class="judul">Tambah Kategori</h2>
<form method="post" action="?hal=kategoriInsert">
   
   <div class="form-group">
      <label for="nama">Tipe</label>   
      <div class="input"><input type="text" id="tipe" name="tipe"></div> 
   </div>

   <div class="form-group">
      <label for="nama">Jumlah</label>   
      <div class="input"><input type="number" id="jumlah" name="jumlah"></div> 
   </div>

   <div class="form-group">
      <label for="nama">Bagasi</label>   
      <div class="input"><input type="number" id="bagasi" name="bagasi"></div> 
   </div>

   <div class="form-group">
      <input type="submit" value="Simpan" class="btn btn-primary">
      <input type="reset" value="Batal" class="tombol reset">
   </div>
   
</form>