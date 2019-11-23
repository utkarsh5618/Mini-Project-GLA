<?php
 session_start();
 require_once("connections.php");
$id=$_SESSION["unm"];
$sql="select * from student_information where email1='".$id."'";
$result = mysqli_query($con,$sql);
if($row=mysqli_fetch_array($result))
{
        ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>View Profile</title>
  <?php include("head.txt"); ?>
  
  </head>
<body>
    <div id="wrapper">
           <?php include("topbar.php"); ?>
           <!-- /. NAV TOP  -->
           <?php include("leftbar.php"); ?> 
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Edit Details</h2>   
                        <h5>Want to go Back ?...   <a href="vProfile.php" class="btn btn-primary">View Profile</a>`
                   </h5>
                       ` </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                 <div class="col-md-2"></div>
                 <div class="col-md-8">
                 
<div class="card card-danger bg-danger">
           
          
           <div class="card-body" style="padding:15px; font-size:18px;">
               <!-- Date dd/mm/yyyy -->
              <form method="post" action="eProfile.php">

            
              
               <!-- Date mm/dd/yyyy -->
               <div class="form-group">

                   <div class="input-group">
                   <label>First Name:&nbsp;&nbsp;</label><input name="first_name" type="text" value="<?php echo($row["first_name"]); ?>"/>   
                       
                       </div>
                   <!-- /.input group -->
               </div>
               <div class="form-group">

                   <div class="input-group">
                   <label>Last Name: &nbsp;&nbsp;</label><input name="last_name" type="text" value="<?php echo($row["last_name"]); ?>"/>
                      </div>
                   <!-- /.input group -->
               </div>
               <!-- /.form group -->
               <div class="form-group">
               <div class="input-group">
                   <label>Date of Registeration:&nbsp;&nbsp; </label>
                   <input name="dor" type="date" value="<?php echo($row["registration_date"]); ?>" />
                   
                   </div>
                   <!-- /.input group -->
               </div>
               <!-- /.form group -->
               <div class="form-group clearfix">
               <div class="input-group">
               <label>Gender:</label>
                        <div class="icheck-primary d-inline">
                            Male:  <input name="gender" type="radio" value="Male" id="radioPrimary1">
                            <label for="radioPrimary1">
                            </label>
                        </div>
                        <div class="icheck-primary d-inline">
                            Female: <input name="gender" type="radio" value="Female" id="radioPrimary2">
                            <label for="radioPrimary2">
                            </label>
                        </div>

               </div>
               </div>
               <!-- phone mask -->
               <div class="form-group">
               <div class="input-group">
                   <label>DOB: &nbsp;&nbsp;</label>
                   <input name="dob" type="date" value="<?php echo($row["date_of_birth"]); ?>" />
                  </div>
                   <!-- /.input group -->
               </div>
               <!-- /.form group -->


               
               <!-- phone mask -->
               <div class="form-group">

                   <div class="input-group">
                       
                   <label>Contact No.: &nbsp;&nbsp;</label>
                   <input name="contact_no" type="text" value="<?php echo($row["contact_no"]); ?>" />
                       </div>
                   <!-- /.input group -->
               </div>
               <!-- /.form group -->
               <!-- IP mask -->
               <div class="form-group">

                   <div class="input-group">
                   <label>Qualification: &nbsp;&nbsp;</label>
                   <select name="qualification" id="qualification" class="form-control">
                                    <option value="">-----Select Qualification-----</option>
                                    <option value="High School">High School</option>
                                    <option value="Graduate">Graduate</option>
                                    <option value="MCA">MCA</option>
                                    <option value="BCA">BCA</option>
                                    <option value="Master Degree">Master Degree</option>
                                </select>
                   
                    </div>
                   <!-- /.input group -->
               </div>
               <!-- /.form group -->
               <div class="form-group">

                   <div class="input-group">
                   <label>City: &nbsp;&nbsp;</label>
                   <input name="city" type="text" value="<?php echo($row["city"]); ?>" />
                      </div>
                   <!-- /.input group -->
               </div>
               <div class="form-group">
               <div class="input-group">
               <label>Email: &nbsp;&nbsp;</label>
               <input name="email1" type="text" value="<?php echo($row["email1"]); ?>" />
                    </div>
                   <!-- /.input group -->
               </div>
              
              
               <div class="form-group">

<div class="input-group">

<label>Address:&nbsp;&nbsp;</label>
<input  name="address" type="text" value="<?php echo($row["address"]); ?>" />
</div>

<!-- /.input group -->
</div>
<div class="form-group">
<div class="input-group">
<input type="submit" value="Update" name="updbtn" class="btn btn-danger btn-block" />
</div>
</div>
                   <!-- /.input group -->
               </div>
               <?php
}

if($_POST)
{
    
   
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
     
    //$resumename = ""; 
    //$imagename = ""; 
    date_default_timezone_set("Asia/Calcutta");
    $lld=date("d/m/Y h:i:s");
   $sql="update student_information set first_name='".$first_name."',last_name='".$last_name."',registration_date='".$dor."',gender='".$gender."',date_of_birth='".$dobdate."', contact_no='".$contact_no."',qualification='".$qualification."',city='".$city."', email1='".$email1."',address='".$address."', last_login_date='".$lld."' where email1='".$id."'";
$result=mysqli_query($con,$sql);
if($result)
{
   //header("Location:vProfile.php");
   $_SESSION["nm"]= $first_name;
   echo "Updated Successfully";
}
else {
    echo "Something Went Wrong";
}
}
?>
            
              
               </form>
              
               </div>
            
           </div>
           <!-- /.card-body -->
       </div>
       <!-- /.card -->



</div>
<div class="col-md-2"></div>
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
   <?php include("footer.txt"); ?>
   
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>

</body>
</html>
