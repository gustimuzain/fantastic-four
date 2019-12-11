<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Daftar</title>
        <?php include '../layout/head.php' ?>
    </head>

    <body>
        
    <?php include '../layout/navbar.php' ?>

        <img src="image/fantasticFourIl.png" alt="" class="ilus">
        <div class="container">
            <div class="row card shadow p-3 mb-5 register">
                <div class="">
                    <form>
                        <center><h5>Daftar Sekarang</h5></center>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="username" required="required">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" required="required">
                        </div>
                        <div class="form-group">
                            <label>Nomor Ponsel</label>
                            <input type="tel" class="form-control" name="username" required="required">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="myInput" id="password" required="required">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" name="confirm_password" id="confirm_password" required="required">
                            <span id='message'></span>
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