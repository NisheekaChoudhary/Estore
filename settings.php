<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require "includes/common.php";
if (!isset($_SESSION['email'])) { 
  header('location: index.php'); 
} 
?>
<html>
    <head>
        <title>E-STORE-SETTINGS</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link href="style.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            
            #banner-content{
    position: relative;
 padding-top: 6%;
 padding-bottom: 6%;
 margin-top: 12%;
margin-bottom: 12%;
 background-color: rgba(0, 0, 0, 0.7);
 max-width: 660px;
}
.footer{
padding: 10px 0;
background-color: #101010;
color:#9d9d9d;
bottom: 0;
width: 100%;
}
.caption{
        font-weight: bold;
}
.row_style{
    margin-top:10px;
}
#table{
    width:50;
}

body {
    font-weight:bolder;
    font-family: 'Roboto', 'sans-serif';
}
footer{
padding: 10px 0;
background-color: #101010;
color:#9d9d9d;
bottom: 0;
width: 100%;
}
footer a{
   color:#9d9d9d;
}
        </style>
        
    </head>
    <body>
    <?php
        include "includes/header.php";
    ?>
        <br><br><br><br>
        <div class="container">
            <div class="row row-style" id="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <h3> Change Password </h3>
                    <form method="POST" action="settings_script.php">
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Old Password" name="oldpassword">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="New Password" name="newpassword">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Re-type New Password" name="retypenewpassword">
                        </div>
                         <button type="submit" name="change" class="btn btn-primary">Change</button>
                        <?php
                        echo "<br><br><b class='red'>" . @$_GET['error'] . "</b>";
                        ?>
                    </form>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        
        <?php
        include 'includes/footer.php';
        ?>
        
    </body>
</html>
