<?php
     session_start();
     require 'connect.php';
     $get = "SELECT * FROM signupdetails WHERE email='".$_SESSION['user']."'";
     $save=$con->query($get);
     $details=$save->fetch_array();

     if(isset($_POST['submit2']))
     {
          echo 'hello';
          $save2 = pathinfo($_FILES['coverPhoto']['name']);
          $imageName2 = $details[5]."Cover.".$save2['extension'];
          $imagePath2="userImages\\".$imageName2;
          move_uploaded_file($_FILES['coverPhoto']['tmp_name'],$imagePath2);

          $set2 = "UPDATE signupdetails SET coverPhoto ='".$imageName2."' WHERE email = '".$details[3]."'";
         
     }   
     $con->query($set2); 
     //header("location:userProfile.php");
?>