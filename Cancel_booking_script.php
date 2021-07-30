<?php
require "includes/common.php";
$booking_id=$_GET['booking_id'];
$delete_query="DELETE from booking where booking_id='$booking_id'";
$delete_query_result=mysqli_query($con,$delete_query) or die(mysqli_error($con));
if($delete_query_result){
 echo "<script>alert('Your booking have cancelled!')</script>";
  echo "<script>location.href='Doctors.php?page_id=a'</script>";
}