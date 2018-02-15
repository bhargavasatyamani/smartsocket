
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SmartSockets</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap-grid.css" />
    <link href="https://fonts.googleapis.com/css?family=Nova+Flat" rel="stylesheet">
    <script src="main.js"></script>
</head>
<body>
    <div class="container-fluid" style="background-color:lightgray">
        <div class="row">
            <div class="col-md-1">
                <img src="images/logo.png" width=100% height=100% alt="Logo">
            </div>
            <div class="col-md-7">
                <h3 style="padding-top:1%"><span style="color:rgb(255, 123, 0)">Smart</span>Sockets</h3>
            </div>
            <div class="col-md-4">
                <?php
                    if(isset($_SESSION['loggedin'])){
                        echo '
                            <p>Welcome, '.$_SESSION['user_name'].'</p>
                        '.'<a href="#">Account options</a>   '.'| <a href="login.php">Signout</a>';        
                    }
                    else{
                       echo  '<a href="login.html">Login</a>';
                    }
                ?>
            </div>  
        </div>

    </div>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>