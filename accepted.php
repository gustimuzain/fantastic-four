<?php
    include('config.php');
    if(!empty($_GET['code']) && isset($_GET['code']))
    {
        $code=$_GET['code'];
        $sql=mysqli_query($con,"SELECT * FROM user WHERE activationcode='$code'");
        $num=mysqli_fetch_array($sql);
        if($num>0)
        {
            $result =mysqli_query($con,"SELECT user_id FROM user WHERE activationcode='$code' and status='UNREGISTERED'");
            $result4=mysqli_fetch_array($result);
            if($result4>0)
            {
                $result1=mysqli_query($con,"UPDATE user SET status='REGISTERED' WHERE activationcode='$code'");
                echo '<script>alert("Email Verified"); window.location= "../view/login.php";</script>';
            }
            else
            {
                echo '<script>alert("Email already Verified"); window.location= "../view/login.php";</script>';
            }
        }
        else
        {
            $msg ="Wrong activation code.";
        }
    }
?>