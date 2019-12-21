<?php
   if(!defined('INDEX')) die("");

   $query = mysqli_query($con, "SELECT * FROM mobil WHERE mobil_id='$_GET[id]'");
   $data = mysqli_fetch_array($query);
?>

<h2 class="judul">Edit Mobil</h2>
<form method="post" action="?hal=mobilUpdate" enctype="multipart/form-data">
   <input type="hidden" name="id" value="<?= $data['mobil_id'] ?>">
   
   <div class="form-group">
      <label for="foto">Foto</label>   
      <div class="input">
         <input type="file" id="foto" name="foto">
         <img src="images/<?= $data['foto'] ?>" width="150">
      </div>
   </div>

   <div class="form-group">
      <label for="nama">Nama</label>   
      <div class="input">
         <input type="text" id="nama" name="nama" value="<?= $data['nama'] ?>">
      </div> 
   </div>

   <div class="form-group">
      <label for="nama">Harga</label>   
      <div class="input">
         <input type="text" id="harga" name="harga" value="<?= $data['harga'] ?>">
      </div> 
   </div>

   <div class="form-group">
      <label for="nama">Tahun</label>   
      <div class="input">
         <input type="text" id="tahun" name="tahun" value="<?= $data['tahun'] ?>">
      </div> 
   </div>

   <div class="form-group">
      <label for="tanggal">Plat</label>   
      <div class="input">
         <input type="date" id="plat" name="plat" value="<?= $data['plat'] ?>">
      </div>
   </div>

   <div class="form-group">
      <label for="kategori">Kategori</label> 
      <div class="input">
      <select id="kategori" name="kategor">
         <option value=""> -Pilih Kategori-</option>
         <?php
            $querykategori = mysqli_query($con, "SELECT * FROM kategori_mobil");
            while($j = mysqli_fetch_array($querykategori)){
               echo "<option value='$j[kategori_id]'";
               if($j['kategori_id'] == $data['kategori_id']) echo " selected";
               echo ">$j[tipe]</option>";
            }
         ?>
      </select>
      </div>
   </div>

   <div class="form-group">
      <input type="submit" value="Simpan" class="tombol simpan">
      <input type="reset" value="Batal" class="tombol reset">
   </div>
</form>