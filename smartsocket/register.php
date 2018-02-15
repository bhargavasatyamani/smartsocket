<?php
    session_start();
?>  
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Smart Sockets</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap-grid.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/stylesheet.css" />
    <link href="https://fonts.googleapis.com/css?family=Nova+Flat" rel="stylesheet">
    <script src="js/main.js"></script>
</head>
<body>
    <div class="container-fluid bodycontainer">
        <div class="row">
            <div class="col-md-7  d-none d-md-inline indexPageLeftDiv">
                <img src="images/logo.png" alt="Logo">
            </div>
            <div class="col-md-5 indexPageRightDiv">
                <div style="text-align:center"><h3><span style="color:rgb(255, 123, 0)">Smart</span>Sockets</h3></div><br /><br />
                <br />
                <?php
                    if(isset($_SESSION['message'])){
                        echo '<div class="alert alert-warning" role="alert"><strong>'
                        .$_SESSION['message']
                      .'</strong></div>';
                      unset($_SESSION['message']);
                    }
                ?>
                <div style="text-align:center"><h3 style="font-family:'Nova Flat', cursive">SIGN UP</h3></div><br />
               <div class="container formcontainer">
                    <form method="POST" action="signup.php">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Username</label>  
                                <input type="text" name="inputname" class="form-control" id="exampleInputEmail1" aria-describedby="usernameHelp" placeholder="Username">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" name="inputmail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                              <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Password</label>
                              <input type="password" name="inputpass" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label>Mobile no.</label>
                                <input type="text" name="inputmobile" class="form-control" placeholder="Mobile number"></input>
                            </div>
                            <br />
                            <div style="text-align:center"><button type="submit" name="signup" class="btn btn-primary">SIGN UP</button></div>
                    </form><br />
                    <div style="text-align:center"><a href="login.php">Existing User? Login</a></div>
               </div> 
            </div>
        </div>

    </div>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>