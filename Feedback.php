<?php
require "includes/common.php";
if (!isset($_SESSION['email'])) {
    header('location:Doctors.php?page_id=a');
}
?>
<html>
    <head>
        <title>Feedback</title>
        <link rel="Stylesheet" href="bootstrapin/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrapin/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrapin/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        
        <link rel="stylesheet" type="text/css" href="style1.css"> 
    </head>
    <body>
         <?php include "includes/header.php" ?>
        <div class="banner_imagebg" style="padding-top: 25px;">
            <div class="container" style="padding-top: 20px;">

                <div class="row " style="margin-top: 60px">
                    <div class="col-md-6 col-md-offset-3 form-container">
                        <h2>Feedback</h2>
                        <p> Please provide your feedback below: </p>
                        <form role="form" method="post" action="Feedback_script.php" id="reused_form">
                            <div class="row">
                                <div class="col-sm-12 form-group">
                                    <label>How do you rate your overall experience?</label>
                                    <p>
                                        <label class="radio-inline">
                                            <input type="radio" name="experience" id="radio_experience" value="bad">
                                            Bad
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="experience" id="radio_experience" value="average">
                                            Average
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="experience" id="radio_experience" value="good">
                                            Good
                                        </label>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 form-group">
                                    <label for="comments"> Comments:</label>
                                    <textarea class="form-control" name="comments" id="comments" placeholder="Your Comments" maxlength="6000" rows="7"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label for="name"> Your Name:</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="email"> Email:</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 form-group">
                                <button class="btn form-control" style="background-color: #398a7b;color: #f9f9fd">Submit</button>
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