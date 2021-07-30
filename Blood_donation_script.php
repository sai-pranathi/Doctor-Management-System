<?php
require "includes/common.php";
$Name = mysqli_real_escape_string($con, $_POST['Name']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$Contact = mysqli_real_escape_string($con, $_POST['Contact']);
$Address = mysqli_real_escape_string($con, $_POST['Address']);
$Age= mysqli_real_escape_string($con, $_POST['Age']);
$Gender=mysqli_real_escape_string($con, $_POST['Gender']);
$blood_group=mysqli_real_escape_string($con, $_POST['blood_group']);
$regex_name = "/^[a-zA-Z-' ]*$/";
$regex_email = "/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/";
$regex_contact = "/[789][0-9]{9}/";
if (!preg_match($regex_name, $Name)) {
    echo "<script>alert('Invalid name')</script>";
   echo "<script>location.href='Blood_donation.php'</script>";
} else if (!preg_match($regex_email, $email)) {
    echo "<script>alert('Invalid email')</script>";
    echo "<script>location.href='Blood_donation.php'</script>";
} else if (!preg_match($regex_contact, $Contact)) {
    echo "<script>alert('Invalid contact')</script>";
   echo "<script>location.href='Blood_donation.php'</script>";
}
else{
    $insert_donar="CALL `insert_donar`('$Name','$Address','$email','$Gender','$Contact','$blood_group','$Age')";
     //echo "$insert_donar";
     $insert_donar_result=mysqli_query($con,$insert_donar);
     //print_r("$insert_donar_result");
     $donar=mysqli_insert_id($con);
     //echo "$donar";
    if($insert_donar_result){
          
               echo "<script>alert('Sucessfully registered')</script>";
                
            header('location:Thanks.php');
         }
         else{
          echo "<script>alert('Register again')</script>";
          header('location:Blood_donation.php');
         }
}         
