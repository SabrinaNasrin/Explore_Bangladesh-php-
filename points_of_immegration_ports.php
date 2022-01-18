<html>
<head>

  <title>Point of Immigration ports</title>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" type="text/css" href="css/home.css">
  <style>
  
input[type=text] {
    width:175px;
    box-sizing: border-box;
    border: 1px solid #ccc;
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
    border: 1px solid #ccc;
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
                
            <article class="post-135 page type-page status-publish hentry">
                
                <div class="page-content">
                    <p style="text-align: justify;">
</p><strong>Airports</strong></span>
<div id="attachment_7186" style="width: 390px" class="wp-caption alignnone"><a style="color: #000000;" href="image/airport.jpeg"><img class=" wp-image-7186" src="image/airport.jpeg" alt="Dakha / Dacca, Bangladesh: Hazrat Shahjalal International Airport, formerly Zia International Airport - DAC - terminal 2 - photo by M.Torres" width="380" height="194"></a><p class="wp-caption-text"> <span style="color: #000000;"><em>Dakha/ Dacca, Bangladesh: Hazrat Shahjalal International Airport, formerly Zia International Airport- DAC-terminal 2 -photo by M.Torres</em></span></p></div>
<p style="text-align: justify;"><span style="color: #000000;font-size:20px;"><b>Internationals Airports in Bangladesh</b></span></p>

<span style="color: #000000;"><b>&#8226; Hazrat Shahjalal International Airport, Dhaka</b></span><br><br>
<span style="color: #000000;"><b>&#8226;Shah Amanat International Airport, Chittagong</b></span><br><br>
<span style="color: #000000;"><b>&#8226;Osmani International Airport, Sylhet</b></span><br><br>

<p style="text-align: justify;">
<span style="color: #000000;font-size:20px;"><b>Land Ports</b></span></p>
<span style="color: #000000;"><b>&#8226;Benaploe Land Port</b></span><br><br>
<span style="color: #000000;"><b>&#8226;Burimari Land Port</b></span><br><br>
<span style="color: #000000;"><b>&#8226;Bhomra Land Port</b></span><br><br>
<span style="color: #000000;"><b>&#8226;Akhaura Land Port</b></span><br><br>

<p style="text-align: justify;"><span style="color: #000000;"><b>&nbsp;</b></span></p>
<span style="color: #000000;font-size:20px;"><b>Sea Ports</b></span>
<p style="text-align: justify;"><span style="color: #000000;"><a style="color: #000000;" href="image/port.jpeg"><img class="alignnone  wp-image-7198" src="image/port.jpeg" alt="1416034129" width="311" height="197" ></a></span></p>

<span style="color: #000000;"><b>&#8226;Chittagong Sea Port</b></span><br><br>
<span style="color: #000000;"><b>&#8226;Port of Mongla</b></span><br><br>

<p style="text-align: justify;"><span style="color: #000000;"><em>Apart from these immigration ports, there are also some other domestic airports which can be used for inter-district or inter-division transport inside the country. These airports are:</em></span></p><br>

<span style="color: #000000;"><b>&#8226;Cox’s Bazar Airport</b></span><br><br>
<span style="color: #000000;"><b>&#8226;Shah Makhdum Airport, Rajshahi</b></span><br><br>
<span style="color: #000000;"><b>&#8226;Jessore Airport</b></span><br><br>
<span style="color: #000000;"><b>&#8226;Saidpur Airport</b></span><br><br>
<span style="color: #000000;"><b>&#8226;Barisal Airport</b></span><br><br>

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