<html>
<head>

  <title>Saint Martin</title>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" type="text/css" href="css/home.css">
  <style>
  .main-content{
    font-size: 18px;
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
  <div class="main-content col-md-12">

            
                            
    <div id="content" role="main">
                
            <article class="post-12359 page type-page status-publish hentry">
                
                <div class="page-content">
                    <h3 style="text-align: justify;"><span style="color: #000000;"><b>St. Martin’s Island</b></span></h3>
<p style="text-align: justify;"><a href="image/st_martin.jpg"style="float:left;padding-right:15px;padding-bottom:10px;"><img class="alignleft wp-image-1880" src="image/st_martin.jpg" alt="Saint-Martin-Island" width="513" height="262" ></a><span style="color: #000000;">If you are done partying in Cox’s Bazar, St. Martin’s Island is the right place to calm down your soul. This coral island is about 10km (6mi) south-west of the southern tip of the mainland is a tropical cliché, with beaches fringed with coconut palms and bountiful marine life. This island has the most amazing blue water. Far from the maddening crowd, the serenity in this island will help your meditate and purify your soul. This air is so fresh and soothing. And the water is clearer than crystal. During any moonlight in St. Island you may end up deciding to stay in this island forever. And sea-foods here are not only delicious, but also abundant in variation.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">This amazing island is so small that it is possible to walk around the entire island. Each day a ferry leaves Teknaf for St. Martin’s Island which takes only 3 hours. You can hop in a Bus from Cox’s Bazar which will easily take you to St. Martin’s Island. And if you want to go directly from Dhaka, hop in a Dhaka-Teknaf Bus.</span></p>
<p style="text-align: justify;"><span style="color: #000000;"><b>How to Go?</b></span></p>
<p style="text-align: justify;"><span style="color: #000000;">Teknaf’s Damdmia to Saint Martin every morning 10 o’clock leave it ocean traffic utility ship. Of the specification are- ‘Keari Sindbad’, ‘LCT Kutubdia’, ‘Eagle’, ‘LCT Kajol’ etc. These ‘Teknaf-Saint Martin-Teknaf’ two way’s fare 600-1000 Taka. Time of low-tide main island are matching Chera Dwip but time of high-tide a little space tourist be crossing boat. Who do not reach walking there for Saint Martin wharf to Chera Dwip have engine boat and speedboat. Each per fare of engine boat 150-200 Taka and reserve speedboat fare 1200-1500 Taka.</span></p>
<p>&nbsp;</p>
<p style="text-align: justify;"><span style="color: #000000;"><b>Accommodation</b></span></p>
<p style="text-align: justify;"><span style="color: #000000;">Stay of Saint Martin as locations for the act good quality are hotel ‘Abokash porjoton Saint Martin resort. To Dhaka tourist can booking this two hotel. CTB Resort’s Executive Double room fare are 2000/- Taka, Executive Triple room 2400/- Taka, Deluxe Double room 1600/- Taka, Two bed’s Taboo 1000/- Taka. Contact – +880 1552 555 550, +880 1199 791 588. Saint Martin resort’s Executive room 2000/- Taka, Deluxe 1800/- Taka and different type of cottage fare are daily 1200-2000/- Taka. Contact – 8358485, +880 1552 420 602. It without Saint Martin’s different good quality are hotel – Blue Marine Resort, Preshad Paradise, Shimana Paria, Nil Dogonto Resort etc.</span></p>
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