<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <?php include '../layout/head.php' ?>
        <script type="text/javascript" src="https://www.simplify.com/commerce/simplify.pay.js"></script>
    </head>

    <body>

        <?php include '../layout/navbar.php' ?>

        <div class="container">
            <div class="row">
            <?php
                $query = mysqli_query($con, "SELECT * FROM mobil LEFT JOIN kategori_mobil ON mobil.kategori_id=kategori_mobil.kategori_id ORDER BY mobil.kategori_id DESC");
                $data = mysqli_fetch_array($query)
            ?>
                <div class="col-sm-4">
                    <div class="card rounded cardshad cardrespo">
                        <div>
                            <div class="productdetail">
                                <img src="../dashboard/image/<?= $data['foto'] ?>" alt="">
                            </div>
                            <div class="d-flex flex-column align-items-center">
                                <div class="">
                                   <h5 class=""><?= $data['nama'] ?></h5>
                                   <div class="d-flex justify-content-center">
                                        <span class="badge badge-pill badge-secondary align-self-center"><?= $data['transmisi'] ?></span>
                                        <div class="ml-2">
                                            <span><i class="fas fa-user"></i><?= $data['jumlah'] ?></span>
                                        </div>
                                   </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="harga">Rp<?= number_format($data['harga'],0,',','.');  ?>/hari</h5>
                                </div>                                
                            </div>
                        </div>                            
                    </div>
                </div>
            
                <div class="col-sm-8">
                    <div class="card cardshad">
                        <div>
                            <div class="d-flex align-items-center">
                                <div class="mt-4 ml-4">
                                    <h5 class="harga">Rp250.000 / 1 hari</h5>
                                </div>
                                <div class="mr-4 mt-3 ml-auto">
                                    <button type="button" class="btn btn-primary"
                                    data-sc-key="sbpb_OGM1MzRlY2YtZGYxMS00NTllLWI5ODMtYThkZjQ3NGY1ZmI5"
                                    data-name="Fantastic Four"
                                    data-description="Reantal"
                                    data-reference=""
                                    data-amount="<?= $data['harga'] ?>"
                                    data-color="#2253F5"
                                    >Pilih</button>
                                </div>
                            </div> 
                            <hr>
                            <div class="ml-4">
                                <div>
                                    <p>Info Mobil</p>
                                    <ul>
                                        <li>Tahun <?= $data['tahun'] ?></li>
                                        <li>Bagasi <?= $data['bagasi'] ?></li>
                                        <li><?= $data['transmisi'] ?></li>
                                    </ul>
                                </div>
                                <div>
                                    <p>Info Rental</p>
                                    <ul>
                                        <li>Kembalikan bensin seperti semula waktu meminjam</li>
                                        <li>Penggunaan hingga 24 jam/hari</li>
                                        <li>Jika pemakaian melebihi dari jam pengembalian, pelanggan dikenakan biaya tambahan
                                            sebesar 10% per jam dari harga sewa
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <p>Syarat Peminjaman</p>
                                    <ul>
                                        <li>SIM C Asli</li>
                                        <li>KK Asli (KTM jika luar DIY)</li>
                                        <li>KTP Asli</li>
                                        <li>Motor</li>
                                        <li>STNK Motor</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="margin-top: 9rem">
            <?php include '../layout/footer.php' ?>
        </div>
    </body>
</html>