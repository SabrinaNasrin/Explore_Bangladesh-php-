<html>
<head>

  <title>By Air</title>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" type="text/css" href="css/home.css">
  <style>
  

  body{
    background-color: white;
  }
input[type=text] {
    width:175px;
    box-sizing: border-box;
   border-right: 0;
    border-top: 1px solid #ccc;
    border-bottom: 1px solid #ccc;
    border-left: 1px solid #ccc;
    border-radius: 3px;
    font-size: 16px;
    background-color: white;
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding: 5px;
     margin-left: -10px;
     margin-top: 70px;
     box-shadow: 0 8px 16px 0 #465025;
   
}
input[type=submit]
{  
     
    width:75px;
    margin-top: 70px;
    box-sizing: border-box;
    border-left: 0;
    border-top: 1px solid #ccc;
    border-bottom: 1px solid #ccc;
    border-right: 1px solid #ccc;
    border-radius: 3px;
    font-size: 16px;
    background-color: #457725;

    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding:5px;
    color: white;
    cursor: pointer;
    text-align: left;
    text-indent: 6px;
    position: absolute;
    box-shadow: 0 8px 16px 0 #465025;
}
.img img{
  margin-bottom: 25px;
}





</style>
   
</head>
<body>
  <h1>Explore <br>Bangladesh<br>
    Experience the land of stories</h1>
  <h2>
    <form action="search.php" method="post">
  <input type="text" name="search" placeholder="Search..">
  <input type="submit" name="search1" value="Search">
</form>
  </h2>
  <marquee style ="font-size:20px;color:red;font-family:hectica;">Welcome to Explore Bangladesh..&emsp;&#9632;&emsp;
    Exclusive Winter offer is going on and it will valid upto 31st January.&emsp;&#9632;&emsp;
    Famous Shakhrain Festival was celebrated in a very colorful way in Old Dhaka Yesterday.&emsp;&#9632;&emsp;</marquee>
  <ul>
    <li style="width:10%">
      <a class="active" href="home.php">Home</a>
    </li>
     <li class="dropdown" style="width:22%">
      <a class="dropbtn">About Bangladesh</a>
      <div class="dropdown-content">
              <a href="anthem.php">National Anthem of Bangladesh</a>
              <a href="bangladesh_at_a_glance.php">Bangladesh at a glance</a>
              <a href="history.php">History of Bangladesh</a>
              <a href="geography.php">Geography of Bangladesh</a>
              <a href="culture_religon.php">Culture,Religion and Bangladesh</a>
            </div>
    </li>
     <li class="dropdown" style="width:17%">
      <a class="dropbtn">Things to do</a>
      <div class="dropdown-content">
              <a href="experience_village.php">Experience village life & people</a>
              <a href="hill_track.php">Adventure in hill tracts</a>
              <a href="jungle.php">Trekking through the jungle</a>
              <a href="river_cruise.php">The grand river cruise</a>
              <a href="beach_holiday.php">Beach Holiday</a>
              <a href="tea_garden.php">Wondering the alleys of tea garden</a>
              <a href="festivals.php">Festivals</a>
              <a href="foods_shopping.php">Foods & Shopping</a>
              <a href="business_trip.php">Business trip</a>
              <a href="research_study.php">Research & Study</a>
            </div>
    </li>

     <li class="dropdown" style="width:17%">
      <a class="dropbtn">Things to see</a>
      <div class="dropdown-content">
              <a href="bangladesh_national_zoo.php">Bangladesh National Zoo</a>
              <a href="explore_the_archeological_wonders.php">Explore the Archeological Wonders</a>
              <a href="carnival_of_culture.php">Carnival of Culture</a>
              <a href="experience_the_diverse_ethnicity.php">Experience the diverse ethnicity</a>
              <a href="explore_the_architechtural_wonders.php">Explore the architechtural wonders</a>
              <a href="a_tripdown_to_memory_lane.php">A trip down to memory lane</a>
              <a href="land_of_pride.php">Land of pride</a>
          </div>
    </li>

     <li class="dropdown" style="width:17%">
      <a class="dropbtn">Where to stay</a>
        <div class="dropdown-content">
               <a href="hotel.php">Hotels</a>
                <a href="resort.php">Resorts</a>
              </div>
    </li>
     <li class="dropdown" style="width:17%">
      <a class="dropbtn">Travel Essentials</a>
      <div class="dropdown-content">
              <a href="travel_tips.php">Travel Tips</a>
              <a href="list_of_bangladeshi_embassies_abroad.php">List of Bangladesh Embassies abroad</a>
              <a href="froeign_embassies_in_bangladesh.php">Foreign Embassies in Bangladesh</a>
              <a href="points_of_immegration_ports.php">Points of immegration ports</a>
              <a href="money_exchange_points.php">Money exchange points</a>
              <a href="emergency_numbers.php">Emergency Numbers</a>
              <a href="government_holidays.php">Government Holidays</a>
          </div>
    </li>
  </ul>
  <div class="w3-content w3-section" style="max-width:100%">
  <img class="mySlides" src="image/flag_of_bd.png" style="width:100%">
  <img class="mySlides" src="image/chitta.png" style="width:100%">
  <img class="mySlides" src="image/White Water Lily.jpg" style="width:100%">
  <img class="mySlides" src="image/water_fall.png" style="width:100%">
  <img class="mySlides" src="image/tea_garden.png" style="width:100%">
  <img class="mySlides" src="image/nilgiri.jpg" style="width:100%">
   <img class="mySlides" src="image/chimbuk.png" style="width:100%">
  <img class="mySlides" src="image/ramna.png" style="width:100%">
  
  <img class="mySlides" src="image/scenery.png" style="width:100%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 3000); // Change image every 3 seconds
}
</script>
    <ul>
    <li>
      <a href="visit_bangladesh_year.php">Visit Bangladesh Year</a>
    </li>
    <li class ="dropdown">
      <a class="dropbtn" href="transportation.php">Transportation</a>
      <div class="dropdown-content">
              <a href="by_air.php">By Air</a>
              <a href="by_road.php">By Road</a>
              <a href="by_train.php">By Train</a>
              <a href="by_water.php">By Water</a>
              
            </div>
    </li>
    <li>
      <a href="tour_operators.php">Tour Operators</a>
    </li>
    <li>
      <a href="travel_agents.php">Travel Agents</a>
    </li><li>
      <a href="photo_galary.php">Photo Gallery</a>
    </li>
     <li>
      <a href="video_gallery.php">Videos</a>
    </li>
    <li>
      <a href="contact_us.php">Contact Us</a>
    </li>
  </ul>
