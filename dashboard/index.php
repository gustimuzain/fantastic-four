<?php
    session_start();
    ob_start();
    
    include "../config.php";

    if(empty($_SESSION['username']) or empty($_SESSION['password'])){
        echo "<p align='center'> Anda harus login terlebih dahulu!</p>";
        echo "<meta http-equiv='refresh' content='2; url=login.php'>";
    }else{
        define('INDEX', true);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Dashboard</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet'>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
        <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="dashboard.css">
    </head>

    <body>
        <!-- <header>
            <div class="navbar">
                DASHBOARD
            </div>
        </header> -->
        <div id="wrapper">
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li class="sidebar-brand">
                        <a href="#">
                            Fantastic Four
                        </a>
                    </li>
                    <li class="">
                        <div class="container">
                            <div class="row">
                                <img src="../image/avatar/micu.png" alt="" class="profile">
                                <p class="name">Hardcuan</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="?hal=dashboard">Dashboard</a>
                    </li>
                    <li>
                        <a href="?hal=chart">Chart</a>
                    </li>
                    <li>
                        <a href="?hal=mobil">Mobil</a>
                    </li>
                    <li>
                        <a href="?hal=kategori">Kategori Mobil</a>
                    </li>
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>

            <div id="page-content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php include "content.php" ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<?php
    }
?>