<?php
 session_start();
 require_once("connections.php");
$id=$_GET["id"];
$sql="select * from student_information where student_id='".$id."'";
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
           <?php include("atopbar.php"); ?>
           <!-- /. NAV TOP  -->
           <?php include("aleftbar.php"); ?> 
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>View Details</h2>   
                        
                       ` </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                 <div class="col-md-2"></div>
                 <div class="col-md-8">
                 
                 <div class="card card-danger bg-danger">
           
          
           <div class="card-body" style="padding:15px; font-size:18px;">
               <!-- Date dd/mm/yyyy -->
              <form method="post">

              <div class="form-group">

<div class="input-group">
<label>Student Id: </label><?php echo($row["student_id"]); ?>
</div>
</div>
              
               <!-- Date mm/dd/yyyy -->
               <div class="form-group">

                   <div class="input-group">
                   <label>First Name:&nbsp;&nbsp;</label><?php echo($row["first_name"]); ?>   
                       
                       </div>
                   <!-- /.input group -->
               </div>
               <div class="form-group">

                   <div class="input-group">
                   <label>Last Name: </label><?php echo($row["last_name"]); ?>
                      </div>
                   <!-- /.input group -->
               </div>
               <!-- /.form group -->
               <div class="form-group">
               <div class="input-group">
                   <label>Date of Registeration: </label>
                   <?php echo($row["registration_date"]); ?>
                   
                   </div>
                   <!-- /.input group -->
               </div>
               <!-- /.form group -->
               <div class="form-group clearfix">
               <div class="input-group">
                   <label>Gender: </label>
                   <?php echo($row["gender"]); ?>

               </div>
               </div>
               <!-- phone mask -->
               <div class="form-group">
               <div class="input-group">
                   <label>DOB: </label>
                   <?php echo($row["date_of_birth"]); ?>
                  </div>
                   <!-- /.input group -->
               </div>
               <!-- /.form group -->


               
               <!-- phone mask -->
               <div class="form-group">

                   <div class="input-group">
                       
                   <label>Contact No.: </label><?php echo($row["contact_no"]); ?>
                       </div>
                   <!-- /.input group -->
               </div>
               <!-- /.form group -->
               <!-- IP mask -->
               <div class="form-group">

                   <div class="input-group">
                   <label>Qualification: </label><?php echo($row["qualification"]); ?>
                   </div>
                   <!-- /.input group -->
               </div>
               <!-- /.form group -->
               <div class="form-group">

                   <div class="input-group">
                   <label>City: </label><?php echo($row["city"]); ?>
                      </div>
                   <!-- /.input group -->
               </div>
               <div class="form-group">
               <div class="input-group">
               <label>Email: </label><?php echo($row["email1"]); ?>
                    </div>
                   <!-- /.input group -->
               </div>
              
               <div class="form-group">

                   <div class="input-group">
                       </div>
                   <!-- /.input group -->
               </div>
              
               <div class="form-group">

<div class="input-group">

<label>Address:</label><?php echo($row["address"]); ?>
</div>

<!-- /.input group -->
</div>
               <div class="form-group">

                   <div class="input-group">
                       
                   <b>Resume: </b>&nbsp;&nbsp;  <a href="resumes/<?php echo $row["resume"]; ?>">View Resume</a>
                   </div>
                       
                   <!-- /.input group -->
               </div>

               <div class="form-group">

                   <div class="input-group">
                       <div class="input-group-prepend">

                       </div>
                       <b>Image: </b>&nbsp;&nbsp;  <img class="img img-rounded img-thumbnail" src="photos/<?php echo $row["image"]; ?>" width="200px" height="200px" />
                   </div>
                   <!-- /.input group -->
               </div>
               <?php
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
