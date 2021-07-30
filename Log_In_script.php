<?php
require "includes/common.php";
$email = mysqli_real_escape_string($con, $_POST['email']);
$password = md5(mysqli_real_escape_string($con, $_POST['password']));
$regex_email = "/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/";
if (!preg_match($regex_email, $email)) {
    echo "<script>alert('Invalid Email')</script>";
    echo "<script>location.href='Sign_Up.php'</script>";
}else if(strlen($password)<6){
    echo "<script>alert('Invalid password')</script>";
    echo "<script>location.href='Sign_Up.php'</script>";
}
else{
    $select_query=" CALL `select_user`('$email', '$password')";
    $select_query_result=mysqli_query ($con,$select_query) or die(mysqli_error($con));
    $num=mysqli_num_rows($select_query_result);
    if($num==0){
        echo "<script>alert('Not the registered user')</script>";
        echo "<script>location.href='Sign_Up.php'</script>";
    }
    else{
        $row=mysqli_fetch_array($select_query_result);
        echo $row['email'];
        echo $row['password'];
        $_SESSION['email']=$row['email'];
        $_SESSION['id']=$row['pid'];
        header('location:Doctors.php?page_id=a');
    }
}    
    
    
    