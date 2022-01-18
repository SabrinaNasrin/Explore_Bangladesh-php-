<html>
<head>

  <title>Khagrachori</title>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" type="text/css" href="css/home.css">
  <style>
  .main-content{
    font-size: 18px;
  }
  body{background-color: #e3e3e3;}
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
                
            <article class="post-116 page type-page status-publish hentry">
                
                <div class="page-content">
                    
   
<h3><p style="text-align: justify;"><span style="color: #000000;"><strong>Khagrachari</strong></span></h3>
<span style="color: #000000;"><a style="color: #000000;float:left;padding-right:15px;padding-bottom:10px;" href="image/khagrachori1.jpg"><img class="alignleft wp-image-1039 " src="image/khagrachori1.jpg" alt="Khagrachari_BangladeshInformation.Info2_" width="474" height="186" ></a></span><span style="color: #000000;">Khagrachari is a district in Bangladesh. It is under Chittagong Division. Locally it is known as “Chengmi” and also known as Phalang Htaung or the Mong Circle. It is a hilly district in Bangladesh. It is 112 km from Chittagong. It is also a part of Chittagong Hill Tracts It is one of the most magnificent places for tourist with hills, forest, waterfalls and aborigine. Three rivers are flow on the through the district. These are Chengi, Kasalong and Maini and Chengi. Main attraction is the tribal culture, green tree, hilly road and people also. Private and government rest house, hotels, motels and resorts are available. Majority people are Marma and Chakma. Local main transportation is Chader Gari.</span></p>
<p style="text-align: justify;"><span style="color: #000000;"><strong>How to Go:</strong></span></p>
<p><span style="color: #000000;">There are two ways to get in Khagrachari, both by road:</span></p>
<p><span style="color: #000000;">Direct from Dhaka via BaroiarHat or from Chittagong.</span></p>
<p><span style="color: #000000;">A number of non-stop coach services are available from Dhaka (e.g., Shanti Paribahan, Soudia, S. Alam and Shamoli Paribahan). Gabtoli, Saidabad, Komolapur and Kolabagan are the bus stand name in Dhaka where you can get bus tickets.</span></p>
<h3><span style="color: #000000;"><b>Places to see in Khagrachari</b></span></h3>
<p><span style="color: #000000;"><b>Alutila Mysterious Cave</b></span></p>
<p style="text-align: justify;"><span style="color: #000000;"><a style="color: #000000;float:right;padding-left:15px;padding-bottom:10px;" href="image/khagrachori2.jpeg"><img class="wp-image-1042 alignleft" src="image/khagrachori2.jpeg" alt="Alutila Mysterious Cave" width="383" height="255" ></a></span></p>
<p style="text-align: justify;"><span style="color: #000000;">Alutila Hill is 150 meter long and very beautiful attractive tourist place of Bangladesh. It is surrounded by deep green forest. Approximately 100 meters long a very dark Cave is the mysterious beauty of Alutila hill. If you are courageous and adventure lover, then this is a perfect spot to vanquish. There is no risk, nothing to warry, it is absolutely safe cave. It will take 15 minutes to pass the cave. Most interesting thing is the cold water flowing at bottom. From top of the hill you can see all around the Khagrachari town. This is an excellent picnic spot.</span></p>
<p style="text-align: justify;"><span style="color: #000000;"><strong>Location</strong></span></p>
<p style="text-align: justify;"><span style="color: #000000;">Khagrachari,Chittagong</span></p>
<p style="text-align: justify;"><span style="color: #000000;"><strong>How to Go</strong></span></p>
<p style="text-align: justify;"><span style="color: #000000;">First you have to go Khagrachari.You can find many bus service from Dhaka to Khagrachari available.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">From khagrachari you can can hire micro bus or even local bus are available to reach there at any time of the day.</span></p>
<p>&nbsp;</p>
<p><span style="color: #000000;"><b>Richhang waterfall</b></span></p>
<p style="text-align: justify;"><span style="color: #000000;"><a href="image/khagrachori3.jpg" style="float:left;padding-right:15px;padding-bottom:10px;"><img class=" wp-image-11309 alignleft" src="image/khagrachori3.jpg" alt="richang" width="391" height="239" ></a></span><span style="color: #000000;">Khagrachari – Chittagong road the area of Hridoy member. 7 km shout from the Porjoton motel. 2 km shout from Alutila, 1.50 km from east from the main road. Local bus or Chader gari until Hridoy Member area. Rest 1.50 km by foot.</span></p>
<div><span style="color: #000000;"><b>How to Go :</b></span></div>
<p style="text-align: justify;"><span style="color: #000000;"> Several options for reaching the waterfall from the Khagrachhari town. There are lots of public bus used to leave from the bus terminal for Chittagong and Feni. You can take any one of those.Beside the highway,a signboard which says where is the waterfall. From the highway, its 2.1 kilometer walking distance.There are numerous number of hills around the path and being rainy season, the environment is enchantingly green. But if you have your own vehicle, you can use it.Also when you’ll reach at the fall after walking, you’ll feel more adventurous.</span></p>
<p>&nbsp;</p>

<p><span style="color: #000000;"><b>Yonged Buddha Bihar</b></span></p>
<p><span style="color: #000000;">At Khagrachari town, 2 km far from Motel. Accessible by rickshaw.</span></p>
<p><span style="color: #000000;"><b>Panichari Brihot Buddha sculpture</b></span></p>
<p><span style="color: #000000;">Shantipur Arannya Kuthir – 25 km south from Khagrachari is peripheral region. The largest Buddha sculpture of Bangladesh is situated here. Khagrachari – Panichari Local bus fare- 35 tk. The road is flat.</span></p>
<p>&nbsp;</p>
<p><span style="color: #000000;"><b>Dighinala Manikker Dighi</b></span></p>
<p style="text-align: justify;"><a href="image/khagrachori4.jpg"style="float:right;padding-left:15px;padding-bottom:10px;"><img class=" wp-image-11411 alignleft" src="image/khagrachori4.jpg" alt="Dighinala-Manikker-Dighi" width="392" height="294"></a></p>
<p style="text-align: justify;"><span style="color: #000000;">One regional town situated 21 km south from Khagrachari. The Jhulonto Bridge, Buddha Bihar, Raja Manikker Dighi, Tribal culture, tradition and ancient standard of living. Khagrachari – Dighinala Bus/ 4 Wheel drive gyp.</span></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<h3><span style="color: #000000;"><b>Food &amp; Accommodation</b></span></h3>
<p><span style="color: #000000;"><b>Khagrachari Guest House</b></span></p>
<p><span style="color: #000000;">College Road, Mohajon Para</span></p>
<p><span style="color: #000000;">Phone – 01556510951<br>
</span></p>
<p><span style="color: #000000;"><b>Pankhaya Para, Khagrachari Sadar – 4400</b></span></p>
<p><span style="color: #000000;">Phone- 0371-62634, Mobile- 01556773493, 01863-607090</span></p>
<p><span style="color: #000000;"><b>Region Officers’ Club Khagrachari</b></span></p>
<p><span style="color: #000000;">Phone: 01783969200</span></p>
<p><span style="color: #000000;">Email: info@rock-sajek.com</span></p>
<h3><span style="color: #000000;"><b>How to go</b></span></h3>
<p><span style="color: #000000;">Tourist has to go there via Chittagong by air, train or by bus. Direct bus is availed from Dhaka.</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
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