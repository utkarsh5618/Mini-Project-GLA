<?php
     
     require_once("connections.php");
    
     if($_POST)
     {
        //$student_id = $_POST['st_id']; 
        $student_pass = $_POST['st_pass']; 
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name']; 
        $dor= date("Y-m-d",strtotime($_POST['dor'])); 
        $gender = $_POST['gender']; 
        $dobdate = date("Y-m-d",strtotime($_POST['dob']));
        $status="enabled";
        $contact_no = $_POST['contact_no']; 
        $qualification= $_POST['qualification']; 
        $city = $_POST['city']; 
        $email1 = $_POST['email1']; 
        $email2 = $_POST['email2']; 
        $address = $_POST['address']; 
        $description = $_POST['description']; 
		//$school=$_POST['school'];
		$percent=$_POST['percent'];
		//$school2=$_POST['school2'];
		$percent2=$_POST['percent2'];
        //$resumename = ""; 
        //$imagename = ""; 
        date_default_timezone_set("Asia/Calcutta");
        $lld=date("d/m/Y h:i:s");
       
        //file uploading
     $filename=$_FILES["resume"]["name"];
     $filetype=$_FILES["resume"]["type"];
     $filesize=$_FILES["resume"]["size"];
     $filetmpname=$_FILES["resume"]["tmp_name"];
     
      //file uploading
      $filenames=$_FILES["image"]["name"];
      $filetypes=$_FILES["image"]["type"];
      $filesizes=$_FILES["image"]["size"];
      $filetmpnames=$_FILES["image"]["tmp_name"];
      
      $sql="insert into student_information(student_password,first_name,last_name,registration_date,gender,date_of_birth,student_status,contact_no,qualification,city,email1,email2,address,description,resume,image,last_login_date,school,percentage,school2,percentage2) 
         values('".$student_pass."','".$first_name."','".$last_name."',
         '".$dor."','".$gender."','".$dobdate."','".$status."','".$contact_no."',
         '".$qualification."','".$city."','".$email1."','".$email2."','".$address."'
         ,'".$description."','".$filename."','".$filenames."','".$lld."','High School','".$percent."','Intermediate','".$percent2."')";
         if(mysqli_query($con,$sql))
         {
            //file ko specific place me store karne ke liye
            move_uploaded_file($filetmpnames,"photos/".$filenames);
            move_uploaded_file($filetmpname,"resumes/".$filename);
            //echo "Data inserted";
            header("Location:studentlogin.php");
          }
         else
          {
            echo "Data is not inserted";
          }
     }
     ?>
<!DOCTYPE html>
<html>
<head>
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
  <script src="Validation.js"></script>
    <script type="text/javascript">
        function validation() {
            if (document.form1.first_name.value == "") {
                alert("Please enter your first name.");
                document.form1.first_name.focus();
                return false;
            }
            if (document.form1.last_name.value == "") {
                alert("Please enter your last name.");
                document.form1.last_name.focus();
                return false;
            }
            /*if (document.form1.dob.value == "") {
                alert("Please enter your date of birth.");
                document.form1.dob.focus();
                return false;
            } else {
                var date = document.form1.dob.value;
                var yes = checkDate(date);
                if (!yes) {
                    alert("Please Enter a valid date of birth.");
                    document.form1.dob.focus();
                    return false;
                }
            }*/
            if (document.form1.email1.value == "") {
                alert("Please enter your primary email.");
                document.form1.email1.focus();
                return false;
            } else {
                var isEmail = emailValidator(document.form1.email1.value);
                if (!isEmail) {
                    alert("Please enter a valid primary email.");
                    document.form1.email1.focus();
                    return false;
                }
            }
            if (document.form1.address.value != "" && document.form1.address.value.length > 100) {
                alert("You can enter address upto 100 characters only.");
                document.form1.address.focus();
                return false;
            }
            if (document.form1.description.value != "" && document.form1.description.value.length > 200) {
                alert("You can enter description upto 200 characters only.");
                document.form1.description.focus();
                return false;
            }
            if (document.form1.st_id.value == "") {
                alert("Please enter your desired student id.");
                document.form1.st_id.focus();
                return false;
            }
            if (document.form1.st_pass.value == "") {
                alert("Please enter your desired password.");
                document.form1.st_pass.focus();
                return false;
            }
            if (document.form1.retype.value == "") {
                alert("Please enter retype password.");
                document.form1.retype.focus();
                return false;
            }
            if (document.form1.st_pass.value != document.form1.retype.value) {
                alert("Password and retype password are not same.");
                document.form1.st_pass.value = "";
                document.form1.retype.value = "";
                document.form1.st_pass.focus();
                return false;
            }
        }
    </script>

</head>
<body onLoad="javascript:document.form1.first_name.focus()">
    <div class="row" style="padding-top:20px">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card card-danger">
                <div class="card-header">
                    <h3 class="card-title">Student Registration Form</h3>
                </div>
                <div class="card-body">
                    <!-- Date dd/mm/yyyy -->
                   <form name="form1" onSubmit="return validation()" action="StudentRegister.php" method="post" enctype="multipart/form-data">

          <!--         <div class="form-group">

