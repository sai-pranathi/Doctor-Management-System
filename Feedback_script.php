<?php
require "includes/common.php";
$name=mysqli_real_escape_string($con, $_POST['name']);
 $email= mysqli_real_escape_string($con, $_POST['email']);
 $comments=mysqli_real_escape_string($con, $_POST['comments']);
 $regex_name = "/^[a-zA-Z-' ]*$/";
$regex_email = "/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/";
if (!preg_match($regex_name, $name)) {
    echo "<script>alert('Invalid name')</script>";
  echo "<script>location.href='Feedback.php'</script>";
} else if (!preg_match($regex_email, $email)) {
    echo "<script>alert('Invalid email')</script>";
    echo "<script>location.href='Feedback.php'</script>";
}
else{
    $insert_comments="CALL `insert_feedback`('$name', '$email', '$comments')";
    $insert_comments_result=mysqli_query($con,$insert_comments);
    if($insert_comments){
        echo "<script>alert('Thanks for your Feedback!')</script>";
        header('location:thankfee.php');
    }
    else{
        echo "<script>alert('Please provide your feedback again.')</script>";
    }
}