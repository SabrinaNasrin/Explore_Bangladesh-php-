<html>
<head>

  <title>By Road</title>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" type="text/css" href="css/home.css">
  <style>
  body{
    background-color: #e3e3e3;
  }
   table {
    border-collapse: collapse;
    
    width:100%;
}

th, td {
    text-align: center;
    padding: 8px;
    border: 1px solid black;
}

tr:nth-child(even){background-color:  #B0C4DE;}
tr:nth-child(odd){background-color: white;}

th {
    background-color: #21618C;
    color: white;
}
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

.page-content{
  font-size: 18px;
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
                
            <article class="post-168 page type-page status-publish hentry">
                
                <div class="page-content">
                  <div class="responsive">
  <div class="img">
    <a target="_blank" href="image/bus.jpeg">
      <img src="image/bus.jpeg" alt="brtc">
    </a>
</div>
</div>
                  <div class="responsive">
  <div class="img">
    <a target="_blank" href="image/rickshaw1 .jpg">
      <img src="image/rickshaw1 .jpg" alt="rickshaw">
    </a>
</div>
</div>

<div class="responsive">
  <div class="img">
    <a target="_blank" href="image/car.jpg">
      <img src="image/car.jpg" alt="car">
    </a>
</div>
</div>
                    <p style="text-align: justify;"><span style="color: #000000;">Communication and transportation in Bangladesh has seen a dramatic expansion in recent years. Not only the roads which are holding us connected with each other for a longtime are well built and structured, but also the recent steps taken by the authority turned out effective and consequential. Our internal communication can never be torn apart because of our highways, bridges, flyovers, waterways, railways etc. No matter how long is the distance, you will never have to rule out anything from your tour inventory. The bonus you will get while travelling is our world renowned hospitality.</span></p>
<p style="text-align: justify;"><span style="color: #000000;"><b></b>For inter-division and inter-district public transportation, Bus is most reliable and cheap. There are bus terminals in every major city and town that will take you any place you wish you visit. It would be wise to reserve ticket two or three days before your departure so that your entire trip does not get hampered only because of unavailability of seat.</span></p>

<table class="Design7" width="784" cellspacing="0">
<thead>
<tr>
<th width="86"><strong>Name of the BUS</strong></th>
<th width="168"><strong>Details</strong></th>
<th class="Odd" width="144"><strong>Contact No</strong></th>
<th class="Odd" width="120"><strong>Address</strong></th>
<th width="294"><strong>Route </strong></th>
</tr>
</thead>
<tbody>
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



  $query = "SELECT * FROM `bus` WHERE 1";
  $result = mysqli_query($con,$query);


  while($row=mysqli_fetch_array($result)){ 
 
  echo("<tr><td>$row[name9]</td>
    <td> $row[details] </td>
<td>$row[phone] </td>
<td>$row[address5]</td>
 <td>$row[route]</td></tr>");   
  
  }
  
  
?>
</tbody>
</table>

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