<div class="main-content col-md-9">

            
                            
    <div id="content" role="main">
                
            <article class="post-166 page type-page status-publish hentry">
                
                <div class="page-content">
                  <div class="responsive">
  <div class="img">
    <a target="_blank" href="image/air2.jpeg">
      <img src="image/air2.jpeg" alt="beach">
    </a>
</div>
<div class="responsive">
  <div class="img">
    <a target="_blank" href="image/air3.jpeg">
      <img src="image/air3.jpeg" alt="beach">
    </a>
</div>
<div class="responsive">
  <div class="img">
    <a target="_blank" href="image/air1.jpeg">
      <img src="image/air1.jpeg" alt="beach">
    </a>
</div>
                    <p class="heading" style="text-align: justify;"><span style="color: #000000;"></a>Being a small country, it takes not more than 30 minutes to reach a destination from the capital city inside the country. As numerous flights are available with quality service, even your short itineraries are capable of providing a complete experience before to peak up your story. For the swift travelers, there are airports in every major cities and divisions from which we are able to go beyond our domestic and international boundary. Preferred already by many tourists for less time-consuming facility and better-service, our domestic flights can be a good choice to speed up your tour. For domestic travel, these airlines will be a great choice.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">&nbsp;</span></p>
<h3 class="heading2" style="text-align: justify;"><span style="color: #000000;"><strong>List of Airlines that operates Domestic Flights in Bangladesh:</strong></span></h3>

<?php
  

  $host='localhost';
  $user='root';
  $pass='';
  $db='explore_bangladesh';

  $con=mysqli_connect($host,$user,$pass,$db);
  mysqli_query($con,'SET CHARACTER SET utf8');
  mysqli_query($con,"SET SESSION collation_connection ='utf8_general_ci'");
  if($con)
  {
    echo("");
  }
  else
  {
    echo("Not connected");
  }



  $query = "SELECT * FROM `domestic air` WHERE 1";
  $query1 = "SELECT * FROM `international flight` WHERE 1";
  $result = mysqli_query($con,$query);

$result1 = mysqli_query($con,$query1);


  while($row=mysqli_fetch_array($result)){ 
 
  echo("<b>$row[name10]</b><br>$row[address6]<br><br>"); 
    
  
  }
  
  while($row=mysqli_fetch_array($result1)){ 
 
 
   echo("<b>$row[name11]</b><br>$row[address7]<br>");   
  
  }
  
?>
<p><span style="color: #000000;">&nbsp;</span></p>
<h3><span style="color: #000000;"><b>Helicopter</b></span></h3>
<p><span style="color: #000000;"><strong>List of Airlines Company that operates Helicopter Services in Bangladesh:</strong></span></p>
<p><span style="color: #000000;"><b>South Asian Airlines Limited (Saal)<br>
</b>House # 40, Apartment # 3 (2nd Flr,Sw)</span><br>
<span style="color: #000000;"> Road # 1, Banani Dohs</span><br>
<span style="color: #000000;"> Dhaka-1206, Bangladesh</span><br>
<span style="color: #000000;"> Phone: +88-02-8872150</span><br>
<span style="color: #000000;"> Fax: +88-02-8872151</span><br>
<span style="color: #000000;"> Mobile:&nbsp;+88-01-711-404-759 (Director Operations)</span><br>
<span style="color: #000000;"> +88-01-713-081-846 (Manager Operations)</span><br>
<span style="color: #000000;"> +88-01-199-855-781 (Managing Director)</span><br>
<span style="color: #000000;"> Email: southasianairlines@yahoo.com</span><br>
<span style="color: #000000;"> Web: www.southasian-airlines.com</span></p>
<p><span style="color: #000000;"><b>Square Air Limited<br>
</b>Square Centre</span><br>
<span style="color: #000000;"> 48, Mohakhali C/A</span><br>
<span style="color: #000000;"> Dhaka 1212, Bangladesh</span><br>
<span style="color: #000000;"> Tel: 88-02-8901374</span><br>
<span style="color: #000000;"> Fax: 88-02-8901375</span><br>
<span style="color: #000000;"> Cell: 01713185352</span><br>
<span style="color: #000000;"> E-mail: sal@squaregroup.com</span></p>

                </div>
            </article>

            
            
        
    </div>


        

</div>
 <div class="clearfix"></div>
<footer class="footer">&#169;2016. All rights reserved to<br>
   Sabrina Nasrin<br>
   Department of CSE


  </footer>



</body>
</html>