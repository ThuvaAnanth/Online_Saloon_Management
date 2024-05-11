<?php
     session_start();
     if(!isset($_SESSION['user']))
     {
          header("location:accountPage.php"); 
     }
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <title>Home</title>
     <link rel="stylesheet" href="bookAnAppoinment.css">
</head>
<body>   
     <div class="body">
          <div class="header">
               <h1><span class="firstWord">Habi </span><span class="lastWord">Bee</span></h1>
                    <nav>
                    <ul>
                                   <li><a href="homePage.php">Home</a></li>
                                   <li><a href="feedTime.php">Feed Time</a></li>
                                   <?php 
                                        if(!isset($_SESSION['user']))
                                        {    
                                             echo '<li><a href="accountPage.php">Account</a></li>';
                                        } 
                                   ?> 
                                   <?php 
                                        if(isset($_SESSION['user']))
                                        {    
                                             echo '<li><a href="userProfile.php">Profile</a></li>';
                                        } 
                                   ?> 
                                   <li><a href="about.php">About</a></li>
                                   <?php 
                                        if(isset($_SESSION['user']))
                                        {    
                                             echo '<li id="logout"><a href="logout.php">Log Out</a></li>';
                                        } 
                                   ?> 
                              </ul>
                    </nav>
          </div>
               
          <div class="types">
               <div>
                    <div class="title">
                         <h2>Categories</h2>
                         <hr class="underLine">
                    </div>
                    <div class="col">
                         <a href="hairstyle.php"><img src="images/hairstyle.png"></a>
                         <a href="hairColour.php"><img src="images/haircolour.png"></a>
                         <a href="hairCut.php"><img src="images/haircut.png"></a>
                         
                    </div>
               </div>
               <div>
                    <div class="title">
                         <h2>Hair Stylists</h2>
                         <hr class="underLine">
                    </div>
                    <div class="grid">
                        
                        <?php
                        require 'connect.php';
                        $get = "SELECT * FROM hairstylist";
                        $save = $con->query($get);
                        while($details=$save->fetch_array())
                         {
                              echo '
                              <div class="hairstylist">
                              <div>
                                   <img src="../Admin/images/'.$details[4].'" alt="">
                              </div>
                              <div>
                                   <p>
                                        Name :'.$details[0].'<br>
                                        Age : '.$details[1].'<br>
                                        Country : '.$details[2].'<br>
                                        Special In : '.$details[3].'<br>
                                   </p>
                                   <a href="bookingPage2.php?bookId='.$details[0].'&tableName=hairstylist"><button>BOOK NOW</button></a>
                              </div>
                         </div>';
                         }
                        ?>

                         
                    </div>
               </div>
          </div>

</body>
</html>