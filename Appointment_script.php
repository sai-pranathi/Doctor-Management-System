<?php
require "includes/common.php";
$doc_id=$_GET['doc_id'];
 $userid=$_SESSION['id'];
 $name=mysqli_real_escape_string($con, $_POST['name']);
 $email=mysqli_real_escape_string($con, $_POST['email']);
 $contact=mysqli_real_escape_string($con, $_POST['contact']);
 $date=mysqli_real_escape_string($con, $_POST['date']);
 $time=mysqli_real_escape_string($con, $_POST['time']);
$regex_name = "/^[a-zA-Z-' ]*$/";
$regex_email = "/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/";
$regex_contact = "/[789][0-9]{9}/";
if (!preg_match($regex_name, $name)) {
   echo "<script>alert('Invalid name')</script>";
  echo "<script>location.href='Appointment.php?doc_id=$doc_id'</script>";
} else if (!preg_match($regex_email, $email)) {
    echo "<script>alert('Invalid email')</script>";
    echo "<script>location.href='Appointment.php?doc_id=$doc_id'</script>";
} else if (!preg_match($regex_contact, $contact)) {
    echo "<script>alert('Invalid contact')</script>";
   echo "<script>location.href=Appointment.php?doc_id=$doc_id'</script>";
}
else{
    $select_query="select * from booking where doc_id=$doc_id and dates='$date' and time='$time'";
    $select_query_result=mysqli_query($con,$select_query) or die(mysqli_error($con));
    $num=mysqli_num_rows($select_query_result);
    if($num>0){
        $row=mysqli_fetch_array($select_query_result);
        if($row['userid']==$_SESSION['id']){
        echo "<script>alert('Doctor is already booked')</script>";
        echo "<script>location.href='Doctors.php?page_id=a'</script>";
        }
        else{
            echo "<script>alert('Doctor is not available')</script>";
            echo "<script>location.href='Doctors.php?page_id=a'</script>";
        }
    }
    else{
    $insert_appointment="insert into booking(doc_id,userid,pname,pcontact,email,dates,time) values($doc_id,'$userid','$name','$contact','$email','$date','$time')";
  $insert_appointment_result=mysqli_query($con,$insert_appointment);
  if($insert_appointment_result){
      echo "<script>alert('Thanks for booking')</script>";
     header ('location:Viewappointment.php');
  }
  else{
      echo "<script>alert('Select a valid date within one year from today for booking  an appointment!')</script>";
    echo "<script>location.href='Doctors.php?page_id=a'</script>";
  }  
}
}

