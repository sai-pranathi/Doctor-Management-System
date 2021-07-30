<?php
require "includes/common.php";
if (isset($_SESSION['email'])) {
    header('location:Doctors.php?page_id=a');
}
?>
<html>
    <head>
        <title>Login</title>
        <link rel="Stylesheet" href="bootstrapin/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrapin/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrapin/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style1.css"> 
    </head>
    <body>
        <?php include "includes/header.php" ?>
        <div id="banner_image1">
            <div class="container" style="padding-top:130px; padding-bottom:130px;">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-4" >
                        <form class="panel" method="POST" action="Log_In_script.php" style="padding: 15px;">
                            <div id="form_in_border" class="form-group">
                                <center>
                                    <h4>Login</h4>
                                </center>
                            </div>
                            <div id="spacing" style="padding:0 10px;">
                                <div class="form-group">
                                    <b>Email:</b>
                                    <input type="email" class="form-control" name="email" 
                                           placeholder="Enter Valid Email" required>
                                </div>
                                <div class="form-group">
                                    <b>Password:</b>
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                </div>           
                                <div class="form-group">
                                    <button class="btn form-control" style="background-color:#398a7b;color: #f9f9fd;">Login</button>
                                </div>
                            </div>
                            <div class="panel-footer">
                                Don't have an account? <a href="Sign_Up.php."> Click here to Sign Up</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php include "includes/footer.php" ?>
    </body>
</html>


