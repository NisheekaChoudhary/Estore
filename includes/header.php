<div class="navbar navbar-default navbar-fixed-top" id="navbar">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" id="brand" href="index.php">E-Store</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <?php
                if (isset($_SESSION['email'])) {
                    ?>
                    <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
                    <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>
                    <li><a href = "logout_script.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>
                    <?php
                } else {
                    ?>
                    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="#" data-target="#loginModal" data-toggle="modal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <li><a href="about.php"><span class="glyphicon glyphicon-th-list"></span> About-Us</a></li>
                    <li><a href="contactus.php"><span class="glyphicon glyphicon-phone"></span> Contact</a></li>
                        <?php
                    }
                    ?>
            </ul>
        </div>
    </div>
</div>













<div class="container">
    <div class="row">
        <div class="col-xs-12">
<div class="modal fade" tabindex="-1" id="loginModal" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Login</h3>
            </div>
        <form role="form" method="POST" action="login_submit.php">
            <div class="modal-body">               
                    <div class="form-group">
                        <label for="inputUserName">Username</label>
                        <input class="form-control" placeholder="Enter registered E-mail" name="email" type="email">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">Password</label>
                        <input class="form-control" placeholder="Enter Password" name="password" type="password">
                    </div>
                <br>       
                  
                <div class="text-right">
                <a href="forgot.php">Forget Password ?</a>
                </div><br>            
                <div class="modal-footer">               
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="login" class="btn btn-primary">Login</button>               
                </div>
            </div>
        </form>
                
        </div>
    </div>
</div>
        </div>
    </div>
</div>