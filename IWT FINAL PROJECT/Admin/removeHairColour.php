<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Remove Hair Colour</title>
    <link rel="stylesheet" href="adminHome.css" />
    <link rel="stylesheet" href="removeHairColour.css">
    <script src="adminHome.js"></script>
  </head>
  <body>
    <div class="body">
          <div class="menu" id="menu">
          <div class="logo">
               <h1 id="fullName">
               <span id="firstName">Habi</span><span id="lastName">Bee</span>
               </h1>
          </div>
          <div class="menuContent">
          <ul>
                    <li><a href="../Home/hairstyle.php">HAIR STYLES</a></li>
                    <li><a href="../Home/hairCut.php">HAIR CUTS</a></li>
                    <li><a href="../Home/hairColour.php">HAIR COLORS</a></li>
                    <li><a href="../Home/bookAnAppoinment.php">HAIRSTYLIST</a></li>
                    <li><a href="../Home/homePage.php">HOME</a></li>
                    <li><a href="../Home/feedTime.php">FEED TIME</a></li>
                    <li><a href="../Home/userProfile.php">PROFILE</a></li>
                    <li><a href="../Home/about.php">ABOUT</a></li>
               </ul>
          </div>
          <div class="cl">
               <span onclick="closee();" id="close">CLOSE</span>
          </div>
          </div>

          <div class="page" id="page">
          <div class="header">
               <div>
               <div class="viewPageDetails" id="pageDetails">
               <span onclick="view();">Page Details</span>
               </div>
               </div>
               <div class="logo" id="hideLogo">
               <h1 id="fullName">
               <span id="firstName">Habi</span><span id="lastName">Bee</span>
               </h1>
               </div>
          </div>


          <div class="full">
               <div class="firstHalf">
                    <hr>
                    <span>Remove Hair Colour</span>
               </div>
                    <div class="fullTable">
                         <div class="selectItem">
                              <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                              <?php

                                   require 'connect.php';
                                   $get = "select * from haircolour";
                                   $save = $con->query($get);

                                   echo "<select name='selectId' class='selectButten'>";
                                   while($details=$save->fetch_assoc())   
                                   {
                                        echo "<option>".$details['styleName'] ."</option>";
                                   }       
                                   echo "</select>";   
                                   echo "<input type='submit' class='submitButten' value='REMOVE HAIRCOLOUR'>";      
                                      
                              ?>
                              <?php 
                                   if(isset($_POST['selectId']))
                                   {
                                        $delete = "delete from haircolour where styleName='".$_POST['selectId']."'";
                                         $con->query($delete);
                                         echo "<script>alert('Removed Sucessfully')</script>";
                                   }
                              ?>
                              </form>
                         </div>
                         </div>
                    </div>
                    
                    
          </div>
          
          <div class="back">
               <a href="adminHome.php"><button>  &#60; Back </button></a>
          </div>
    </div>
  </body>
</html>
