<?php 

     require 'connect.php';
     $send = "DELETE  FROM orderlist    WHERE customerMail ='".$_GET['email']."' AND serviceName = '".$_GET['sname']."'";
     $con->query($send);
     $con->close();
     header("location:viewOrder.php");
?>