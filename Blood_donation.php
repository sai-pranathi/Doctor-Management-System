<?php
require "includes/common.php";

?>
<html>
    <head>
        <title>Blood Donation</title>
        <link rel="Stylesheet" href="bootstrapin/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrapin/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrapin/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        
        <link rel="stylesheet" type="text/css" href="style1.css"> 
    </head>
    <body>
        <?php include "includes/header.php" ?>
        <div class="banner_bldimg">
            <div class="container">
                <center>
                    <div id="donar">
                        <h1>Donate your blood for a reason!</h1>
                        <h2>Let the reason to be Life.</h2>
                    </div>
                </center>
                <div class="donate">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <form class="panel"method="POST" action="Blood_donation_script.php" style="padding: 15px;">
                                <center>
                                    <div class="panel-heading">
                                        <h2>Donar Details</h2>
                                    </div>
                                </center>
                                <div id="spacing" style="padding:0 10px;">

                                    
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="Name" placeholder="Name" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="email" placeholder="Enter valid Email" required>
                                        </div>
                                        <div class="row"> 
                                            <div class="form-group col-md-6">
                                                <input type="tel" class="form-control" name="Contact" placeholder="Enter Valid Phone Number (Ex: 9449701577)"
                                                       maxlength="10" pattern="[789][0-9]{9}" required>
                                            </div>
                                            <div class="form-group col-md-6">

                                                <select name="Gender" class="form-control" id="Gender">
                                                    <option value="disabled selected">Gender</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    <option value="Others">Others</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">

                                        <div class="form-group col-md-6">
                                            <input type="number" class="form-control" name="Age" placeholder="Age" required>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <input type="text" class="form-control" name="blood_group" placeholder="Blood Group" required>
                                        </div>
                                            </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" name="Address" placeholder="Address" required>
                                        </div>
                                        <button class="btn btn-primary form-control" style="background-color: #398a7b;color: #f9f9fd">Submit</button>
                                    </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "includes/footer.php" ?>
</body>
</html>