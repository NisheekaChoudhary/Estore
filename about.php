<!DOCTYPE html>

<?php
require "includes/common.php";
if (isset($_SESSION['email'])) { 
  header('location: home.php'); 
} 
?>

<html>
    <head>
        <title>E-store</title>
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
        include 'includes/header.php';
        include 'includes/Check-if-added.php';
        
        ?>
        <br><br><br>
       
<div class="container-fluid decor_bg" id="login-panel">
                <div class="row mt-50">
                    <div class="col-md-4">
                        <div class="panel panel-danger" >
                            <div class="panel-heading">
                                <h3>WHO ARE WE</h3>
                            </div>
                            <div class="panel-body">
                                <P>
                                     <div class="thumbnail">
                                         <img src="./img3/about-img.jpg" alt="thumbnail">
                         </div>
                                E-Store is an American multinational technology company based in Seattle, with 750,000 employees.[8] It focuses on e-commerce, cloud computing, digital streaming, and artificial intelligence. It is considered one of the Big Four tech companies, along with Google, Apple, and Microsoft.[9][10][11] It has been referred to as "one of the most influential economic and cultural forces in the world."[12]for its disruption of well-established industries through technological innovation and mass scale.[13][14][15] It is the world's largest online marketplace, AI assistant provider, and cloud computing platform[16] as measured by revenue and market capitalization.[17] Amazon is the largest Internet company by revenue in the world.[18] It is the second largest private employer in the United States[19] and one of the world's most valuable companies.
                                    
                                </P>
                            </div>
                            <div class="panel-footer">
                            </div>
                        </div>
                    </div>
                        <div class="col-md-4">
                        <div class="panel panel-danger" >
                            <div class="panel-heading">
                                <h3>OUR HISTORY</h3>
                            </div>
                            <div class="panel-body">
                                <P>
                                   One of the earliest forms of trade conducted online was IBM's online transaction processing (OLTP) developed in the 1960s and it allowed the processing of financial transactions in real-time.[2] The computerized ticket reservation system developed for American Airlines called Semi-Automatic Business Research Environment (SABRE) was one of its applications. Here, computer terminals located in different travel agencies were linked to a large IBM mainframe computer, which processed transactions simultaneously and coordinated them so that all travel agents had access to the same information at the same time.[2]
                                   <br>
The emergence of online shopping as we know today developed with the emergence of the Internet.[3] Initially, this platform only functioned as an advertising tool for companies, providing information about its products. It quickly moved on from this simple utility to actual online shopping transaction due to the development of interactive Web pages and secure transmissions.[4] Specifically, the growth of the internet as a secure shopping channel has developed since 1994, with the first sales of Sting album 'Ten Summoner's Tales'.[5] Wine, chocolates, and flowers soon followed and were among the pioneering retail categories which fueled the growth of online shopping. Researchers found that having products that are appropriate for e-commerce was a key indicator of Internet success.[6] Many of these products did well as they are generic products which shoppers did not need to touch and feel in order to buy. But also importantly, in the early days, there were few shoppers online and they were from a narrow segment: affluent, male, 30+. Online shopping has come along way since these early days and -in the UK- accounts for significant percents (depending on product category as percentages can vary). 

                                </p>
                            </div>
                            <div class="panel-footer">
                            </div>
                        </div>
                    </div>
                        <div class="col-md-4">
                        <div class="panel panel-danger" >
                            <div class="panel-heading">
                                <h3>OPPURTUNITIES</h3>
                            </div>
                            <div class="panel-body">
                                <P>
                                <h3> Advantages</h3>
                                <h4>Convenience</h4>
Online stores are usually available 24 hours a day, and many consumers in Western countries have Internet access both at work and at home. Other establishments such as Internet cafes, community centers and schools provide internet access as well. 
 In contrast, visiting a conventional retail store requires travel or commuting and costs such as gas, parking, or bus tickets, and must usually take place during business hours. Delivery was always a problem which affected the convenience of online shopping. 
<h4>Information and reviews</h4>
Online stores must describe products for sale with text, photos, and multimedia files, whereas in a physical retail store, the actual product and the manufacturer's packaging will be available for direct inspection (which might involve a test drive, fitting, or other experimentation). 
                            Some online stores provide or link to supplemental product information, such as instructions, safety procedures, demonstrations, or manufacturer specifications. 
<h4>Price and selection</h4>
One advantage of shopping online is being able to quickly seek out deals for items or services provided by many different vendors (though some local search engines do exist to help consumers locate products for sale in nearby stores)
                            Search engines, online price comparison services and discovery shopping engines can be used to look up sellers of a particular product or service.  
                            </div>
                            <div class="panel-footer">
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