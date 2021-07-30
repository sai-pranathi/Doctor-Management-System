<?php
require "includes/common.php";
?>
<html>
    <head>
        <title>Appointment</title>
        <link rel="Stylesheet" href="bootstrapin/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrapin/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrapin/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        
        <link rel="stylesheet" type="text/css" href="style1.css">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    </head>
    <body>
        <?php include "includes/header.php";
        $doc_id = $_GET['doc_id']
        ?>
        <div class="banner_image3">
            <div class="container" style="padding-top:80px; padding-bottom:50px;">
                <div class="row page_style">
                    <div class="col-sm-offset-4 col-sm-4">
                        <form class="panel" id="form_out_border" method="POST" action="Appointment_script.php?doc_id='<?php echo"$doc_id"; ?>'"  style="padding: 15px;">
                            <div class="form-group" id="form_in_border">
                                <center>
                                    <h3>Appointment</h3>
                                </center>
                            </div>
                            <div id="spacing" style="padding:0 10px;">
                                <div class="form-group">
                                    <b>Name:</b>
                                    <input type="text" class="form-control" name="name" placeholder="Name" required>
                                </div>
                                <div class="form-group">
                                    <b>Email:</b>
                                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <b>Contact:</b>
                                    <input type="tel" class="form-control" name="contact" placeholder="Enter Valid Phone Number (Ex: 844844850)" maxlength="10" pattern="[789][0-9]{9}" required>
                                </div>

                                <div class="form-group">
                                    <b>Date:</b>
                                    <input type="date" class="form-control" name="date" placeholder="Date" required>
                                </div>
                                <div class="form-group"> 
                                    <b>Time:</b>
                                        <select name="time" class="form-control" id="Time">
                                            <option value="disabled selected">Time</option>
                                            <option value="9.00am-10.00am">09.00am-10.00am</option>
                                            <option value="10.00am-11.00am">10.00am-11.00am</option>
                                            <option value="11.00am-12.00pm">11.00am-12.00pm</option>
                                            <option value="12.00pm-01.00pm">12.00pm-01.00pm</option>
                                            <option value="03.00pm-04.00pm">03.00pm-04.00pm</option>
                                            <option value="04.00pm-05.00pm">04.00pm-05.00pm</option>
                                            <option value="05.00pm-06.00pm">05.00pm-06.00pm</option>
                                            <option value="07.00pm-08.00pm">07.00pm-08.00pm</option>
                                            <option value="08.00pm-09.00pm">08.00pm-09.00pm</option>
                                        </select>
                                </div>
                                <div class="form-group">
                                    <button class="btn form-control" style="background-color: #398a7b;color: #f9f9fd">Book</button>
                                </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
<?php include "includes/footer.php" ?>
    </div>
</body>
</html>
