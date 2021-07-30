<?php
require "includes/common.php";
$page_id = $_GET['page_id'];
if ($page_id == 'a') {
    $sql = "SELECT * FROM doctor d INNER JOIN category c ON d.cid=c.cid GROUP BY doc_id";
} else {
    $sql = "SELECT * FROM doctor d,category c WHERE d.cid=c.cid AND c.cid=$page_id";
}
$q = mysqli_query($con, $sql);
$count = 1;
?>

<html>
    <head>
        <title>Doctors</title>
        <link rel="Stylesheet" href="bootstrapin/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrapin/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrapin/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style1.css"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 

    </head>
    <body>
        <?php include "includes/header.php"; ?>
        <div class="container-fluid" style="padding-top: 80px; padding-bottom:80px">
            <div class="row">
                <?php
                $count1 = 1;
                while ($row_data = mysqli_fetch_array($q)) {
                    ?>
                    <div class="col-sm-3">
                        <div panel style="text-align:center;
                             border: .5px solid lightgrey; 
                             margin-bottom:15px;
                             background-color:#f3f3f8;color:#141313;">
                            <div class="panel-heading">
                                <center style="font-size: 20px">
                                    Doctor-<?php echo $count++ ?>
                                </center>
                            </div>
                            <div class="panel-body">
                                <div class="row"  style="padding-bottom:10px;"><center>
                                        <img src="imgs/doc<?php echo $row_data['doc_id'] ?>.jpg"/>                                                
                                    </center></div>
                                <div class="row" style="padding-bottom:10px;">
                                    <div class="col-sm-5">
                                        Name:
                                    </div>

                                    <div class="col-sm-7"  style="text-align: right;">
                                        <?php echo $row_data['name']; ?>

                                    </div>
                                </div>                            
                                <div class="row">
                                    <div class="col-sm-5">
                                        Address:
                                    </div>
                                    <div class="col-sm-7"  style="text-align: right;">
                                        <?php echo $row_data['address']; ?>
                                    </div>
                                </div>
                                <div class="row"><br>
                                    <div class="col-sm-5">
                                        Contact:
                                    </div>
                                    <div class="col-sm-7"  style="text-align: right;">
                                        <?php echo $row_data['contact']; ?>
                                    </div>
                                </div> 
                                <div class="row"><br>
                                    <div class="col-sm-5">
                                        Email:
                                    </div>
                                    <div class="col-sm-7"  style="text-align: right;">
                                        <?php echo $row_data['email']; ?>
                                    </div>
                                </div> 

                                <div class="row"><br>
                                    <div class="col-sm-5">
                                        Expert in:
                                    </div>
                                    <div class="col-sm-7"  style="text-align: right;">
                                        <?php echo $row_data['cat']; ?>
                                    </div>
                                </div> 
                                <div class="row"><br>
                                    <div class="col-sm-5">
                                        Fee:
                                    </div>
                                    <div class="col-sm-7"  style="text-align: right;">
                                        <?php echo $row_data['fee']; ?>
                                    </div>
                                </div>
                                <div class="row" style="padding-top: 20px;">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <a href="<?php
                                        if (!isset($_SESSION['email'])) {
                                            echo "Log_In.php";
                                        } else {
                                            $id = $row_data['doc_id'];
                                            echo "Appointment.php ?doc_id=$id";
                                        }
                                        ?>" class="btn btn-primary form-control" id="button">Book</a>                                                                    
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div> 
        <?php include "includes/footer.php" ?> 
    </body>
</html>