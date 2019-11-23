<?php
     
     require_once("connections.php");
    
     
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
     
     ?>