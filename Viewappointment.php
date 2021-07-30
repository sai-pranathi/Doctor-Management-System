<?php
require "includes/common.php";
$id=$_SESSION['id'];
$sql="SELECT booking_id,name,cat,time,dates,fee from doctor d,booking b,category c where d.doc_id=b.doc_id AND d.cid=c.cid AND b.userid=$id"; 
//echo $sql;
 $q=mysqli_query($con,$sql);
 $num=mysqli_num_rows($q);
 //print_r($q);  
if (!isset($_SESSION['email'])) {
    header('location:Doctors.php?page_id=a');
}     
?>
<html>
    <head>
        <title>View Appointment</title>
        <link rel="Stylesheet" href="bootstrapin/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrapin/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrapin/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style1.css"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    </head>
    <body>
         <?php include "includes/header.php" ?>
        <div class="container-fluid" style="padding-top: 50px;">
            <div>
                <h1>Thanks for Booking!!</h1></div>
            <div class="row"><?php
           if($num>0){
               while($row_data= mysqli_fetch_array($q)) {?>
                <div class="col-sm-3 col-sm-offset-1">
                    <div style="text-align:center;
                         margin-bottom:20px;
                         margin-top:20px;
                         border: .5px solid lightgrey; 
                         background-color:#f3f3f8;color:#141313;">
                        <div class="panel-heading">
                            <center style="font-size: 20px">
                                Booking Details
                            </center>
                        </div>
                        <div class="panel-body">

                            <div class="row" style="padding-bottom:10px;">
                                <div class="col-sm-5">
                                Doctor name:
                                </div>
                                <div class="col-sm-7"  style="text-align: right;">
                                 <?php echo $row_data['name']; ?>
                                </div>
                            </div>                            
                            <div class="row">
                                <div class="col-sm-5">
                                    Category:
                                </div>
                                <div class="col-sm-7"  style="text-align: right;">
                                    <?php echo $row_data['cat']; ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5">
                                    Date:
                                </div>
                                <div class="col-sm-7"  style="text-align: right;">
                                    <?php echo $row_data['dates']; ?>
                                </div>
                            </div> 
                            <div class="row">
                                <div class="col-sm-5">
                                    Time:
                                </div>
                                <div class="col-sm-7"  style="text-align: right;">
                                    <?php echo $row_data['time']; ?>
                                </div>
                            </div> 
                            
                                 <div class="row">
                                <div class="col-sm-5">
                                    Fee:
                                </div>
                                <div class="col-sm-7"  style="text-align: right;">
                                    <?php echo $row_data['fee']; ?>
                                </div>
                            </div>
                            <a href="Cancel_booking_script.php?booking_id=<?php echo $row_data['booking_id']?>"> <button class="btn btn-primary form-control" style="background-color: #398a7b;color: #f9f9fd">Cancel Booking</button></a>
                            </div>
                        </div>
                
                    </div>
               <?php }}else {
                echo 'empty data';
           } ?>
                      
                </div>
            </div>
        
        <?php include "includes/footer.php" ?>
    </body>
</html>
