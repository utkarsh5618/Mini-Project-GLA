<?php
require_once("connections.php");
$id=$_GET["id"];

$sql="delete from student_information where student_id='".$id."'";
$a=mysqli_query($con,$sql);
if(!$a)
{
    echo("Something Went Wrong");
}
else {
    header("Location:showStu.php");
}

mysqli_close($con);
?>