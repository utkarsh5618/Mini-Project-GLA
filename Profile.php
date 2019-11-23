<?php
 require_once("connections.php");
$id=$_GET["id"];
$sql="select * from student_information where student_id='".$id."'";
$result = mysqli_query($con,$sql);
if($row=mysqli_fetch_array($result))
{
        ?>
<html>

<head>
<style>
.input-group{
font-size:25px;

}

</style>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  

</head>
<body>
    <div class="row" style="padding-top:20px">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card card-danger" style="background:skyblue">
           
                <div class="card-header">
                
                    <h3 style="text-align:center">View Detail</h3>
                   
                </div>
                <div class="card-body">
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
                  <a href="showStu.php" class="btn btn-danger">Back</a>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </div>
        <!-- /.col (left) -->
        <div class="col-md-2"></div>
        <!-- /.col (right) -->
    </div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>

</body>
</html>