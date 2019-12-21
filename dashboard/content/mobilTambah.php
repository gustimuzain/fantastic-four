<?php
   if(!defined('INDEX')) die("");
?>

<h2 class="">Tambah Data Mobil</h2>
<form class="card" method="post" action="?hal=mobilInsert" enctype="multipart/form-data">
   <div class="ml-3">
        <div class="form-group">
            <label for="foto">Gambar</label>   
            <div class="input"><input type="file" id="gambar" name="gambar"></div>
        </div>

        <div class="form-group">
            <label for="nama">Nama</label>   
            <div class="input"><input type="text" id="nama" name="nama"></div> 
        </div>

        <div class="form-group">
            <label for="nama">Harga</label>   
            <div class="input"><input type="text" id="harga" name="harga"></div> 
        </div>

        <div class="form-group">
            <label for="tanggal">Tahun</label>   
            <div class="input"><input type="number" min="1900" max="2099" step="1" id="tahun" name="tahun"></div>
        </div>

        <div class="form-group">
            <label for="nama">Plat</label>   
            <div class="input"><input type="text" id="plat" name="plat"></div> 
        </div>

        <div class="form-group">
            <label for="kategori">Kategori</label> 
            <div class="input">
            <select id="kategori" name="kategori">
                <option value=""> -Pilih Kategori-</option>
                <?php
                    $querykategori = mysqli_query($con, "SELECT * FROM kategori_mobil");
                    while($j = mysqli_fetch_array($querykategori)){
                    echo "<option value='$j[kategori_id]'>$j[tipe]</option>";
                    }
                ?>
            </select>
            </div>
        </div>
        <div class="form-group">
            <input type="submit" value="Simpan" class="tombol simpan">
            <input type="reset" value="Batal" class="tombol reset">
        </div>
    </div>
</form>
