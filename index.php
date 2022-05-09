
<!DOCTYPE html>

<?php
require "includes/common.php";
if (isset($_SESSION['email'])) { 
  header('location: home.php'); 
} 
?>

<html lang="en">
    <head>
        <title>E-store</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link href="style.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            #banner-image{
padding-top: 75px;
padding-bottom: 50px;
text-align: center;
color: #f8f8f8;
background: url("./img3/intro11crop.jpg");
background-size: cover;
}
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
        include 'includes/header.php';        
        ?>
        <br><br>
        
        <div id="banner-image">
            <div class="container">
                <div>
                <center>
                <div id="banner-content">
                    <h1>You Are What You Listen Too!!</h1>
                        <p>Flat 40% OFF on premium brands</p>
                              
                </div>
                </center>
                </div>
            </div>
        </div>
        
        <br><br><br>
        
        <div class="container-fluid decor_bg" id="login-panel">
                <div class="row mt-50">
                    <div class="col-md-4">
                        <div class="panel panel-default" >
                            <div class="panel-heading">
                               
                                <h4>Headset 1</h4>
                               
                            </div>
                            <div class="panel-body">
                                <img class="img-rounded img-responsive" src="img3/bose.jpg" alt="Mobile-1"><br>
                                <p>Bose bluetooth headset</p>
                                <p>Rs.3000</p>
                            </div>
                            <div class="panel-footer">
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <button class="btn btn-primary btn-block" data-target="#loginModal" data-toggle="modal">Order Now</button>
                                <?php
                            } else {
                                if (check_if_added_to_cart(1)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                                ?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="panel panel-default" >
                            <div class="panel-heading">
                                <h4>Headset 2</h4>
                            </div>
                            <div class="panel-body">
                                <img class="img-rounded img-responsive" src="img3/gold and white Beats headfphones.jpg" alt="Mobile-1"><br>
                                <p>Beats headphone</p>
                                <p>Rs.3000</p>
                            </div>
                            <div class="panel-footer">
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <button class="btn btn-primary btn-block" data-target="#loginModal" data-toggle="modal">Order Now</button>
                                <?php
                            } else {
                                if (check_if_added_to_cart(1)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                                ?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="panel panel-default" >
                            <div class="panel-heading">
                                <h4>Headset 3</h4>
                            </div>
                            <div class="panel-body">
                                <img class="img-rounded img-responsive" src="img3/black Philips headphones.jpg" alt="Mobile-1"><br>
                                <p>Philips headphone</p>
                                <p>Rs.5000</p>
                            </div>
                            <div class="panel-footer">
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <button class="btn btn-primary btn-block" data-target="#loginModal" data-toggle="modal">Order Now</button>
                                <?php
                            } else {
                                if (check_if_added_to_cart(1)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-default" >
                            <div class="panel-heading">
                                <h4>Headset 4</h4>
                            </div>
                            <div class="panel-body">
                                <img class="img-rounded img-responsive" src="img3/b & bo hedset.jpg" alt="Mobile-1"><br>
                                <p>B & BO headphone</p>
                                <p>Rs.6000</p>
                            </div>
                            <div class="panel-footer">
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <button class="btn btn-primary btn-block" data-target="#loginModal" data-toggle="modal">Order Now</button>
                                <?php
                            } else {
                                if (check_if_added_to_cart(1)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                                ?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="panel panel-default" >
                            <div class="panel-heading">
                                <h4>Headset 5</h4>
                            </div>
                            <div class="panel-body">
                                <img class="img-rounded img-responsive" src="img3/level headphone.jpg" alt="Mobile-1"><br>
                                <p>Level headphone</p>
                                <p>Rs.2999</p>
                            </div>
                            <div class="panel-footer">
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <button class="btn btn-primary btn-block" data-target="#loginModal" data-toggle="modal">Order Now</button>
                                <?php
                            } else {
                                if (check_if_added_to_cart(1)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                                ?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="panel panel-default" >
                            <div class="panel-heading">
                                <h4>Headset 6</h4>
                            </div>
                            <div class="panel-body">
                                <img class="img-rounded img-responsive" src="img3/white beats by dr. dre wireless headphones 1.jpg" alt="Mobile-1"><br>
                                <p>Beats headphone by Dr. Dre</p>
                                <p>Rs.7000</p>
                            </div>
                            <div class="panel-footer">
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <button class="btn btn-primary btn-block" data-target="#loginModal" data-toggle="modal">Order Now</button>
                                <?php
                            } else {
                                if (check_if_added_to_cart(1)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                                ?>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        
     
  
        
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>


