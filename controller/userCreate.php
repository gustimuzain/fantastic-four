<?php
    include('../config.php');
    $nama = $_POST['nama'];
    $nohp = $_POST['no_hp'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $activationcode = md5($email.time());
    
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $input = mysqli_query($con,"INSERT INTO user(nama,no_hp,email,password,activationcode,status) VALUES('$nama','$nohp','$email','$password','$activationcode','UNREGISTERED')") or die(mysqli_error($con));
    if($input) {
        $to=$email;
        $msg= "Terimaskasih sudah mendaftar";
        $subject="Email verification (phpgurukul.com)";
        $headers = "MIME-Version: 1.0"."\r\n";
        $headers = 'Content-type: text/html; charset=iso-8859-1'."\r\n";
        $headers = 'From:PHPGurukul | Programing Blog <info@phpgurukul.com>'."\r\n";
        $ms ="<html><head></head><body><div><div>Dear $nama,</div></br></br>
        <div style='padding-top:8px;'>Please click The following link For verifying and activation of your account</div>
        <div style='padding-top:10px;'><a href='http://localhost/fantasticfour/accepted.php?code=$activationcode'>Click Here</a></div>
        <div style='padding-top:4px;'>Powered by <a href='phpgurukul.com'>phpgurukul.com</a></div></div>
        </body></html>";
        mail($to,$subject,$ms,$headers);
        echo "<script>alert('Pendaftaran berhasil, verfikasi email anda');</script>";
        echo '<script>window.location= "../view/login.php";</script>';
    }
    else {
        echo '<script>alert("Gagal melakukan pendaftaran"); window.location= "../Register.php";</script>';
    }     
?>
