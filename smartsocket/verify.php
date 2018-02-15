<?php

    require 'dbconnect.php';
    session_start();

?>
<?php
if(isset($_GET['email']) AND !empty($_GET['email'])){
    $email=$mysqli->escape_string($_GET['email']);

    $sql="SELECT * FROM iotusers WHERE email='$email'";
    $result=$mysqli->query($sql);
    if($result->num_rows>0){
       // $mysqli->query("UPDATE users SET active=1 WHERE email=$email");
       $user=$result->fetch_assoc();

       if($user['active']==1){
           $_SESSION['message']="Your account is already active";
           header("location:login.php");
       }
       else{
            $mysqli->query("UPDATE iotusers SET active=1 WHERE email='$email'");
            $_SESSION['message']="Your account has been activated";
           // $_SESSION['active']=1;
            header("location:login.php");
       }
    }
    else{
        $_SESSION['message']="User with this mail doesnt exist";
        header("location:login.php");
    }
}
?>