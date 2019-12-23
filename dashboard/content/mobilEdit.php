<?php
   if(!defined('INDEX')) die("");

   $query = mysqli_query($con, "SELECT * FROM mobil WHERE mobil_id='$_GET[id]'");
   $data = mysqli_fetch_array($query);
?>

<h2 class="">Edit Mobil</h2>
<div class="card">
   <div style="">
      <form method="post" action="?hal=mobilUpdate" enctype="multipart/form-data" class="m-3">
         <input type="hidden" name="id" value="<?= $data['mobil_id'] ?>">
         
         <div class="form-group">
            <label for="foto">Foto</label>   
               <input type="file" id="foto" name="foto">
               <img src="image/<?= $data['foto'] ?>" width="150">
         </div>

         <div class="form-group">
            <label for="nama">Nama</label>   
               <input class="form-control" type="text" id="nama" name="nama" value="<?= $data['nama'] ?>"> 
         </div>

         <div class="form-group">
            <label for="nama">Harga</label>   
               <input class="form-control" type="text" id="harga" name="harga" value="<?= $data['harga'] ?>">
         </div>

         <div class="form-group">
            <label for="nama">Tahun</label>   
               <input class="form-control" type="text" id="tahun" name="tahun" value="<?= $data['tahun'] ?>">
         </div>

         <div class="form-group">
            <label for="tanggal">Plat</label>   
               <input class="form-control" type="text" id="plat" name="plat" value="<?= $data['plat'] ?>">
         </div>

         <div class="form-group">
            <label for="tanggal">Transmisi</label>   
            <select class="form-control" id="transmisi" name="transmisi" value="<?= $data['transmisi'] ?>">
               <option>Manual</option>
               <option>Matic</option>
            </select>
         </div>

         <div class="form-group">
            <label for="kategori">Kategori</label> 
            <select class="form-control" id="kategori" name="kategori">
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

         <div class="form-group">
            <input type="submit" value="Simpan" class="btn btn-primary">
            <input type="reset" value="Batal" class="btn btn-outline-primary m-3" onclick="history.back();">
         </div>
      </form>
   </div>
</div>
