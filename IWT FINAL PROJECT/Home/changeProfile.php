<?php
     session_start();
     require 'connect.php';
     $get = "SELECT * FROM signupdetails WHERE email='".$_SESSION['user']."'";
     $save=$con->query($get);
     $details=$save->fetch_array();

     if(isset($_POST['submit1']))
     {
          $save1 = pathinfo($_FILES['profilePhoto']['name']);
          $imageName1 = $details[5]."Profile.".$save1['extension'];
          $imagePath1="userImages\\".$imageName1;
          move_uploaded_file($_FILES['profilePhoto']['tmp_name'],$imagePath1);

          $set1 = "UPDATE signupdetails SET profilePhoto ='".$imageName1."' WHERE email = '".$details[3]."'";
     }
     $con->query($set1); 
     header("location:userProfile.php");
?>