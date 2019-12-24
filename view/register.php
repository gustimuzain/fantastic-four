<?php
    if(isset($_SESSION['isLogin'])) {
        header("location: ./index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Daftar</title>
        <?php include '../layout/head.php' ?>
    </head>

    <body>
        
    <?php include '../layout/navbar.php' ?>

        <img src="../image/status/undraw_city_driver_jh2h.png" alt="" class="ilus">
        <div class="container">
            <div class="row card shadow p-3 mb-5 register">
                <div class="">
                    <form name="register" action ="../controller/userCreate.php" method="post">
                        <center><h5>Daftar Sekarang</h5></center>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama" required="required">
                        </div>
                        <div class="form-group">
                            <label>Nomor Ponsel</label>
                            <input type="tel" class="form-control" name="no_hp" id="no_hp" required="required">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" id="email" required="required">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="passord" id="password" required="required">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" name="confirm_password" id="confirm_password" required="required">
                            <span id='message'></span>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="daftar" class="btn btn-primary btn-block btn-lg">Daftar</button>
                        </div>
                    </form>
                </div>
                <div class="text-center">Sudah punya akun? <a href=""><strong>Masuk</strong></a></div>
            </div>
        </div>
        
        <script src="../js/pass.js"></script>
    </body>
</html>