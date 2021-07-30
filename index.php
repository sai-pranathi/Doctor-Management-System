<?php
require "includes/common.php";
if (isset($_SESSION['email'])) {
    header('location:Doctors.php?page_id=a');
}
?>
<html>
    <head>
        <title>DAS</title>
        <link rel="Stylesheet" href="bootstrapin/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrapin/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrapin/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style1.css"> 
    </head>
    <body>
        <?php include "includes/header.php" ?>
        <div id="banner_bacimg" style="padding-top: 100px;">
            <div class="container"  style="padding-top: 30px; padding-bottom:50px;">
                <div id='banner_content'>
                    <center>
                  <a href="Doctors.php?page_id=a" class="btn btn-danger btn-lg active">Get Started</a>
                  </center>
                </div>
            </div>
        </div> 
        <?php include "includes/footer.php" ?>
    </body>
</html>
