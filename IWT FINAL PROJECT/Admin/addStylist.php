<?php
if(isset($_POST["sName"]))
{
$sname=$_POST["sName"];
$age=$_POST["age"];
$description=$_POST["country"];
$stylistName=$_POST["special"];


$imageinfo=pathinfo($_FILES['imageFile']['name']);
$targetFile = "images\\".$_POST["sName"].".".$imageinfo['extension'];
$imageFile=$_POST["sName"].".".$imageinfo['extension'];
move_uploaded_file($_FILES['imageFile']['tmp_name'],$targetFile);

     require 'connect.php';
     $check = "select styleName from haircolour where styleName ='".$_POST["sName"]."'";
     $save = $con->query($check);
          if($save->num_rows>0)
          {
               echo "<script>alert('This HAIRSTYLIST already Exist try new name !!!')</script>";
          }
          else
          {
               $insert = "insert into hairstylist(styleName,age,country,special,image,serviceName) values('".$_POST['sName']."',".$_POST['age'].",'".$_POST['country']."','".$_POST['special']."','".$imageFile."','hairstylist')";
               $y=$con->query($insert);
               echo "<script>alert('Added Sucessfully')</script>";
          }
     
     $con->close();

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
     <title>Add Hair Style</title>
     <link rel="stylesheet" href="adminHome.css" />
     <link rel="stylesheet" href="addHairColour.css">
     <script src="adminHome.js"></script>
</head>

<body>
     <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
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
                         <span>New Hair Stylist</span>
                         <img src="images/hairstylist.png" alt="">
                         <input type="file" name="imageFile" class="fileChoose">
                    </div>
                    <div class="fullTable">
                         <div class="singleLine">
                              <div class="left">
                                   <span>Stylist Name :</span>
                              </div>
                              <div class="right">
                                   <input type="text" name="sName" placeholder="Name">
                              </div>
                         </div>

                         <div class="singleLine">
                              <div class="left">
                                   <span>Age :</span>
                              </div>
                              <div class="right">
                                   <input type="text" name="age" placeholder="Age">
                              </div>
                         </div>
                         <div class="singleLine">
                              <div class="left">
                                   <span>Country :</span>
                              </div>
                              <div class="right">
                                   <input type="text" name="country" placeholder="Country">
                              </div>
                         </div>
                         <div class="singleLine">
                              <div class="left">
                                   <span>Specialist In :</span>
                              </div>
                              <div class="right">
                                   <input type="text" name="special" placeholder="Specialised In">
                              </div>
                         </div>
                    </div>


               </div>
               <div class="add">
                    <button type="submit" class="butten">ADD</button>
               </div>
               <div class="back">
                    <a href="adminHome.php"><button type="button"> &#60; Back </button></a>
               </div>
          </div>
     </form>
</body>

</html>