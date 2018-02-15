<?php
    session_start();
    require 'dbconnect.php';
?>

<?php

    require 'profileheader.php';
?>
<?php
    if(isset($_SESSION['loggedin'])){

        if($_SESSION['active']==1){
            echo '<h1>Welcome to SmartSockets</h1>';
        }
        else{
            echo '
            <div class="alert alert-info" role="alert">
            You need to activate your account first. Click the link sent to your registered mail
            </div>
            ';
        }
    }
    else{
      echo '<div class="alert alert-warning" role="alert">
        <h4 class="alert-heading">Oops!</h4>
        <p>You need to login to access this page</p>
        <hr>
        <p>Click <a href="login.html">Here</a> to login.
        </div>';
    }
?>