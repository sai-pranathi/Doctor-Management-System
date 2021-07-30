<?php
require "includes/common.php";
if (!isset($_SESSION['email'])) {
    header('location:Doctors.php?page_id=a');
}
?>
<html>
    <head>
        <title>settings</title>
        <link rel="Stylesheet" href="bootstrapin/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrapin/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrapin/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">  
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
       <link rel="stylesheet" type="text/css" href="style1.css"> 
    </head>
    <body>
         <?php include "includes/header.php" ?>
        <div id="banner_image1" style="padding-top: 120px;">
         <div class="container" style="padding-top: 100px; padding-bottom:100px;">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4" >
                    <form class="panel"  method="POST" action="Settings_script.php">
                        <div id="form_in_border" class="form-group">
                            <center>
                                <h4>Change Password</h4>
                            </center>
                        </div>
                        <div id="spacing" style="padding:0 10px;">
                            <div class="form-group">
                                <b>Old Password:</b>
                                <input type="password" class="form-control" name="old_password" 
                                       placeholder="Old Password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6,}$" required>
                            </div>
                            <div class="form-group">
                                <b>New Password:</b>
                                <input type="password" class="form-control" name="new_password"
                                       placeholder="New Password (Min. 6 characters)" 
                                       pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6,}$"                                   
                                       required>
                            </div>   
                             <div class="form-group">
                                <b>Retype New Password:</b> 
                            <input type="password" class="form-control" name="confirm_password"
                                   placeholder="Retype the new password" 
                                   pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6,}$"  required>
                            </div>   
                        </div>
                        <div class="panel-footer">
                             <a href="Log_In.php"> <button class="btn btn-primary form-control" style="background-color: #398a7b;color: #f9f9fd">Submit</button></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
            <?php include "includes/footer.php" ?> 
        </div>
    </body>
</html>
