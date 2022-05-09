<?php
require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>E-STORE-CART</title>
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
        
        <?php include 'includes/header.php'; ?>
        <br><br><br><br>
    <center>
        <div class="container">
            <div class="table-responsive">
            <table class="table table-hover table-striped" id="table">
                 <?php
                        $sum = 0;
                        $user_id = $_SESSION['user_id'];
                        $query = "SELECT items.price AS Price, items.id, items.name AS Name FROM users_items JOIN items ON users_items.item_id = items.id WHERE users_items.user_id='$user_id' and status='Added to cart'";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
                        if (mysqli_num_rows($result) >= 1) {
                            ?>
                <thead>
                    <tr><th>Item Number</th><th>Item Name</th><th>Price</th><th></th></tr>
                </thead>
                <tbody> 
                                <?php
                                while ($row = mysqli_fetch_array($result)) {
                                    $sum+= $row["Price"];
                                    $id = $row["id"] . ", ";
                                    echo "<tr><td>" . "#" . $row["id"] . "</td><td>" . $row["Name"] . "</td><td>Rs " . $row["Price"] . "</td><td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> Remove</a></td></tr>";
                                }
                                $id = rtrim($id, ", ");
                                echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php?itemsid=" . $id . "' class='btn btn-primary'>Confirm Order</a></td></tr>";
                                ?>
                </tbody>
                        <?php
                        } else {
                            echo "Add items to the cart first!";
                        }
                        ?>
                        <?php
                        ?>
            </table>
            </div>
        </div>
    </center>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        
        <?php include 'includes/footer.php'; ?>
        
    </body>
</html>
