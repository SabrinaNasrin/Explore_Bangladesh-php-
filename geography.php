<html>
<head>

  <title>Geography and Climate</title>
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
                <article class="post-71 page type-page status-publish hentry">
               <div class="page-content">
                    <h3><span style="color: #000000;">Geography</span></h3>
<p style="text-align: justify;"><span style="color: #000000;">Bangladesh is a <q>Land of Stories</q>. Everything of this land tells a story; a story of Bangladeshi people and their heart. Not only the livelihood of Bangladeshi people is deeply rooted in this land, but also their life is deeply incorporated in this lands.</span></p>

<p style="text-align: justify;"><span style="color: #000000;">This country has a very fertile alluvial soil which gives the country abundant crops every year. These lands are like our parents, our eternal guardian who take cares of us, nurture us with providing our primitive needs.</span></p>

<p style="text-align: justify;"><span style="color: #000000;">With a grand and resourceful Bay of Bengal at its south, Bangladesh is called the land of rivers. As a riverine country, about 700 rivers including tributaries flow through the country in which the souls and livelihood of Bangladeshi people are strongly connected. Like so many songs and poems — which are written specially to celebrate these rivers-the majestically curvy banks or the turbulent tide of Bangladeshi rivers give the people hope and an excitement to live the best out of it. Apart from these rivers, the country also have plenty of haors, baor, jheel, beel which strengthens our relation with more affection.</span></p>

<p style="text-align: justify;"><span style="color: #000000;">Covered with diversified natural wonders and wildlife, this country sees a wide range of Hills in the Chittagong Hill Tracts in the southeast and Sylhet division in the northeast. What make these areas more interesting and exotic are the tribal people inhabited here for a long period of time.</span></p>

<p style="text-align: justify;"><span style="color: #000000;">The Sundarbans-home of the majestic Royal Bengal Tiger-are the largest littoral mangrove forest in the world as well as the most important and the biggest forest of Bangladesh. This land is the safest sanctuary for a diverse range of wildlife. The careless look of amazing deer, a rare glimpse or a sudden terrifying roar or even footprints of Royal Bengal Tiger on the swampy land of Sundarbans, hiking against the bushy and thick jungles of Sundarbans etc will completely satisfy any adventure seekers.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">Yes. Apart from some epic storytelling natural lands, the growing urban landscapes manifest the truly blend of modern and traditional setting of Bangladesh too. With rising architectural wonders and topnotch urban facility the country has its major urban areas in Dhaka, Chittagong, Khulna and Sylhet. Even in these urbanized areas, you will find some archeological heritages which will constantly remind us about our traditional and cultural root. If you have been mesmerized by the stories of our rural, hilly and watery land, then you should also be amazed by the urban wonders.</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<h3 style="text-align: justify;"><span style="color: #000000;">Climate</span></h3>
<p style="text-align: justify;"><span style="color: #000000;">Our climate, frankly, complements our lands. It completes the stories of our land. Bangladesh is not only a land of stories, but also a land of six wonderful seasons. Seasons that will definitely excite you with their diverse characteristics.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">If you haven’t had enjoyed true summer of monsoon area yet, Bangladesh is the right place to do so. A lot of activities will appear; jumping on the river, filling the tummy with mind-blowing range of seasonal fruits, or even cooling down your body with a blissful sip from sorbet made from those heavenly fruits.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">If you think rain in Bangladesh brings only water, you are completely wrong. It brings life. It brings joy to the thirsty soul of both urban and rural life. The nature gets their nectar in this season. Dried-up ponds finally find a way to become resourceful. And our lovely people? They dance with joy to celebrate the blessings of nature.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">After giving the people to celebrating their life and the nature around them with raindrops, then comes the autumn. The heavenly clouds, floating in the clear sky that comprises thousands shades of blue, will allure you into becoming a painter.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">If you are already mesmerized with the heavenly blue in autumn, do not hesitate to follow the late autumn. It is the season which brings happiness for the farmers; for their hard work all over the year. The farmers are busy with harvesting. And the women in their homes sing with joy to welcome the arrival of new crops. At the end, with dew drops this season tips off the arrival of the upcoming season winter.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">With a thick blanket of fog, the winter finally arrives in Bangladesh. Even if it gets chilly with a rising urge to stay under the comfy blanket, Bangladeshi winter has plenty of stories to offer you. Freshly baked vapa pitha in front of warm cooker or a sip of freshly collected juice, a chilling walk through the fog in village area, warming sunshine from the rising sun in rural landscape, magnanimous flock of migratory birds etc. will take your breath away. Just to experience these stories you will come back here again and again.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">Spring is the last season in Bengali year; but not the least. We call it the season of celebration. We celebrate the awaken nature which was frozen in winter. The presence of joy and life is everywhere. The nature blooms with various flowers. New leaves gain life in their own trees. When do you know the spring is already here? It’s simple! With sweet songs, our birds will inform you about spring.</span></p>
                </div>
            </article>
          </div>

  <div class="clearfix"></div>
<footer class="footer">&#169;2016. All rights reserved to<br>
   Sabrina Nasrin<br>
   Department of CSE


  </footer>








</body>
</html>