<?php
session_start();
if(Isset($_POST['login'])) {
    include('../config.php');

    $password = $_POST['password'];
    $email = $_POST['email'];
    $query =  mysqli_query($con,"SELECT * FROM user WHERE email = '$email' AND status='REGISTERED' Limit 1") or die(mysqli_error($con));

    if(mysqli_num_rows($query)==0) {
        echo '<script>alert("Email not found or User not registered yet"); window.location= "../view/login.php";</script>';
    }
    else {
        $user = mysqli_fetch_assoc($query);
        if(password_verify($password, $user['password'])) {
            echo '<script>alert("Success"); window.location= "../view/index.php";</script>';
        }
        else {
            echo '<script>alert("Email or Password Invalid"); window.location= "../view/login.php";</script>';
        }
    }
}
else {
    echo '<script>window.history.back()</script>';
}
?>