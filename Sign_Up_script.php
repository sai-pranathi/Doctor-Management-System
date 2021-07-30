<?php
require "includes/common.php";
$name = mysqli_real_escape_string($con, $_POST['Name']);
$email = mysqli_real_escape_string($con, $_POST['Email']);
$contact = mysqli_real_escape_string($con, $_POST['Contact']);
$password = md5(mysqli_real_escape_string($con, $_POST['Password']));
$address = mysqli_real_escape_string($con, $_POST['Address']);
$age= mysqli_real_escape_string($con, $_POST['Age']);
$regex_name = "/^[a-zA-Z-' ]*$/";
$regex_email = "/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/";
$regex_contact = "/[789][0-9]{9}/";
if (!preg_match($regex_name, $name)) {
    echo "<script>alert('Invalid name')</script>";
    echo "<script>location.href='Sign_Up.php'</script>";
} else if (!preg_match($regex_email, $email)) {
    echo "<script>alert('Invalid email')</script>";
    echo "<script>location.href='Sign_Up.php'</script>";
} else if (!preg_match($regex_contact, $contact)) {
    echo "<script>alert('Invalid contact')</script>";
    echo "<script>location.href='Sign_Up.php'</script>";
}
else if(strlen($password)<6){
    echo "<script>alert('Password must have minimum 6 characters')</script>";
    echo "<script>location.href='Sign_Up.php'</script>";
}
else{
    $select_email="select pid from registration where email='$email'";
    $select_email_result=mysqli_query($con,$select_email);
    if(mysqli_num_rows($select_email_result)){
        echo "<script>alert('email is already registered')</script>";
        echo "<script>location.href='Sign_Up.php'</script>";
    }
    else{
        $insert_user="insert into registration(pname,age,contact,email,password,address) values('$name','$age','$contact','$email','$password','$address')";        
        $insert_user_result=mysqli_query($con,$insert_user);
        if($insert_user_result){          
                echo "<script>alert('Sucessfully registered')</script>";                
               header('location:Log_In.php');            
        }
        else{
            header('location:Sign_Up.php');
        }
    }

}

        
    