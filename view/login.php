<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Fantastic Four</title>
        <?php include '../layout/head.php' ?>
    </head>

    <body>
        
        <?php include '../layout/navbar.php' ?>

        <img src="../image/status/undraw_city_driver_jh2h.png" alt="" class="ilus">
        <div class="container">
            <div class="row card shadow p-3 mb-5 register">
                <div class="">
                    <form>
                        <center><h5>Masuk</h5></center>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control nama" name="email" required="required">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control pass" name="password" required="required">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block btn-lg">Daftar</button>
                        </div>
                    </form>
                </div>
                <div class="text-center">Sudah punya akun? <a href=""><strong>Masuk</strong></a></div>
            </div>
        </div>
    </body>
</html>