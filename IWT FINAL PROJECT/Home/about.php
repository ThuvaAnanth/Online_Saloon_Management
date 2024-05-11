<!DOCTYPE html>
<html lang="en">
<head>
     <title>About</title>
     <link rel="stylesheet" href="about.css">
</head>
<body>   
          <div class="body">
                    <div class="header">
                         <a href="homePage.php"><h1><span class="firstWord">Habi </span><span class="lastWord">Bee</span></h1></a>
                         <nav>
                         <ul>
                                   <li><a href="homePage.php">Home</a></li>
                                   <li><a href="feedTime.php">Feed Time</a></li>
                                   <?php session_start();
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
                    <div class="restPage">
                         <div class="white">
                              
                              
                         </div>
                         <div class="image">
                              <img src="images/ceo1.jpg" alt="">
                         </div>
                         <div class="detail1">
                              <h2>About Our Company</h2>
                              <p>HabiBee , Our online salon booking system with us you can book your service 
                                   and also can share your Experiance as vituals Create your Account and join with us  </p>
                              <?php 
                                   if(isset($_SESSION['user']))
                                   {
                                        echo '<button>THANK YOU FOR JOINING</button>';
                                   }
                                   else
                                   {
                                        echo '<a href="accountPage.php"><button>JOIN NOW </button></a>';
                                   }
                              ?>

                         </div>
                         <div class="bigBox">
                              <div class="box" id="box1">
                                   <h2>01</h2>
                                   <p>Habibee is an innovative and user-friendly online
                                         salon booking system that revolutionizes the way people book appointments with salons and beauty 
                                         professionals. <br> Designed to simplify the salon booking process, Habibee offers a seamless and 
                                         convenient platform for customers to discover, compare, and book salon services effortlessly.
                                        </p>
                              </div>
                              <div class="box" id="box2">
                                   <h2>02</h2>
                                   <p>With Habibee, customers gain access to a comprehensive directory of salons, spas, hairdressers, 
                                        and beauty experts, all in one place. <br> The system provides detailed information about each salon, 
                                        including services offered, pricing, location, and customer reviews,
                                         enabling users to make informed decisions based on their specific needs and preferences.
                                        </p>
                              </div>
                              <div class="box" id="box3">
                                   <h2>03</h2>
                                   <p>Using Habibee is a breeze. Customers can simply log in to the user-friendly website
                                        where they are greeted with an intuitive interface.
                                        <br> They can then browse through a
                                          wide range of services, such as haircuts, styling, coloring, and more. 
                                          Detailed descriptions  and high-quality visuals help customers visualize the experience they can expect from each salon.
                                        </p>
                              </div>
                         </div>
                    </div>
                    
          </div>    
          <div class="center">
               <div>
                    <div class="branchList">
                         YOU ARE OUR PRIDE 
                         <span class="million">1 MILLION + WE </span>
                    </div>  
                    <div class="branches">
                         <img src="images/worldmap.jpg" alt="">
                    </div>
               </div>
               <div class="middle">
                    <div class="box">
                         <div class="circle">
                              <img src="images/ceo3.webp" alt="">
                         </div>
                         <div class="details">
                              <h3>MALABE BRANCH</h3>
                              <ul>
                                   <li>Manager : smith</li>
                                   <li>Location : Malabe City</li>
                                   <li>Customer : 100K +</li>
                                   <li>Open Weekdays : 8.00 to 20.00</li>
                                   <li>Booking : 24 X 7</li>
                              </ul>
                              <h3>SERVICES</h3>
                              <ul>
                                   <li>Hair Cut</li>
                                   <li>Hair Colour</li>
                                   <li>Hair Style</li>
                                   <li>Book HairStylist</li>
                                   <li>Social Connectivity</li>
                              </ul>
                              
                         </div>
                    </div>
                    <div class="box">
                         <div class="circle">
                              <img src="images/ceo4.jpg" alt="">
                         </div>
                         <div class="details">
                              <h3>KANDY BRANCH</h3>
                              <ul>
                                   <li>Manager : smith</li>
                                   <li>Location : Malabe City</li>
                                   <li>Customer : 100K +</li>
                                   <li>Open Weekdays : 8.00 to 20.00</li>
                                   <li>Booking : 24 X 7</li>
                              </ul>
                              <h3>SERVICES</h3>
                              <ul>
                                   <li>Hair Cut</li>
                                   <li>Hair Colour</li>
                                   <li>Hair Style</li>
                                   <li>Book HairStylist</li>
                                   <li>Social Connectivity</li>
                              </ul>
                         </div>
                    </div>
                    <div class="box">
                         <div class="circle">
                              <img src="images/ceo5.jpg" alt="">
                         </div>
                         <div class="details">
                              <h3>COLOMBO BRANCH</h3>
                              <ul>
                                   <li>Manager : smith</li>
                                   <li>Location : Malabe City</li>
                                   <li>Customer : 100K +</li>
                                   <li>Open Weekdays : 8.00 to 20.00</li>
                                   <li>Booking : 24 X 7</li>
                              </ul>
                              <h3>SERVICES</h3>
                              <ul>
                                   <li>Hair Cut</li>
                                   <li>Hair Colour</li>
                                   <li>Hair Style</li>
                                   <li>Book HairStylist</li>
                                   <li>Social Connectivity</li>
                              </ul>
                         </div>
                    </div>
               </div>
          </div>  
</body>
</html>