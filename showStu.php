<?php
 require_once("connections.php");
?>
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
           <?php include("atopbar.php"); ?>
           <!-- /. NAV TOP  -->
           <?php include("aleftbar.php"); ?> 
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Show Admin</h2>   
                        <h5>Manage Admin</h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                 <table class="table table-success table-striped table-hover">
        <tr class="thead-dark">
            
            <th>NAME</th>
            <th>MOBILE</th>
            <th>IMAGE</th>
           
            <th style="text-align:center" colspan="3">ACTIONS</th>
        </tr>
        <?php
$sql="select * from student_information";
$result = mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
        ?>
        <tr>
            
            <td><?php echo($row["first_name"]); ?></td>
            <td><?php echo($row["contact_no"]); ?></td>
            <td><img src="photos/<?php echo($row["image"]); ?>" width="100px" height="100px" /></td>
            <td><a href="vStudent.php?id=<?php echo($row["student_id"]); ?>" class="btn btn-primary"><span class="fas fa-eye"></span> VIEW</a></td>
            <td><a href="eStudent.php?id=<?php echo($row["student_id"]); ?>" class="btn btn-warning"><span class="fas fa-pencil-alt"></span> UPDATE</a></td>
            <td><a href="delete.php?id=<?php echo($row["student_id"]); ?>" class="btn btn-danger"><span class="fas fa-trash-alt"></span> DELETE</a></td>
        </tr>
        <?php
          }
        ?>
        </table>
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
   <?php include("footer.txt"); ?>
</body>
</html>
<?php

mysqli_close($con);
?>