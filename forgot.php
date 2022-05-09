<?php
require_once("includes/common.php");?>

<html>
    <head>
    
        <title>Welcome | Life Style Store</title>
        
           <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link href="style.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
        <style>
            #hello{
                margin-top: 100px;
            }          
        </style>
    </head>
    <body>
        <?php
            include 'includes/header.php';
        ?>
<div class="container">
    <div class="row" id="hello">
    <div class="col-sm-4 col-sm-offset-4">
                        
        <form action="forgot_script.php" method="POST">
                            <div>
                                <h2>Forgot Password</h2>
                                <p>Enter your registered E-mail ID</p>
                            </div><br>
                            
                            <div class="form-group">
                                
                                <input type="email" class="form-control" name="email" placeholder="E-mail" required="true">
                                
                            </div><br>
                            
                            <button name="send_otp" type="submit" class="btn btn-primary btn-block">Send OTP</button>  
                            <?php
                            echo "<br><br><b class='red'>" . @$_GET['error'] . "</b>";
                            ?>
                            
                            </form>
                        
    </div>
    </div>
</div>
    </body>
</html>