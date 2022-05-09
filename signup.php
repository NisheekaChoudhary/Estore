<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include 'includes/common.php';
if(isset($_SESSION['email'])) 
{ header('location:index.php'); }
?>
<html>
    <head>
         <title>E-Store-SIGNUP</title>
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
                <div class="col-xs-6">
                    <h1> SIGN UP </h1>
                    <form method="post" action="signup_script.php">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name" name="name" required="true">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="E-mail" name="e-mail" required="true"><?php echo @$_GET['m1']; ?>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password" pattern=".{6,}" required="true">
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" placeholder="Contact" name="contact" required="true">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="City" name="city" required="true">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="address" name="address" required="true">
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Signup</button>
                    </form>
                </div>
                <div class="col-xs-6">
                    <div class="thumbnail">
                        <img src="./img3/intro12" alt="thumbnail">
                         </div>
                </div>
            </div>
        </div>
    
        <br><br><br>
        
        <?php
        include 'includes/footer.php';
        ?>
        
        
    </body>
</html>
