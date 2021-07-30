
 <?php $category="Select * from category"; 
 $category_result=mysqli_query($con,$category); ?>
 <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Doctor Appointment System</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="AboutUs"><span class="glyphicon glyphicon-info-sign"></span> About Us</a></li>
                        <li><a href="Blood_donation.php">Blood Donation</a></li>
                        <?php if(!isset($_SESSION['email'])) { ?>
                        <li><a href="Sign_Up.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="Log_In.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        <?php } if(isset($_SESSION['email'])) { ?>
                       
                        <li class="dropdown">
                            <button class="dropbtn">Categories</button>
                            <div class="dropdown-content"><?php while($row=mysqli_fetch_array($category_result)) {
                                $id=$row['cid'];
                                $cat=$row['cat'];
                             ?>
                                <a href="Doctors.php?page_id=<?php echo $id ?>"><?php echo $cat; ?></a>
                            <?php } ?><a href="Doctors.php?page_id=a">All Doctors</a>
                            </div>
                        </li>
                         <li><a href="Doctors.php?page_id=a"><i class="fa fa-user-md"></i> Doctors</a></li>
                         <li><a href="Feedback.php">Feedback</a></li>
                         
                        <li><a href="Settings.php"><span class="glyphicon glyphicon-cog"></span>Settings</a></li>
                       <li><a href="Log_out.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li> 
                       <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>