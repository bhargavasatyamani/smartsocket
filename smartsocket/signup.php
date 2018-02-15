<?php
    session_start();
    require 'dbconnect.php';
?>
<?php

if(isset($_POST['signup'])){
    $username=$mysqli->escape_string($_POST['inputname']);
    $usermail=$mysqli->escape_string($_POST['inputmail']);
    $userpass=$mysqli->escape_string(password_hash($_POST['inputpass'],PASSWORD_BCRYPT));
    $usermobile=$mysqli->escape_string($_POST['inputmobile']);

    $sql="SELECT * FROM iotusers WHERE email='$usermail'";
    $result=$mysqli->query($sql);

    if($result->num_rows>0){
        $_SESSION['message']="User with this mail already exists";
        header("location:register.php");
    }
    else{
        $sql="INSERT INTO iotusers(user_name,email,pass,mobile) "
                . "VALUES('$username','$usermail','$userpass',$usermobile)";
        
        if($mysqli->query($sql)){
            require 'mail.php';
            $_SESSION['user_name']=$username;
            $_SESSION['user_mail']=$usermail;
            $_SESSION['user_mobile']=$usermobile;
            $_SESSION['message']="Sign up successful. An email with verification link has been sent to your mail.Your account will be activated after your mail is verified";
            $_SESSION['active']=0;
            $_SESSION['loggedin']=1;
            header("location:profile.php");
        }
        else{
            $_SESSION['message']="Something went wrong. Please try again!";
            header("location:register.php");
        }
    }
}

?>