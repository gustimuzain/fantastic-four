<?php 
    // session_start();
    include('../config.php');
    if(isset($_SESSION["isLogin"])) {
        $user = $_SESSION["user"];
        $email =  $user["email"];
        $query = mysqli_query($con,"SELECT * FROM user WHERE email ='$email'") or die(mysqli_error($con));
        $user = mysqli_fetch_assoc($query);
        $no=1;
        while($data = mysqli_fetch_assoc($query)){    
            $no++;
        }   
    } 
    else {
        $no=0;
    }
?>

    <header>
        <nav class="navbar bg-white navbar-expand-md shadow p-3 mb-5 fixed-top">
            <a class="navbar-brand" href="index.html">
                <img src="../image/logoF4.png" alt="logo" class="logo">
            </a>
            <ul class="navbar-nav navbar-center">
                <li class="nav-item">
                    <a class="nav-link" href="">LAYANAN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">SYARAT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">KONTAK</a>
                </li>
            </ul>
            <div class="navbar-nav ml-auto" >
                <a href="../view/login.php" class="nav-item nav-link">Login</a>
                <a href="../view/register.php" class="nav-item nav-link">Daftar</a>
                <div class="" id="leftBar">
                    <a href="" class="nav-item nav-link">Akun</a>
                </div>
            </div>
            
        </nav>
    </header>

<?php
    if(!isset($_SESSION["isLogin"])) {
        echo'<style> #leftBar {
            visibility : hidden;
        }</style>';
    }
?>