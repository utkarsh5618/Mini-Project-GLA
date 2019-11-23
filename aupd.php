<?php
 session_start();
 require_once("connections.php");
  $id=$_SESSION["aids"];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name']; 
    $dor= date("Y-m-d",strtotime($_POST['dor'])); 
    $gender = $_POST['gender']; 
    $dobdate = date("Y-m-d",strtotime($_POST['dob']));
    
    $contact_no = $_POST['contact_no']; 
    $qualification= $_POST['qualification']; 
    $city = $_POST['city']; 
    $email1 = $_POST['email1']; 
   
    $address = $_POST['address']; 
     
     
    
    date_default_timezone_set("Asia/Calcutta");
    $lld=date("d/m/Y h:i:s");
   $sql="update student_information set first_name='".$first_name."',last_name='".$last_name."',registration_date='".$dor."',gender='".$gender."',date_of_birth='".$dobdate."', contact_no='".$contact_no."',qualification='".$qualification."',city='".$city."', email1='".$email1."',address='".$address."', last_login_date='".$lld."' where student_id='".$id."'";
$result=mysqli_query($con,$sql);
if($result)
{
   header("Location:showStu.php");
   //echo "Updated Successfully";
}
else {
    echo "Something Went Wrong";
}

?>