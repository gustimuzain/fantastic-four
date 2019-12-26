<?php 
    if(!defined('INDEX')) die("");
?>

<h4>Selamat datang di halaman dashboard</h4>
<div class="container">
    <div class="">
        <div class="d-flex justify-content-center row" style="height:150px">
            
                <div class="m-3">
                    <div class="card border-success">
                        <a class="nodec" href="?hal=mobilTambah">
                        <?php
                            $query = mysqli_query($con, "SELECT COUNT(mobil_id) as banyak FROM mobil;");
                            $row = mysqli_fetch_assoc($query);
                        ?>
                            <div class="card-body text-success">
                                <h5 class="card-title">Tambah Mobil</h5>
                                <p class="card-text">Jumlah mobil : <?= $row["banyak"] ?></p>
                            </div>
                        </a>
                    </div>
                </div>
            
            
            <a href="?hal=kategoriTambah">
                <div class="m-3">
                    <div class="card border-success">
                        <div class="card-body text-success">
                            <h5 class="card-title">Tambah Kategori</h5>
                        </div>
                    </div>
                </div>
            </a>

        </div>
    </div>
</div>

<div>
    <div>
        <p>Untuk chart</p>
    </div>
</div>