<!-- <?php //include '../layout/header.php'; -->
    if(!isset($_SESSION['isLogin'])) {
        header("location: ./view/login.php");
    }
    else {
        header("location: ./view/index.php"); 
    }
?>
