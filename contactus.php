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
        ?>
        <br><br><br><br>
    <div class="container">
          <div class="row">
              <div class="col-lg-12"><h2>LIVE SUPPORT</h2></div>
          </div>
          <div class="row">
              <div class="col-xs-10">
                  <p><h4>24 hours|7 days a week | 365 days a year Live Technical Support </h4>
                  <br>
                  The first function of a Contact page is to get visitors interested. If they like what they see and it is easy to contact you, why won’t they make a call or fill a form.The second but probably the most important reason to build Contact page wisely is the collaboration facilitation. The ‘Contact Us’ section helps users to contact the webmaster and so the website owner so gets the information on his customers.Contact page is the last one that visitors see before they decide if they need your project. There are little chances that users will change their mind if your home page is brilliant but contact page has a so-so design. Still, it is better not to risk with it! If a user likes your website thanks to a perfect website design, the Contact page will just emphasize how cool you are.
            
                  </p>
              </div>
              <div class="col-xs-2">
                    <div class="thumbnail">
                        <img src="./img3/contact.png" alt="thumbnail">
                         </div>
              </div>
          </div>
    </div>
           <div class="container">
            <div class="row row-style" id="row">
                <div class="col-xs-6">
                    <h1> CONTACT US </h1>
                    <form method="post" action=" ">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control"  name="name" required="true">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required="true"><?php echo @$_GET['m1']; ?>
                        </div>
                        <label>Message</label>
                        <br>
                        <textarea name="message" placeholder="Other Feedback"  cols="75" rows="10">

                        </textarea>
                        <br>
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </form>
                </div>
                <div class="col-xs-offset-4 col-xs-2">
                    <h1>Company Information:</h1>
                    <p>500 Lorem Ipsum Dolor st,<br>
                        22-58-2-9 St Amet,Lorem ,<br>
                        USA<br>
                        Phone:(00)222 666 444<br>
                        Fax:(000) 000 00 00 0<br>
                        Email: info@mycompany.com<br>
                         Follow on: Facebook,Twitter
                    </p>
                </div>
                
            </div>
           </div>
          <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>