<div class="input-group">
    <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-lock"></i></span>
    </div>
    <input name="st_id" type="text" id="st_id" maxlength="20" class="form-control" placeholder="Student Id">
    
</div>
</div>-->
                    <!-- /.form group -->
                    <div class="form-group">

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            </div>
                            <input name="st_pass" type="password" id="st_pass" maxlength="20" class="form-control" placeholder="Password">
                            <input name="retype" type="password" id="retype" maxlength="20" class="form-control" placeholder="Retype Password">
                            
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- Date mm/dd/yyyy -->
                    <div class="form-group">

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user-alt"></i></span>
                            </div>
                            <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name">
                        </div>
                        <!-- /.input group -->
                    </div>
                    <div class="form-group">

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user-alt"></i></span>
                            </div>
                            <input name="last_name" type="text" id="last_name" maxlength="30" class="form-control" placeholder="Last Name">
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                    <div class="form-group">
                        <label>Date of Registeration:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                            </div>
                            <input name="dor" type="date" id="dor" size="10" maxlength="10" class="form-control">
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                    <div class="form-group clearfix">
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
                    <!-- phone mask -->
                    <div class="form-group">
                        <label>DOB:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                            </div>
                            <input name="dob" type="date" id="dob" size="10" maxlength="10" class="form-control">
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->


                    
                    <!-- phone mask -->
                    <div class="form-group">

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                            </div>
                            <input name="contact_no" type="text" id="contact_no" maxlength="20" class="form-control" placeholder="Contact No">
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                    <!-- IP mask -->
					 <div class="form-group">

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-laptop"></i></span>
                            </div>
                          High School
						  <input name="percent" type="text" id="percent" maxlength="20" class="form-control" placeholder="Percentage">
                            <label for="school">
                            </label>
							
                        </div>
                        </div>
                        <!-- /.input group -->
                   
					
					 <!-- <div class="form-group">

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-laptop"></i></span>
                            </div>
                              <input name="percent" type="text" id="percent" maxlength="20" class="form-control" placeholder="Percentage">
                        </div>
						  </div>
                        /.input group -->
                   
					
					
					 <div class="form-group">

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-laptop"></i></span>
                            </div>
                          Intermediate
						  <input name="percent2" type="text" id="percent2" maxlength="20" class="form-control" placeholder="Percentage">
                            <label for="school2">
                            </label>
                        </div>
                        </div>
                        <!-- /.input group -->
                   
					
					 <!--  <div class="form-group">

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-laptop"></i></span>
                            </div>
                              <input name="percent2" type="text" id="percent2" maxlength="20" class="form-control" placeholder="Percentage">
                        </div>
                       
                    </div>
					/.input group -->
					
					
					
                    <div class="form-group">

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-laptop"></i></span>
                            </div>
                            <select name="qualification" id="qualification" class="form-control">
                                    <option value="">-----Select Qualification-----</option>
									
                                   
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
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-map-marker"></i></span>
                            </div>
                            <input name="city" type="text" id="city" maxlength="30" class="form-control" placeholder="City">
                        </div>
                        <!-- /.input group -->
                    </div>
                    <div class="form-group">

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                            <input name="email1" type="text" id="email1" maxlength="100" class="form-control" placeholder="Primary Email">
                        </div>
                        <!-- /.input group -->
                    </div>
                    <div class="form-group">

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                            <input name="email2" type="text" id="email2" maxlength="100" class="form-control" placeholder="Secondary Email">
                        </div>
                        <!-- /.input group -->
                    </div>
                    <div class="form-group">

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-map-marker"></i></span>
                            </div>
                            <textarea name="address" cols="45" rows="2" id="address" class="form-control" placeholder="Address"></textarea>
                        </div>
                        <!-- /.input group -->
                    </div>
                    <div class="form-group">

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-comments"></i></span>
                            </div>
                            <textarea name="description" cols="45" rows="3" id="description" placeholder="Description" class="form-control"></textarea>
                        </div>
                        <!-- /.input group -->
                    </div>

                    <div class="form-group">

                        <div class="input-group">
                            <div class="input-group-prepend">

                            </div>
                            <b>Upload  Resume: </b>&nbsp;&nbsp;  <input name="resume" type="file" />
                        </div>
                        <!-- /.input group -->
                    </div>

                    <div class="form-group">

                        <div class="input-group">
                            <div class="input-group-prepend">

                            </div>
                            <b>Upload Image:</b>&nbsp;&nbsp;  <input name="image" type="file" />
                        </div>
                        <!-- /.input group -->
                    </div>
                    <div class="form-group">

                        <div class="input-group">
                            <input type="submit" class="btn btn-danger btn-block" name="btnregister" value="Register">

                        </div>
                        <!-- /.input group -->
                    </div>
                    </form>
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
