<?php
   if(!defined('INDEX')) die("");
?>

<h2 class="">Tambah Data Mobil</h2>
<form class="card" method="post" action="?hal=mobilInsert" enctype="multipart/form-data">
   <div class="m-3">
        <div class="form-group">
            <label for="foto">Foto</label>   
            <input type="file" id="foto" name="foto">
        </div>

        <div class="form-group">
            <label for="nama">Nama</label>   
            <input class="form-control" type="text" id="nama" name="nama">
        </div>

        <div class="form-group">
            <label for="harga">Harga</label>   
            <input class="form-control" type="text" id="harga" name="harga">
        </div>

        <div class="form-group">
            <label for="tahun">Tahun</label>   
            <input class="form-control" type="number" min="1900" max="2099" step="1" id="tahun" name="tahun">
        </div>

        <div class="form-group">
            <label for="plat">Plat</label>   
            <input class="form-control" type="text" id="plat" name="plat">
        </div>

        <div class="form-group">
            <label for="transmisi">Transmisi</label>
            <select class="form-control" id="transmisi" name="transmisi">
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
                    echo "<option value='$j[kategori_id]'>$j[tipe]</option>";
                    }
                ?>
            </select>
        </div>
        <div class="form-group">
            <input type="submit" value="Simpan" class="btn btn-primary">
            <input type="reset" value="Batal" class="btn btn-outline-primary m-3">
        </div>
    </div>
</form>
