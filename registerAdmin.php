<?php
     
     require_once("connections.php");
    
     if($_POST)
     {
         $nm=$_POST["txtnm"];
         $unm=$_POST["txtunm"];
         $pwd=$_POST["txtpwd"];
         $mob=$_POST["txtmob"];
         $eml=$_POST["txteml"];
         
        
         date_default_timezone_set("Asia/Calcutta");
         $dt=date("d/m/Y h:i:s");
         
     //file uploading
     $filename=$_FILES["photo"]["name"];
     $filetype=$_FILES["photo"]["type"];
     $filesize=$_FILES["photo"]["size"];
     $filetmpname=$_FILES["photo"]["tmp_name"];
     
     
         $sql="insert into registeradmin(names,unm,pwd,mob,eml,img,dt) 
         values('".$nm."','".$unm."','".$pwd."','".$mob."','".$eml."','".$filename."','".$dt."')";
         if(mysqli_query($con,$sql))
         {
            //file ko specific place me store karne ke liye
            move_uploaded_file($filetmpname,"photos/".$filename);
            echo "Data inserted";
          }
         else
          {
            echo "Data is not inserted";
          }
        }
     ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Registration</title>
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
                     <h2 class="text-success">Register Now</h2>   
                        <h5>Don't have any account, Register Now.. </h5>
                       
                    </div>`
                </div>
                 <!-- /. ROW  -->
                 <hr />
                 <form action="registerAdmin.php" method="post" enctype="multipart/form-data">
                 <div class="col-md-2"></div>
                 <div class="col-md-8">
                 <div class="form-group input-group has-success input-group-lg">
                                            <span class="input-group-addon"><i class="fas fa-user"></i></span>
                                            <input type="text" name="txtnm" class="form-control" placeholder="Name">
                                        </div>  

                   <div class="form-group input-group has-success input-group-lg">
                                            <span class="input-group-addon"><i class="fas fa-user-circle"></i></span>
                                            <input type="text" name="txtunm" class="form-control" placeholder="Username">
                                        </div> 

                   <div class="form-group input-group has-success input-group-lg">
                                            <span class="input-group-addon"><i class="fas fa-eye"></i></span>
                                            <input type="text" name="txtpwd" class="form-control" placeholder="Password">
                                        </div> 
                   <div class="form-group input-group has-success input-group-lg">
                                            <span class="input-group-addon"><i class="fas fa-phone-alt"></i></span>
                                            <input type="text" name="txtmob" class="form-control" placeholder="Mobile">
                                        </div> 
                   <div class="form-group input-group has-success input-group-lg">
                                            <span class="input-group-addon"><i class="fas fa-envelope"></i></span>
                                            <input type="text" name="txteml" class="form-control" placeholder="Email">
                                        </div> 
                   <div class="form-group input-group has-success input-group-lg">
                                            <span class="input-group-addon"><i class="fas fa-file-image"></i></span>
                                            <input type="file" name="photo" class="form-control">
                                        </div> 
                   <div class="form-group input-group-lg">
                                            
                                            <input type="submit" name="btnsave" value="SAVE" class="btn btn-lg btn-success btn-block">
                                        </div> 
                                        </div>
                                        <div class="col-md-2"></div>
                                        </form>
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
   <?php include("footer.txt"); ?>
</body>
</html>
