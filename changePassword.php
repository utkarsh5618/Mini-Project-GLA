<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
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
                     <h2>Change Passowrd</h2>   
                        <h5>Want to change your Password!... </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                 <div class="col-md-2"></div>
                 <div class="col-md-8">
                 <div class="form-group input-group has-warning input-group-lg">
                                            <span class="input-group-addon"><i class="fas fa-eye-slash" style="color:green"></i></span>
                                            <input type="text" name="txtopass" class="form-control" placeholder="Old Password">
                                        </div> 
                   <div class="form-group input-group has-warning input-group-lg">
                                            <span class="input-group-addon"><i class="fas fa-eye" style="color:red"></i></span>
                                            <input type="text" name="txtnpass" class="form-control" placeholder="New Password">
                                        </div> 
                   <div class="form-group input-group has-warning input-group-lg">
                                            <span class="input-group-addon"><i class="fas fa-eye" style="color:red"></i></span>
                                            <input type="text" name="txtcpass" class="form-control" placeholder="Confirm Password">
                                        </div> 
                   <div class="form-group input-group-lg">
                                            
                                            <input type="submit" name="btnsave" value="SAVE" class="btn btn-lg btn-warning btn-block">
                                        </div> 
</div>
<div class="col-md-2"></div>
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
   <?php include("footer.txt"); ?>
</body>
</html>
