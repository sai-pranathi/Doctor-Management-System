<?php
require "includes/common.php";
if (isset($_SESSION['email'])) {
    header('location:Doctors.php?page_id=a');
}
?>
<html>
    <head>
        <title>Patient_registration</title>
        <link rel="Stylesheet" href="bootstrapin/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrapin/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrapin/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style1.css"> 
    </head>
    <body>
        <?php include "includes/header.php" ?>
        <div id="banner_image">
         <div class="container" style="padding-top:75px; padding-bottom:80px;">
             <div class="row">
            <div class="col-md-7 col-md-offset-1">

                <form class="panel" method="POST" action="Sign_Up_script.php" style="padding: 15px;">
                    <center>
                        <div class="panel-heading">
                            <h2>Patient Registration</h2>
                        </div>
                    </center>
                    <div id="spacing" style="padding:0 10px;">
                        <div class="form-group">
                            <input type="text" class="form-control" name="Name" placeholder="Name" required>
                        </div>
                       
                            <div class="form-group">

                                <input type="email" class="form-control" name="Email" placeholder="Email" required>  
                            </div>
                        
                        <div class="row">

                            <div class="form-group col-md-6">
                                <input type="number" class="form-control" name="Age" placeholder="Age" required>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="tel" class="form-control" name="Contact" placeholder="Phone Number(Ex:9449701577)"
                                       maxlength="10" pattern="[789][0-9]{9}" required>
                            </div>
                        </div>


                        <div class="form-group">
                            <input type="password" class="form-control" name="Password" placeholder="Password (Min. 6 characters)" 
                                   pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6,}$"                                   
                                   required>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="Address" placeholder="Address" required>
                        </div>
                        <div class="form-group">
                         <button class="btn btn-primary form-control" style="background-color: #398a7b;color: #f9f9fd">Sign Up</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
             </div>
        </div>
        <?php include "includes/footer.php" ?>
    </body>
</html>
