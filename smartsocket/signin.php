<?php
    session_start();
    require 'dbconnect.php';
?>

<?php

    if(isset($_POST['signin'])){
        $inputmail=$mysqli->escape_string($_POST['umail']);

        $sql="SELECT * FROM iotusers WHERE email='$inputmail'";
        $result=$mysqli->query($sql);

        if($result->num_rows==0){
            $_SESSION['message']="User with that mail doesn't exist";
            header("location:login.php");
        }
        else{
            $user=$result->fetch_assoc();
            if(password_verify($_POST['upass'],$user['pass'])){
                $_SESSION['user_name']=$user['user_name'];
                $_SESSION['user_mail']=$user['email'];
                $_SESSION['user_mobile']=$user['mobile'];
                $_SESSION['active']=$user['active'];
                $_SESSION['loggedin']=1;

                header("location:profile.php");
            }
            else{
                $_SESSION['message']="Password is incorrect";
                header("location:login.php");
            }
        }
    }
?>