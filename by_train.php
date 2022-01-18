<html>
<head>

  <title>By Train</title>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" type="text/css" href="css/home.css">
  <style>
  body{
    background-color: #e3e3e3;
  }
  .alignleft{
    float: left;
    padding-right: 15px;
    padding-top: 5px;
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

tr:nth-child(even){background-color:  #90EE90}
tr:nth-child(odd){background-color: #e3e3e3}

th {
    background-color:   #008000;
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
                
            <article class="post-170 page type-page status-publish hentry">
                
                <div class="page-content">
                    <p style="text-align: justify;"><a href="image/train.jpeg"><img class="alignleft wp-image-1947" src="image/train.jpeg" alt="DEMU-Commuter-Train-Service-In-Bangladesh1" width="359" height="237"></a></p>
<p style="text-align: justify;"><span style="color: #000000;">If you are a fan of classic chugga chugga and continuing of amazement at the window beside your seats then train should be your perfect choice. The railways have been efficiently serving the visitors with connecting almost every tourist destination and major cities. Bangladesh Railway is a state-owned rail transport agency that operates and maintains the entire railway network of the country.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">Watching the news, you could be forgiven for thinking that Bangladesh was not so much a country as a disaster zone.&nbsp; But you’d be surprised.&nbsp; It is a fascinating country with a rich and varied history and at present fairly few tourists.&nbsp; Bangladesh has a largely British-built rail network linking most major towns and cities, including Dhaka &amp; Chittagong.&nbsp; The network is divided into two halves, eastern and western, by the great rivers which divide the country itself.&nbsp; The western network is largely broad gauge, the eastern network largely metre gauge.&nbsp; Unfortunately, connections between these two networks are often poor.&nbsp; There is a railway route map at <a style="color: #1E90FF;text-decoration:none;" href="http://www.railway.gov.bd" target="_blank">www.railway.gov.bd</a>.</span></p>
<p>&nbsp;</p>
<p style="font-size:20px;"><b>Train Schedule<br>
<a style="color:#1E90FF;font-size:18px;text-decoration:none;"href="http://visitbangladesh.gov.bd/wp-content/uploads/2014/11/Intercity-Trains.pdf" target="_blank">(Intercity Trains)</a></p>
<table class="Design7" width="784" cellspacing="0">
<thead>
<tr>
<th width="86"><strong>Train no</strong></th>
<th width="168"><strong> Train Name</strong></th>
<th class="Odd" width="144"><strong>Off day</strong></th>
<th class="Odd" width="92"><strong>From</strong></th>
<th width="294"><strong>Departure</strong></th>
<th class="Odd" width="92"><strong>To</strong></th>
<th class="Odd" width="92"><strong>Arrival</strong></th>
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



  $query = "SELECT * FROM `intercity train` WHERE 1";
  $result = mysqli_query($con,$query);


  while($row=mysqli_fetch_array($result)){ 
 
  echo("<tr>
    <td>$row[no]</td>
    <td> $row[name13] </td>
<td>$row[offday] </td>
<td>$row[from]</td>
<td>$row[departure]</td>
<td>$row[to]</td>
 <td>$row[arrival]</td>

 </tr>");   
  
  }
  
  
?>
</tbody>
</table>
<p><strong><a href="http://www.easytechtips24.com/train-schedule-and-time-table-in-bangladesh-railway/"
  style="text-decoration:none;color:#1E90FF;">Intercity &nbsp;bd train Schedule</a><br><span style="color: #000000;">(Broad Gauge &amp; Dual Gauge &amp; Broad Gauge )</span></strong></p>
<table class="Design7" width="784" cellspacing="0">
<thead>
<tr>
<th width="86"><strong>Train no</strong></th>
<th width="168"><strong> Train Name</strong></th>
<th class="Odd" width="144"><strong>Off day</strong></th>
<th class="Odd" width="92"><strong>From</strong></th>
<th width="294"><strong>Departure</strong></th>
<th class="Odd" width="92"><strong>To</strong></th>
<th class="Odd" width="92"><strong>Arrival</strong></th>
</tr>
</thead>
<tbody>
<tr>
<td>715</td>
<td>Kapotaskh express</td>
<td width="13%">Wednesday</td>
<td width="16%">Khulna</td>
<td>06:30</td>
<td>Rajshahi</td>
<td>13:10</td>
</tr>
<tr>
<td>716</td>
<td>Kapotaskh express</td>
<td width="13%">Wednesday</td>
<td width="16%">Rajshahi</td>
<td>14:00</td>
<td>Khulna</td>
<td>20:35</td>
</tr>
<tr>
<td>725</td>
<td>Sundarban express</td>
<td width="13%">Friday</td>
<td width="16%">Khulna</td>
<td>20:00</td>
<td>Dhaka</td>
<td>05:35</td>
</tr>
<tr>
<td>726</td>
<td>Sundarban express</td>
<td width="13%">Saturday</td>
<td width="16%">Dhaka</td>
<td>06:20</td>
<td>Khulna</td>
<td>16:30</td>
</tr>
<tr>
<td>727</td>
<td>Rupsha express</td>
<td width="13%">Thrusday</td>
<td width="16%">Khulna</td>
<td>07:50</td>
<td>Saidpur</td>
<td>17:20</td>
</tr>
<tr>
<td>728</td>
<td>Rupsha express</td>
<td width="13%">Thrusday</td>
<td width="16%">Saidpur</td>
<td>07:30</td>
<td>Khulna</td>
<td>17:15</td>
</tr>
<tr>
<td>731</td>
<td>Barendra express</td>
<td width="13%">Sunday</td>
<td width="16%">Rajshahi</td>
<td>15:00</td>
<td>Nilphamari</td>
<td>21:00</td>
</tr>
<tr>
<td>732</td>
<td>Barendra express</td>
<td width="13%">Sunday</td>
<td width="16%">Nilphamari</td>
<td>06:00</td>
<td>Rajshahi</td>
<td>11:40</td>
</tr>
<tr>
<td>733</td>
<td>Titumir express</td>
<td width="13%">Wednesday</td>
<td width="16%">Rajshahi</td>
<td>06:30</td>
<td>Chilahati</td>
<td>13:50</td>
</tr>
<tr>
<td>734</td>
<td>Titumir express</td>
<td width="13%">Wednesday</td>
<td width="16%">Chilahati</td>
<td>14:30</td>
<td>Rajshahi</td>
<td>21:50</td>
</tr>
<tr>
<td>747</td>
<td>Simanta express</td>
<td width="13%">No</td>
<td width="16%">Khulna</td>
<td>20:45</td>
<td>Saidpur</td>
<td>05:45</td>
</tr>
<tr>
<td>748</td>
<td>Simanta express</td>
<td width="13%">No</td>
<td width="16%">Saidpur</td>
<td>19:00</td>
<td>Khulna</td>
<td>04:30</td>
</tr>
<tr>
<td>753</td>
<td>Silk city express</td>
<td width="13%">Sunday</td>
<td width="16%">Dhaka</td>
<td>14:40</td>
<td>Rajshahi</td>
<td>20:50</td>
</tr>
<tr>
<td>754</td>
<td>Silk city express</td>
<td width="13%">Sunday</td>
<td width="16%">Rajshahi</td>
<td>07:30</td>
<td>Dhaka</td>
<td>13:30</td>
</tr>
<tr>
<td>755</td>
<td>Madhumati express</td>
<td width="13%">Friday</td>
<td width="16%">Goalonda Ghat</td>
<td>15:00</td>
<td>Rajshahi</td>
<td>20:25</td>
</tr>
<tr>
<td>756</td>
<td>Madhumati express</td>
<td width="13%">Friday</td>
<td width="16%">Rajshahi</td>
<td>07:10</td>
<td>Goalonda Ghat ghat</td>
<td>12:45</td>
</tr>
<tr>
<td>759</td>
<td>Padma Express</td>
<td width="13%">Tuesday</td>
<td width="16%">Dhaka Cantt</td>
<td>22:45</td>
<td>Rajshahi</td>
<td>04:45</td>
</tr>
<tr>
<td>760</td>
<td>Padma Express</td>
<td width="13%">Tuesday</td>
<td width="16%">Rajshahi</td>
<td>16:00</td>
<td>Dhaka cantt</td>
<td>21:50</td>
</tr>
<tr>
<td>761</td>
<td>Sagardari Express</td>
<td width="13%">Monday</td>
<td width="16%">Khulna</td>
<td>15:00</td>
<td>Rajshahi</td>
<td>21:30</td>
</tr>
<tr>
<td>762</td>
<td>Sagardari Express</td>
<td width="13%">Monday</td>
<td width="16%">Rajshahi</td>
<td>06:50</td>
<td>Khulna</td>
<td>13:30</td>
</tr>
<tr>
<td>763</td>
<td>Chittra Express</td>
<td width="13%">Monday</td>
<td width="16%">Khulna</td>
<td>08:30</td>
<td>Dhaka</td>
<td>18:30</td>
</tr>
<tr>
<td>764</td>
<td>Chittra Express</td>
<td width="13%">Monday</td>
<td width="16%">Dhaka</td>
<td>19:00</td>
<td>Khulna</td>
<td>05:10</td>
</tr>
<tr>
<td>765</td>
<td>Nilsagar</td>
<td width="13%">Monday</td>
<td width="16%">Dhaka Cantt</td>
<td>08:25</td>
<td>Nilphamari</td>
<td>17:30</td>
</tr>
<tr>
<td>766</td>
<td>Nilsagar</td>
<td width="13%">Sunday</td>
<td width="16%">Saidpur</td>
<td>23:20</td>
<td>Dhaka Cantt</td>
<td>07:45</td>
</tr>
<tr>
<td>769</td>
<td>Dhumketue express</td>
<td width="13%">Tuesday</td>
<td width="16%">Dhaka</td>
<td>06:00</td>
<td>Rajshahi</td>
<td>12:05</td>
</tr>
<tr>
<td>770</td>
<td>Dhumketue express</td>
<td width="13%">Monday</td>
<td width="16%">Rajshahi</td>
<td>23:20</td>
<td>Dhaka</td>
<td>04:50</td>
</tr>
<tr>
<td>3107/3110</td>
<td>Moitree Express</td>
<td width="13%">-</td>
<td width="16%">Dhaka Cantt</td>
<td>07:15</td>
<td>Kolkata</td>
<td>18:45</td>
</tr>
<tr>
<td>3108/3109</td>
<td>Moitree Express</td>
<td width="13%">-</td>
<td width="16%">Kolkata</td>
<td>07:10</td>
<td>Dhaka Cantt</td>
<td>19:00</td>
</tr>
</tbody>
</table>

<p><strong>Mail/Express Trains&nbsp;</strong><strong><em>(Train Schedule &amp; Time Table)</em></strong></p>
<p><strong>(Broad Gauge):</strong></p>
<table class="Design7" width="784" cellspacing="0">
<thead>
<tr>
<th width="86"><strong>Train no</strong></th>
<th width="168"><strong> Train Name</strong></th>
<th class="Odd" width="144"><strong>Off day</strong></th>
<th class="Odd" width="92"><strong>From</strong></th>
<th width="294"><strong>Departure</strong></th>
<th class="Odd" width="92"><strong>To</strong></th>
<th class="Odd" width="92"><strong>Arrival</strong></th>
</tr>
</thead>
<tbody>
<tr>
<td>5</td>
<td>Rajshahi express</td>
<td>No</td>
<td>Joydevpur</td>
<td>13:55</td>
<td>Chapainawabganj</td>
<td>01:00</td>
</tr>
<tr>
<td>6</td>
<td>Rajshahi express</td>
<td>No</td>
<td>Chapainawabganj</td>
<td>08:10</td>
<td>Sirajgonj Bazar</td>
<td>17:30</td>
</tr>
<tr>
<td>15</td>
<td>Mahananda Express</td>
<td>No</td>
<td>Khulna</td>
<td>12:40</td>
<td>Chapainawabganj</td>
<td>01:00</td>
</tr>
<tr>
<td>16</td>
<td>Mahananda Express</td>
<td>No</td>
<td>Rahanpur</td>
<td>05:45</td>
<td>Khulna</td>
<td>18:30</td>
</tr>
<tr>
<td>23</td>
<td>Rocket express</td>
<td>No</td>
<td>Khulna</td>
<td>09:30</td>
<td>Parbatipur</td>
<td>22:10</td>
</tr>
<tr>
<td>24</td>
<td>Rocket express</td>
<td>No</td>
<td>Parbatipur</td>
<td>10:00</td>
<td>Khulna</td>
<td>00:15</td>
</tr>
<tr>
<td>25</td>
<td>Nakshikantha express</td>
<td>No</td>
<td>khulna</td>
<td>02:00</td>
<td>Goalondaghat</td>
<td>11:00</td>
</tr>
<tr>
<td>26</td>
<td>Nakshikantha express</td>
<td>No</td>
<td>Goalondaghat</td>
<td>13:00</td>
<td>Khulna</td>
<td>22:15</td>
</tr>
<tr>
<td>27</td>
<td>Chilahati express</td>
<td>No</td>
<td>Parbatipur</td>
<td>04:30</td>
<td>Chilahati</td>
<td>06:30</td>
</tr>
<tr>
<td>28</td>
<td>Chilahati express</td>
<td>No</td>
<td>Chilahati</td>
<td>07:10</td>
<td>Parbatipur</td>
<td>09:30</td>
</tr>
<tr>
<td>31</td>
<td>Uttara express</td>
<td>No</td>
<td>Rajshahi</td>
<td>12:10</td>
<td>Parbatipur</td>
<td>19:15</td>
</tr>
<tr>
<td>32</td>
<td>Uttara express</td>
<td>No</td>
<td>Parbatipur</td>
<td>03:25</td>
<td>Rajshahi</td>
<td>10:25</td>
</tr>
<tr>
<td>53</td>
<td>Benapol commuter</td>
<td>No</td>
<td>Khulna</td>
<td>07:10</td>
<td>Benapol</td>
<td>09:50</td>
</tr>
<tr>
<td>54</td>
<td>Benapol commuter</td>
<td>No</td>
<td>Benapol</td>
<td>12:45</td>
<td>Khulna</td>
<td>15:40</td>
</tr>
<tr>
<td>57</td>
<td>Rajshahi commuter</td>
<td>No</td>
<td>Ishurdi</td>
<td>07:00</td>
<td>Chapainawabganj</td>
<td>11:20</td>
</tr>
<tr>
<td>58</td>
<td>Rajshahi commuter</td>
<td>No</td>
<td>Chapainawabganj</td>
<td>13:40</td>
<td>Ishurdi</td>
<td>19:00</td>
</tr>
</tbody>
</table>
<p><b>Contact<br>
</b><a href="http://visitbangladesh.gov.bd/wp-content/uploads/2014/11/Contact-Details.pdf" target="_blank" style="text-decoration:none;color:#1E90FF;">Contact Details</a></p>
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